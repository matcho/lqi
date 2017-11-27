<?php
include "entete.php";
include "../lib/email.php";
include "../lib/bdd.php";
?>
<body>
    <header>
		<div id="barremenu">
            <div id="logo">
                    <img src="../img/logo/100x100.png" alt="La Quatrième Image" />
            </div>
        </div>
	</header>
    <section class="infodossier intro content">
        <div id="content">

<?php
$link = connexion();

// Récupérer les données
$nom = prot($_POST['nom']);
$prenom = prot($_POST['prenom']);
$dn = prot($_POST['dn']);
$email = prot($_POST['email']);
$cp = prot($_POST['cp']);
$adresse = prot($_POST['adresse']);
$ville = prot($_POST['ville']);
$pays = prot($_POST['pays']);
$biographie = prot($_POST['biographie']);
$presentation = prot($_POST['presentation']);
$idCommande = prot($_POST['id_commande']);

// pour éviter de générer des emails si un pignouf recharge la page
if ($idCommande != '') {
	// Créer un répertoire portant le prénom et le nom du candidat, plus une clé unique (date?)
	$dossierUpload = "../upload";
	$nomDossierPerso = date("Y-m-d") . "_" . $prenom . '_' . $nom;
	$cheminDossierPerso = $dossierUpload . "/" . $nomDossierPerso;
	if (! file_exists($cheminDossierPerso)) {
		mkdir($cheminDossierPerso);
	}

	// Déplacer fichiers uploadés dans ce répertoire
	$cheminsPhotos = array();
	$nbPhotos = count($_FILES['photo']);
	for ($i=0; $i < $nbPhotos; $i++) {
		$cheminTmp = $_FILES['photo']['tmp_name'][$i];
		$nomFichier = $_FILES['photo']['name'][$i];
		// protection contre les noms de fichiers contenant des virgules
		$nomFichier = str_replace(",", "-", $nomFichier);
		if ($nomFichier) {
			$cheminDestination = $cheminDossierPerso . "/" . $nomFichier;
			$nomDestination = $nomDossierPerso . "/" . $nomFichier;
			move_uploaded_file($cheminTmp, $cheminDestination);
			$cheminsPhotos[] = $nomDestination;
		}
	}
	//echo "Chemins Photos: " . print_r($cheminsPhotos, true) . "<br/><br/>";
	$cheminsPhotosTexte = implode(',', $cheminsPhotos);
	//echo "Chemins Photos Texte: $cheminsPhotosTexte<br/><br/>";

	// Enregistrer le bousin dans la BD
	$requeteMaj = "UPDATE lqi_inscrits SET "
		. "inscription_complete=1,"
		. "date_inscription='" . date("Y-m-d") . "',"
		. "nom='$nom',"
		. "prenom='$prenom',"
		. "dn='$dn',"
		. "email='$email',"
		. "adresse='$adresse',"
		. "ville='$ville',"
		. "cp='$cp',"
		. "pays='$pays',"
		. "biographie='$biographie',"
		. "presentation='" . $presentation . "',"
		. "photos='" . prot($cheminsPhotosTexte) . "'"
		. " WHERE id_commande = '$idCommande'";
	mysql_query($requeteMaj);

	// Envoyer un email de confirmation
	$mailConfirmation = "Bonjour $prenom $nom,\n\n"
		. "Votre dossier a été enregistré. Votre candidature est maintenant complète.\n"
		. "Vous recevrez prochainement la décision concernant votre sélection.\n\n"
		. "La Quatrième Image";
	mail($email, "Votre dossier est enregistré", $mailConfirmation, $officiel_from);

	// Envoyer un email au patron ?
	mail($notif_to, "Un nouveau candidat a complété son dossier", "Il s'agit de $prenom $nom ($email).", $notif_from);
}

?>

			<h1><?php echo $idCommande != '' ? 'Merci' : 'Erreur' ?><span id="title_line"></span></h1>
			<div id="dossier-enregistre">
				<div id="message">
					<?php if($idCommande == ''): ?>
					<div class="texte">Identifiant de commande introuvable.</div>
					<?php else: ?>
					<div class="texte">Votre dossier a bien été enregistré !</div>
					<div class="texte">Vous allez recevoir un mail de confirmation.</div>
					<?php endif; ?>
					<a href="https://laquatriemeimage.com">
						Retourner sur le site La Quatrième Image
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
		include "pied.php";
	?>
</body>
</html>
