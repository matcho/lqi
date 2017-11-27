<?php
	include "../pgs/entete.php";
	include "../lib/bdd.php";
	include "../lib/email.php";

	$link = connexion();
	$idActu = isset($_GET['id-actu']) && $_GET['id-actu'] != '' ? $_GET['id-actu'] : null;
	$action = isset($_POST['action']) ? $_POST['action'] : null;

	$titre_fr = isset($_POST['titre_fr']) ? ($_POST['titre_fr']) : '';
	$titre_en = isset($_POST['titre_en']) ? ($_POST['titre_en']) : '';
	$texte_fr = isset($_POST['texte_fr']) ? ($_POST['texte_fr']) : '';
	$texte_en = isset($_POST['texte_en']) ? ($_POST['texte_en']) : '';
	$date = isset($_POST['date']) ? $_POST['date'] : '';
	// date du jour par défaut
	if ($date == '') {
		$date = date("Y-m-d");
	}
	$copyright = isset($_POST['copyright']) ? $_POST['copyright'] : '';
	$lien = isset($_POST['lien']) ? $_POST['lien'] : '';
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
    <section class="backoffice intro actualites content">
        <div id="content">
			<h1>Actualités<span id="title_line"></span></h1>

			<?php

			// enregistrement de l'actu dans la BDD
			if ($action == "valider-actu") { // NOUVELLE ACTU
				// Déplacement de l'image uploadée
				$cheminTmp = $_FILES['image']['tmp_name'];
				$nomFichier = $_FILES['image']['name'];
				$nouveauNom = '';
				if ($nomFichier) {
					$nouveauNom = date("Y-m-d") . "_" . $nomFichier;
					$cheminDestination = "../upload/actualites/" . $nouveauNom;
					move_uploaded_file($cheminTmp, $cheminDestination);
				}
				// Insertion en BDD
				$requeteInsertion = "INSERT INTO lqi_actualites VALUES(DEFAULT, '$date', '$titre_fr', '$titre_en', '$texte_fr', '$texte_en', '$lien', '$nouveauNom', '$copyright')";
				$link->query($requeteInsertion);
				// Notification à l'admin
				$contenu = "Une nouvelle actualité a été enregistrée.\n\n"
					. "Titre (fr): " . stripslashes($titre_fr) . "\n"
					. "Titre (en): " . stripslashes($titre_en) . "\n\n"
					. "Texte (fr): " . stripslashes($texte_fr) . "\n\n"
					. "Texte (en): " . stripslashes($texte_en) . "\n";
				mail($notif_to, "Nouvelle actualité", $contenu, $notif_from);
				
			} elseif ($action == "modifier-actu") { // MODIFICATION
				// Mise à jour BDD
				$requeteMaJ = "UPDATE lqi_actualites SET date='$date', titre_fr='$titre_fr', titre_en='$titre_en', texte_fr='$texte_fr', texte_en='$texte_en', lien='$lien', copyright='$copyright' WHERE id='$idActu'";
				$link->query($requeteMaJ);
				// pas besoin d'email à l'admin... @TODO peut-être que si ?
			}

			// Actualités
			$actualites = array();
			$req = "SELECT * FROM lqi_actualites ORDER BY date DESC, id DESC;";
			$res = $link->query($req);
			while ($ligne = $res->fetch()) {
				$actualites[] = $ligne;
			}

			$nbActu = count($actualites);
			// Récupération de l'actu à modifier
			if ($idActu !== null) {
				for ($i = 0; $i < count($actualites); $i++) {
					$actualite = $actualites[$i];
					if ($actualite['id'] == $idActu) {
						$titre_fr = $actualite['titre_fr'];
						$titre_en = $actualite['titre_en'];
						$texte_fr = $actualite['texte_fr'];
						$texte_en = $actualite['texte_en'];
						$date = $actualite['date'];
						$copyright = $actualite['copyright'];
						$lien = $actualite['lien'];
					}
				}
			}
			?>

			<?php if ($idActu === null): ?>
			<h3>Saisir une nouvelle actualité</h3>
			<?php else: ?>
			<h3>
				Modifier l'actualité n°<?php echo $idActu ?>
				<a id="effacer-formulaire" href="actualites.php">(repasser en mode "création")</a>
			</h3>
			<?php endif; ?>
			<form id="nouvelle-actu" method="post" enctype="multipart/form-data">
				<input type="hidden" name="action" value="<?php echo $idActu === null ? 'valider-actu' : 'modifier-actu' ?>" />
				<label>Titre (fr):</label>
				<input type="text" id="titre_fr" name="titre_fr" value="<?php echo stripslashes($titre_fr) ?>" />
				<br/>
				<label>Titre (en):</label>
				<input type="text" id="titre_en" name="titre_en" value="<?php echo stripslashes($titre_en) ?>" />
				<br/>
				<label>Date:</label>
				<input type="text" id="date" name="date" placeholder="AAAA-MM-JJ" value="<?php echo stripslashes($date) ?>" />
				<br/>
				<label>Texte (fr):</label>
				<textarea name="texte_fr" id="texte_fr"><?php echo stripslashes($texte_fr) ?></textarea>
				<br/>
				<label>Texte (en):</label>
				<textarea name="texte_en" id="texte_en"><?php echo stripslashes($texte_en) ?></textarea>
				<br/>
				<label>Lien:</label>
				<input type="text" id="lien" name="lien" placeholder="http://abc.com/mapage OU les_jeunes_talents.php?nom=kohlerova" value="<?php echo stripslashes($lien) ?>" />
				<br/>
				<label>Copyright:</label>
				<input type="text" id="copyright" name="copyright" placeholder="Prenom NOM" value="<?php echo stripslashes($copyright) ?>" />
				<?php if ($idActu === null): ?>
				<br/>
				<label>Image:</label>
				<input type="file" id="image" name="image" />
				<?php endif; ?>
				<br/><br/>
				<input type="submit" value="<?php echo $idActu === null ? 'Enregistrer' : 'Modifier' ?>" id="enregistrer-actu" />
			</form>

			<div id="historique">
				<h3>Historique des actualités (<?php echo $nbActu ?>) :</h3>
				<?php
				foreach ($actualites as $actu) {
					echo '<div class="bo-actualite" data-id="' . $actu['id'] . '">';
					echo '<h4>#' . $actu['id'] . ' (' . $actu['date'] . ") - " . $actu['titre_fr'] . ' - ';
					echo ' <a class="modification-actu" href="actualites.php?id-actu=' . $actu['id'] . '">Modifier</a>';
					echo ' <a class="suppression-actu" href="#" data-id-actu="' . $actu['id'] . '">Supprimer</a>';
					echo '</h4>';
					echo '<label>Titre (fr):</label>' . $actu['titre_fr'] . '<br/>';
					echo '<label>Titre (en):</label>' . $actu['titre_en'] . '<br/>';
					echo '<label>Texte (fr):</label><p class="actu-texte">' . $actu['texte_fr'] . '</p>';
					echo '<label>Texte (en):</label><p class="actu-texte">' . $actu['texte_en'] . '</p>';
					echo '<label>Copyright:</label>' . $actu['copyright'] . '<br/>';
					echo '<label>Lien:</label>' . $actu['lien'] . '<br/>';
					echo '</div>';
				}
				?>
			</div>
		</div>
	</section>
</body>
</html>
