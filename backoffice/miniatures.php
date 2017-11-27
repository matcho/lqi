<?php
include "../pgs/entete.php";
?>
<body>
<?php
// Générer les miniatures des photos des candidats

// Connexion BD
/*include "../lib/bdd.php";
$link = connexion();

$req = "SELECT nom, prenom, photos, biographie, presentation FROM lqi_inscrits WHERE id_commande='$id';";
$res = $link->query($req);
$ligne = $res->fetch();
if (! $ligne) {
	echo "Aucune donnée pour l'id fourni";
	exit;
}*/

$dossierUpload = "../upload";

// parcours de tous les dossiers
$du = opendir($dossierUpload);
while ($dossier = readdir($du)) {
	$cheminDossier = $dossierUpload . "/" . $dossier;
	//echo "Dossier: $dossier / fp : $cheminDossier<br/>";
	if (is_dir($cheminDossier) && substr($dossier, 0, 1) != '.' && $dossier != 'actualites') {
		//echo $cheminDossier . "<br/>";
		// parcours des images du dossier
		$sousDossier = opendir($cheminDossier);
		while ($fichier = readdir($sousDossier)) {
			if (substr($fichier, 0, 1) != '.' && strtolower(substr($fichier, -3)) == 'jpg' && substr($fichier, 0, 5) != 'mini_') {
				$cheminFichier = $cheminDossier . "/" . $fichier;
				//echo "Traitement de $fichier / fp : $cheminFichier <br/>";
				// traitement d'une image
				$cheminMiniature = $cheminDossier . "/" . "mini_" . $fichier;
				if (file_exists($cheminMiniature)) {
					echo '<span class="miniature-existe">= ' . $cheminMiniature . ' existe déja</span>';
				} else {
					// génération de la miniature
					if (miniature($cheminFichier, $cheminMiniature, "300")) {
						echo '<span class="miniature-generee"+ ' . $cheminMiniature . ' généré';
					}
				}
				echo "<br/>";
			}
		}
		closedir($sousDossier);
		echo "<br/>";
	}
}
//closedir($dossierUpload);

// merci http://www.journaldunet.com/developpeur/tutoriel/php/040721-php-gd-creer-miniature.shtml
function miniature($chemin_original, $chemin_miniature, $largeur_mini) {

	$taille = getimagesize($chemin_original);
	$mpix = $taille[0] * $taille[1];
	if ($mpix > 25000000) {
		echo '<span class="miniature-erreur">- ' . $chemin_original . ' a une taille trop importante : ' . intval($mpix / 1000000) . ' mega pixels</span>';
		return false;
	}
	$image_origine = imagecreatefromjpeg($chemin_original);
	$largeur_origine = imagesx($image_origine);
	$hauteur_origine = imagesy($image_origine);
	$hauteur_mini = $hauteur_origine * $largeur_mini /   $largeur_origine;
	$image_finale = imagecreatetruecolor($largeur_mini, $hauteur_mini);
	imagecopyresampled($image_finale, $image_origine, 0, 0, 0, 0,   $largeur_mini, $hauteur_mini, imagesx($image_origine), imagesy($image_origine) );

	imagejpeg($image_finale, "$chemin_miniature", 100);

	imagedestroy($image_finale);
	imagedestroy($image_origine);

	return true;
}

?>

</body>
</html>