<?php
	// démarrage de session pour conserver le choix de la langue
	session_start();
	// NOTE: l'entête n'est pas inclus à cause de ce fichu <html> auquel il faut
	// mettre une classe 100%
?>
<!doctype html>
<html class="cent-pour-cent">
<head>
	<meta charset="utf-8">
	<title>La Quatrième Image</title>
	<link href="../styles/style.css" rel="stylesheet" media="screen" />
	<link href="../styles/mediaqueries.css" rel="stylesheet" media="screen" />
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../js/pages.js"></script>
</head>
<?php include "../lib/trad.php"; ?>
<body class="cent-pour-cent">
	<?php
		$auteur = isset($_GET['auteur']) ? $_GET['auteur'] : "felicia_simion";
		$nom = isset($_GET['nom']) ? $_GET['nom'] : "";
		$retour = isset($_GET['retour']) ? $_GET['retour'] : "";
		$retour = str_replace('|', '&', $retour);
		//$idx = isset($_GET['idx']) ? $_GET['idx'] : 0;
	?>
	<div id="colonnemenu">
		<div id="logo">
			<a href="../index.php">
				<img src="../img/logo/100x100.png" alt="La Quatrième Image" />
			</a>
		</div>
		<!--<h2><?php echo $nom ?><span id="title_line"></h2>-->
		<?php
			include "galeries/" . $auteur . "_bio.php";
		?>
	</div>
    <div id="diaporama-plein-ecran">
		<div class="controles">
			<a href="<?php echo $retour ?>">
				<img class="fermer" src="../img/fermer.png" />
			</a>
			<img class="fleche-droite" src="../img/droite_noir.png" />
			<img class="fleche-gauche" src="../img/gauche_noir.png" />
			<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
		</div>
		<div class="conteneur-image">
		<?php
			include "galeries/" . $auteur . "_images.html";
		?>
		</div>
		<div class="copyright-image">
			© <?php echo $nom ?>
		</div>
    </div>
</body>
</html>