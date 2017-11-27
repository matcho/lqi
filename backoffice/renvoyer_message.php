<?php
	include "../pgs/entete.php";
	include "../lib/bdd.php";
	include "../lib/email.php";

	$link = connexion();
	$envoi = isset($_POST['envoi']) && $_POST['envoi'] != '' ? $_POST['envoi'] : null;
	$action = isset($_POST['action']) && $_POST['action'] != '' ? $_POST['action'] : null;
?>
<body>
    <header>
		<div id="barremenu">
            <div id="logo">
                    <img src="../img/logo/100x100.png" alt="La Quatrième Image" />
            </div>
            <div id="titre-backoffice">
                Backoffice
            </div>
        </div>
	</header>
    <section class="backoffice intro renvoyer-message content">
        <div id="content">
			<h1>Renvoyer un message<span id="title_line"></span></h1>

			<?php
			// récupération de la liste des candidats n'ayant pas rempli le dossier
			$req = "SELECT * FROM lqi_inscrits WHERE inscription_complete = 0 ORDER BY pp_email;";
			$res = $link->query($req);
			$candidats = array();
			while ($ligne = $res->fetch()) {
				$candidats[$ligne['id_commande']] = $ligne;
			}
			?>

			<?php if($action == "envoyer"): ?>
				<?php
				// envoi des messages à tous les destinataires cochés
				//echo "ENVOI: " . print_r($envoi, true) . "<br/>";
				$candidatsCoches = array();
				foreach ($envoi as $id_commande) {
					$candidatsCoches[] = $candidats[$id_commande];
				}
				foreach ($candidatsCoches as $cc) {
					$lienFormulaire = "https://laquatriemeimage.com/pgs/inscription.php";
					$lienFormulaire .= "?id_commande=" . $cc['id_commande'];
					// envoi d'un email invitant à créer le compte, avec copie
					$emailCandidat = "Bonjour " . $cc['first_name'] . " " . $cc['last_name'] . ",\n\n"
						. "Ce courrier vous est renvoyé car suite à votre paiement, vous n'avez pas complété votre dossier.\n"
						. "Suivez ce lien pour compléter votre inscription : $lienFormulaire\n\n"
						. "La Quatrième Image";
					// anglais en dessous
					$emailCandidat .= "\n\nHello " . $cc['first_name'] . " " . $cc['last_name'] . ",\n\n"
						. "We send this e-mail to you because although your payment was received, you did not complete your registration.\n"
						. "Follow this link to complete your registration : $lienFormulaire\n\n"
						. "La Quatrième Image";
					mail($cc['pp_email'] . "," . $notif_to , "La Quatrieme Image - complétez votre dossier - complete your registration", $emailCandidat, $officiel_from);
					//echo "Voici ce qui sera envoyé:<br/>";
					//echo $emailCandidat;
					echo "Un email a été envoyé à " . $cc['pp_email'] . " pour compléter son dossier";
					echo "<br/><br/>";
				}
				?>
				<form action="renvoyer_message.php" method="GET">
					<input type="submit" value="RETOUR" />
				</form>
			<?php else: ?>
				<div class="outils-coche">
					<a href="#" id="tout-cocher">tout cocher</a> - <a href="#" id="tout-decocher">tout décocher</a>
				</div>
				<form id="renvoyer-messages" method="post">
					<?php
					foreach ($candidats as $c) {
						echo '<input type="hidden" name="action" value="envoyer" />';
						echo '<input type="checkbox" name="envoi[]" value="' . $c['id_commande'] . '" checked />';
						echo '<div class="candidat-en-attente">';
						echo $c['pp_prenom'] . " " . $c['pp_nom'] . " - " . $c['pp_email'] . "<br/>"
							. '<span class="details-cea">catégorie "' . $c['categorie'] . '"' . ", payé le " . $c['date_paiement'] . "</span>";
						echo "</div>";
						echo '<br/>';
					}
					?>
					<br/><br/>
					<input type="submit" value="Renvoyer un message à chaque participant coché" id="valider-renvoyer-messages" />
				</form>
			<?php endif; ?>

		</div>
	</section>
</body>
</html>