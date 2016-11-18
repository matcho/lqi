<?php
	include "../pgs/entete.php";
	include "../lib/bdd.php";
	include "../lib/email.php";

	$link = connexion();
	$action = isset($_POST['action']) ? $_POST['action'] : null;
	$contenu = isset($_POST['contenu']) ? $_POST['contenu'] : '';
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
    <section class="backoffice intro content">
        <div id="content">
			<h1>Envoi newsletter<span id="title_line"></span></h1>

			<?php
			// Destinataires
			$destinataires = array();
			$emailsDestinataires = array();
			$req = "SELECT * FROM lqi_newsletter WHERE abonnement=1;";
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				$destinataires[] = $ligne;
				$emailsDestinataires[] = $ligne['email'];
			}
			$nbDestinataires = count($destinataires);
			//$emailsDestinataires = implode(', ', $emailsDestinataires);

			// Désabonnés
			$desabonnes = array();
			$req = "SELECT * FROM lqi_newsletter WHERE abonnement=0;";
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				$desabonnes[] = $ligne;
			}
			$nbDesabonnes = count($desabonnes);

			// envoi de la lettre par email
			if ($action == "valider-envoi") {
				$contenu = stripslashes($contenu); // merdic quotes machin truc
				// ajout des mentions légales
				$urlDesabonnement = "https://laquatriemeimage.com/pgs/desinscription_newsletter.php?email=";
				$messageDesabonnement .= "\n\nSi vous ne souhaitez plus recevoir de messages de La Quatrième Image,\n"
					. "rendez-vous sur la page $urlDesabonnement";
				// mail avec copie à l'admin
				//$emailsDestinataires .= ", $notif_to";
				$envoisReussis = 0;
				$envoisRates = 0;
				foreach ($emailsDestinataires as $adr) {
					$contenuPerso = $contenu . $messageDesabonnement . $adr;
					if (mail($adr, "Newsletter de La Quatrième Image", $contenuPerso, $officiel_from)) {
						echo "La lettre a été envoyée à $adr<br/>";
						$envoisReussis++;
					} else {
						echo "Échec lors de l'envoi de la lettre à $adr<br/>";
						$envoisRates++;
					}
				}
				echo "<br/><br/><br/>";
				// Copie à l'admin
				$contenuAdmin = "$contenu\n\nAdmin:\n$envoisReussis envois réussis; $envoisRates envois ratés.";
				mail($notif_to, "Newsletter de La Quatrième Image - copie admin", $contenuAdmin, $notif_from);
			}
			?>

			<h3>Saisir le texte de la newsletter</h3>
			<form id="envoi-newsletter" method="post">
				<input type="hidden" name="action" value="valider-envoi" />
				<textarea name="contenu" id="nl-contenu"><?php echo stripslashes($contenu) ?></textarea>
				<br/>
				<input type="submit" value="Envoyer" id="envoyer-newsletter" />
			</form>

			<h3>Les <?php echo $nbDestinataires ?> destinataires suivants recevront la lettre :</h3>
			<?php
			foreach ($destinataires as $ligne) {
				echo '<div class="destinataire">' . $ligne['nom'] . " (" . $ligne['email'] . ")</div>";
			}
			?>

			<br/><br/>
			<h3>Les <?php echo $nbDesabonnes ?> destinataires suivants se sont désabonnés; ils ne recevront PAS la lettre :</h3>
			<?php
			foreach ($desabonnes as $ligne) {
				echo '<div class="destinataire desabonne">' . $ligne['nom'] . " (" . $ligne['email'] . ")</div>";
			}
			?>
		</div>
	</section>
	<?php
		deconnexion($link);
	?>
</body>
</html>