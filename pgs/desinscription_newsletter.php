<?php
	include "entete.php";
	include "../lib/bdd.php";
	$link = connexion();
	$email = isset($_GET['email']) ? $_GET['email'] : null;

	$message = "Adresse email non reconnue.";
	if ($email != null) {
		$req = "SELECT * FROM lqi_newsletter WHERE email='$email';";
		$res = requete($req);
		$ligne = mysql_fetch_assoc($res);
		// Vérification de l'existence de cette adresse dans la BDD
		if ($ligne && $ligne['email'] != '') {
			// Mise à jour - désinscription
			$req = "UPDATE lqi_newsletter SET abonnement=0 WHERE email='$email';";
			requete($req);
			$message = "Votre adresse $email a bien été désinscrite de la newsletter.";
		}
	}
?>
<body>
    <header>
		<div id="barremenu">
            <div id="logo">
                    <img src="../img/logo/100x100.png" alt="La Quatrième Image" />
            </div>
        </div>
	</header>
    <section class="desinscription-nl intro content">
        <div id="content">
			<h1>Désinscription de<br/>la newsletter<span id="title_line"></span></h1>
			<div id="desinscription-message">
				<div id="message">
					<div class="texte"><?php echo $message ?></div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include "pied.php";
		deconnexion($link);
	?>
</body>
</html>