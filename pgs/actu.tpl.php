<?php
/**
 * Template pour l'affichage d'une actualité
 */

$dossierUpload = "../upload/actualites/";
$cheminImage = $dossierUpload . $a['image'];
$jour = substr($a['date'], 8, 2);
$mois = substr($a['date'], 5, 2);
$date = $jour . '/' . $mois;
?>

<a id="actu-<?php echo $a['id'] ?>" class="ancre-actu">coucou l'ancre</a>
<div class="pave-actu<?php echo $gauche ? ' gauche' : ' droite' ?>">
	<div class="contenu-pave-actu">
		<div class="surimg">
			<span class="sur-copyright">© <?php echo $a['copyright'] ?></span>
		</div>
		<img class="image-actu" src="<?php echo $cheminImage ?>" />
		<div class="texte-actu">
			<span class="date"><?php echo $date ?></span>
			<h2><?php echo trad($a['titre_fr'], $a['titre_en']) ?></h2>
			<p><?php echo str_replace("\n", "<br/>", trad($a['texte_fr'], $a['texte_en'])) ?></p>
			<?php if ($a['lien'] != ''): ?>
				<a class="lien-actu" href="<?php echo $a['lien'] ?>">
					Lien
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>
