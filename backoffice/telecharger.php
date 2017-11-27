<?php
// Télécharger toutes les photos d'un candidat, au format ZIP

function telecharger($nomFichier) {
	// téléchargement !
	header("Location: https://laquatriemeimage.com/upload/$nomFichier");
}

$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id == null) {
	echo "Aucun id fourni";
	exit;
}

// Connexion BD
include "../lib/bdd.php";
$link = connexion();

$req = "SELECT nom, prenom, photos, biographie, presentation FROM lqi_inscrits WHERE id_commande='$id';";
$res = $link->query($req);
$ligne = $res->fetch();
if (! $ligne) {
	echo "Aucune donnée pour l'id fourni";
	exit;
}

$dossierUpload = "../upload";
$photos = explode(',', $ligne['photos']);
$nomArchive = $ligne['nom'] . "_" . $ligne['prenom'] . ".zip";
$cheminArchive = $dossierUpload . "/" . $nomArchive;
$nomTXT = $ligne['nom'] . "_" . $ligne['prenom'] . ".txt";
$cheminTXT = $dossierUpload . "/" . $nomTXT;

// évite d'ajouter involontairement des fichiers à une archive existante
if (file_exists($cheminArchive)) {
	unlink($cheminArchive);
}

// création de l'archive
$zip = new ZipArchive();
if ($zip->open($cheminArchive, ZipArchive::CREATE) === true) {
	// ajout des photos
	foreach ($photos as $photo) {
		$cheminPhoto = $dossierUpload . '/' . $photo;
		$zip->addFile($cheminPhoto, $photo);
	}

	// fichier texte contenant la biographie et la présentation
	$contenuTXT = "## Candidature de " . $ligne['prenom'] . " " . $ligne['nom'] . ":\n\n"
		. "# Biographie:\n" . $ligne['biographie'] . "\n\n"
		. "# Présentation:\n" . $ligne['presentation'] . "\n";
	file_put_contents($cheminTXT, $contenuTXT);
	$zip->addFile($cheminTXT, $nomTXT);

	// fermeture de l'archive
	$zip->close();
	telecharger($nomArchive);

	// suppression du txt
	unlink($cheminTXT);
} else {
	echo "Impossible de créer l'archive dans [$cheminArchive]";
	exit;
}
