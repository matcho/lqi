<?php
/*
 * Vérificateur de transaction PayPal
 */

include "../lib/email.php";

// Envoi des infos a Paypal
$req = "cmd=_notify-validate";

foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req.= "&$key=$value";
}

$fp = curl_init('https://www.sandbox.paypal.com/cgi-bin/webscr');
//$fp = curl_init('https://www.paypal.com/cgi-bin/webscr');
curl_setopt($fp, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_RETURNTRANSFER,1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($fp, CURLOPT_FORBID_REUSE, 1);
curl_setopt($fp, CURLOPT_HTTPHEADER, array('Connection: Close'));

if( !($res = curl_exec($fp)) ) {
    curl_close($fp);
    exit;
}
curl_close($fp);

// Connexion BD
include "../lib/bdd.php";
$link = connexion();

// Debug des détails envoyés par PayPal
foreach ($_POST as $key => $value) {
	$detailsPaypal .= $key . " = " .$value ."\n";
}

// Le paiement est validé
if (strcmp(trim($res), "VERIFIED") == 0) {
	// Debug même si réussi
    //mail($notif_to, "Paiement réussi!", "$detailsPaypal\n\n\n\nREQ: $req\n\n\n\nRES: $res", $notif_from);

	// Vérifier que le statut du paiement est complet
    if ($_POST['payment_status'] == "Completed") {
        // Vérification de l'e-mail du vendeur
        if ($email_vendeur == $_POST['receiver_email']) {
            // Déduction du montant de la commande depuis la "categorie"
            $donneesCommande = explode('||', $_POST['custom']);
			$idCommande = $donneesCommande[0];
			$categorie = $donneesCommande[1];
			$montant = "35.00";
			if ($categorie == "jeunes_talents") {
				$montant = "15.00";
			}

			// patch pour si PayPal ne nous communique pas d'adresse email
			$emailValide = '';
			if (isset($donneesCommande[2])) {
				$emailValide = $donneesCommande[2];
			}
			$emails = array($emailValide, $_POST['payer_email']);
			$emails = array_filter($emails);
			$emailsTexte = implode(',', $emails);

            // Vérification de la concordance du montant
            if ($_POST['mc_gross'] == $montant) {
				// Préparation du lien vers le formulaire d'inscription
				$lienFormulaire = "https://laquatriemeimage.com/pgs/inscription.php";
				$lienFormulaire .= "?id_commande=" . $idCommande;
				//$lienFormulaire .= "&choix=" . $categorie;

                // Insertion dans la BDD de la commande payée
				$requeteInsertion = "INSERT INTO lqi_inscrits VALUES('"
					. $idCommande . "', '" . $categorie . "', 1, '" . $emailsTexte
					. "', '" . prot($_POST['last_name']) . "', '" . prot($_POST['first_name']) . "', '" . $_POST['mc_gross']
					. "', '" . prot($detailsPaypal) . "', '" . date("Y-m-d") . "', '" . $lienFormulaire . "', 0"
					. ", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
				mysql_query($requeteInsertion);

				// email à envoyer au candidat pour attester de son paiement, avec un lien
				// vers le formulaire d'inscription
				$emailCandidat = "Bonjour " . $_POST['first_name'] . " " . $_POST['last_name'] . ",\n\n"
					. "Nous avons bien reçu la confirmation de votre paiement.\n"
					. "Suivez ce lien pour compléter votre inscription : $lienFormulaire\n\n"
					. "La Quatrième Image";
				// anglais en dessous
				$emailCandidat .= "\n\nHello " . $_POST['first_name'] . " " . $_POST['last_name'] . ",\n\n"
					. "Confirmation of your payment has been received.\n"
					. "Follow this link to complete your registration : $lienFormulaire\n\n"
					. "La Quatrième Image";
				mail($emailsTexte . "," . $notif_to , "La Quatrieme Image - confirmation de paiement - payment confirmation", $emailCandidat, $officiel_from);

				// email de debug pour l'admin
				mail($notif_to, "Un nouveau candidat a payé son inscription", "Le payeur est: " . $_POST['payer_email'] . " (" . $emailValide . ")\n\nIl recevra : $lienFormulaire\n\nRequete: $requeteInsertion", $notif_from);
            } else {
				mail($notif_to, "[probleme paiement] Montant invalide", "Le montant est: " . $_POST['mc_gross'], $notif_from);
            }
        } else {
			mail($notif_to, "[probleme paiement] Receiver email invalide", "L'email est: " . $_POST['receiver_email'], $notif_from);
        }
    } else {
		mail($notif_to, "[probleme paiement] Statut autre que 'completed'", "Le statut est: " . $_POST['payment_status'], $notif_from);
    }
} else {
    // Le paiement est invalide, envoi d'un mail au vendeur
    mail($notif_to, "Paiement invalide", "$detailsPaypal\n\nREQ: $req\n\n\n\nRES: $res", $notif_from);
}

deconnexion($link);
?>
