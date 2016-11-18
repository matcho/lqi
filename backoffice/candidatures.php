<?php
	include "../pgs/entete.php";
	include "../lib/bdd.php";
	$link = connexion();

	/**
	 * Affiche une liste de candidats avec leurs coordonnées, leurs photos, et
	 * un widget pour les noter de 0 à 5
	 * @param type $liste la liste de candidats
	 */
	function listerCandidats($liste) {
		foreach ($liste as $candidat) {
			echo renduTemplate("candidat.tpl.php", array('c' => $candidat));
		}
	}

	// liste sommairement les candidats en attente
	function listerCandidatsEnAttente($liste) {
		foreach ($liste as $c) {
			echo '<div class="candidat-en-attente">';
			echo $c['pp_prenom'] . " " . $c['pp_nom'] . " - " . $c['pp_email'] . "<br/>"
				. '<span class="details-cea">catégorie "' . $c['categorie'] . '"' . ", payé le " . $c['date_paiement'] . "</span>";
			echo "</div>";
		}
	}
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
    <section class="backoffice intro content candidatures">
        <div id="content">
			<h1>Gestion des<br/>candidatures<span id="title_line"></span></h1>
			Miniatures manquantes ? <a style="color: blue;" href="miniatures.php">générer les miniatures manquantes</a>
			<br/><br/><br/>

			<?php
			// Candidats
			$candidats = array(
				"exposants" => array(),
				"prix_photos" => array(),
				"jeunes_talents" => array()
			);
			$candidatsEnAttente = array();
			$req = "SELECT * FROM lqi_inscrits ORDER BY note desc;";
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				if ($ligne['inscription_complete'] == '1') {
					$candidats[$ligne['categorie']][] = $ligne;
				} else {
					$candidatsEnAttente[] = $ligne;
				}
			}
			$nbCandidats = array(
				"exposants" => count($candidats['exposants']),
				"prix_photos" => count($candidats['prix_photos']),
				"jeunes_talents" => count($candidats['jeunes_talents'])
			);
			$nbCandidatsTotal = array_sum($nbCandidats);
			$nbCandidatsEnAttente = count($candidatsEnAttente);
			?>

			<h3>Candidats pour "Les Exposants" (<?php echo $nbCandidats['exposants'] ?>)</h3>
			<div class="liste-candidats">
			<?php listerCandidats($candidats['exposants']) ?>
			</div>

			<h3>Candidats pour "Les Prix Photos" (<?php echo $nbCandidats['prix_photos'] ?>)</h3>
			<div class="liste-candidats">
			<?php listerCandidats($candidats['prix_photos']) ?>
			</div>

			<h3>Candidats pour "Les Jeunes Talents" (<?php echo $nbCandidats['jeunes_talents'] ?>)</h3>
			<div class="liste-candidats">
			<?php listerCandidats($candidats['jeunes_talents']) ?>
			</div>

			<h3>Candidats n'ayant pas complété leur dossier (<?php echo $nbCandidatsEnAttente ?>)</h3>
			<div class="liste-candidats-en-attente">
			<?php listerCandidatsEnAttente($candidatsEnAttente) ?>
			</div>
		</div>
	</section>
	<?php
		deconnexion($link);
	?>
</body>
</html>