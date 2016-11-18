<?php
/**
 * Template pour l'affichage d'un candidat (coordonnées + photos) dans le backoffice
 */

$dossierUpload = "../upload";
$photos = explode(',', $c['photos']);
?>

<div class="candidat">
	<div class="profil">
		<div class="coordonnees">
			<div class="bloc-coordonnees">
				<label>Nom:</label>
				<span class="valeur"><?php echo $c['nom'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Prénom:</label>
				<span class="valeur"><?php echo $c['prenom'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Email:</label>
				<span class="valeur"><?php echo $c['email'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Né le:</label>
				<span class="valeur"><?php echo $c['dn'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Adresse:</label>
				<span class="valeur"><?php echo $c['adresse'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>CP:</label>
				<span class="valeur"><?php echo $c['cp'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Ville:</label>
				<span class="valeur"><?php echo $c['ville'] ?></span>
			</div>
			<div class="bloc-coordonnees">
				<label>Pays:</label>
				<span class="valeur"><?php echo $c['pays'] ?></span>
			</div>
			<div class="clear"></div>
		</div>

		<label>Biographie:</label>
		<p class="texte">
			<?php echo stripslashes($c['biographie']) ?>
		</p>
		<label>Présentation:</label>
		<p class="texte">
			<?php echo stripslashes($c['presentation']) ?>
		</p>
	</div>
	<div class="telecharger-photos">
		<a href="telecharger.php?id=<?php echo $c['id_commande'] ?>">Télécharger les photos<br/>au format ZIP</a>
	</div>
	<div class="notation">
		Note :
		<select class="notation-candidat" data-id-candidat="<?php echo $c['id_commande'] ?>">
			<option value="" <?php echo $c['note'] == null ? 'selected' : '' ?>>-</option>
			<option value="1" <?php echo $c['note'] == 1 ? 'selected' : '' ?>>1</option>
			<option value="2" <?php echo $c['note'] == 2 ? 'selected' : '' ?>>2</option>
			<option value="3" <?php echo $c['note'] == 3 ? 'selected' : '' ?>>3</option>
			<option value="4" <?php echo $c['note'] == 4 ? 'selected' : '' ?>>4</option>
			<option value="5" <?php echo $c['note'] == 5 ? 'selected' : '' ?>>5</option>
		</select>
	</div>
	<div class="photos">
		<?php
		foreach ($photos as $photo) {
			$cheminPhoto = $dossierUpload . '/' . $photo;
			$miniPhotoParts = explode('/', $photo);
			$miniPhoto = $miniPhotoParts[0] . '/mini_' . $miniPhotoParts[1];
			$cheminMiniPhoto = $dossierUpload . '/' . $miniPhoto;
			if (! file_exists($cheminMiniPhoto)) {
				// en principe si l'image miniature n'existe pas, c'est que
				// l'originale était trop grosse et que la limite de mémoire de
				// 128 Mo sur OVH ne permettait pas de l'ouvrir avec GD
				$cheminMiniPhoto = "../img/image_trop_grosse.png";
			}
			echo '<a href="' . $cheminPhoto . '" target="_blank">'
				.'<div class="photo-carree" style="background-image: url(\'' . $cheminMiniPhoto . '\')">'
				//.'<img src="' . $cheminPhoto . '" class="photo-candidat" />'
				.'</div>'
				.'</a>';
		}
		?>
	</div>
</div>
