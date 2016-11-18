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
				"prix_photos_" => array(),
				"jeunes_talents" => array()
			);
			$candidatsEnAttente = array();
			// JEU DE TEST
			/*$clefs = array('id_commande', 'categorie', 'paiement_valide', 'pp_email', 'pp_nom', 'pp_prenom', 'montant_paye', 'pp_details', 'date_paiement', 'lien_envoye', 'inscription_complete', 'date_inscription', 'nom', 'prenom', 'dn', 'email', 'adresse', 'ville', 'cp', 'pays', 'biographie', 'presentation', 'photos', 'note');
			$candidats = array(
				"exposants" => array(
					array_combine($clefs, array('dbfd228d6ef591a64e5111f5a44c4bfbf4a30fec', 'exposants',   1, 'office-buyer@laquatriemeimage.com', 'Buyer', 'Test', '35.00', '--details--', '2015-01-19', 'http://laquatriemeimage.com/pgs/inscription.php?id_commande=19e55a1b020d0a95aa82a44c25d5eeeef845a873', 1, '2015-01-19', 'Chouet', 'Mathias', '1987-02-04', 'mathias.chouet@gmail.com', '45 Rue des impressionnistes de la paillade de sa mémé la cochonne', 'Montpellier', '34090', 'France', 'Né à Montpellier, j\ai étudié l\'informatique et la pêche à la mouche, afin d\'allier la joie bucolique aux nouvelles technologies la joie bucolique aux nouvelles technologiesla joie bucolique aux nouvelles technologies la joie bucolique aux nouvelles technologies la joie bucolique aux nouvelles technologies la joie bucolique aux nouvelles technologies.', 'Mon travail consiste en une série de clichés ringards et conventionnels de lieux tout à fait banals et hyper connus, tout au tour du monde.', '2015-01-19_Mathias_Chouet/DSC_0100.JPG,2015-01-19_Mathias_Chouet/DSC_0216.JPG,2015-01-19_Mathias_Chouet/DSC_0081.JPG,2015-01-19_Mathias_Chouet/DSC_0194.JPG,2015-01-19_Mathias_Chouet/DSC_0210.JPG', 1))
				),
				"prix_photos" => array(
					array_combine($clefs, array('19e55a1b020d0a95aa82a44c25d5eeeef845a873', 'prix_photos', 1, 'office-buyer@laquatriemeimage.com', 'Buyer', 'Test', '35.00', '--details--', '2015-01-19', 'http://laquatriemeimage.com/pgs/inscription.php?id_commande=19e55a1b020d0a95aa82a44c25d5eeeef845a873', 1, '2015-01-19', 'Bassemayousse', 'aurélien', '1985-10-02', 'bassemayousse@gmail.com', '15 rue du baigneur', 'PAris', '75018', 'France', 'bio', 'txt prez', '2015-01-19_aurélien_Bassemayousse/bawayah.jpg,2015-01-19_aurélien_Bassemayousse/Capture d’écran 2015-01-18 à 17.55.37.png,2015-01-19_aurélien_Bassemayousse/dribbble_01.gif,2015-01-19_aurélien_Bassemayousse/bghome_02.jpg,2015-01-19_aurélien_Bassemayousse/sfar.jpg', NULL)),
					array_combine($clefs, array('dbfd228d6ef591a64e5111f5a44c4bfbf4a30fec', 'exposants',   1, 'office-buyer@laquatriemeimage.com', 'Buyer', 'Test', '35.00', '--details--', '2015-01-19', 'http://laquatriemeimage.com/pgs/inscription.php?id_commande=19e55a1b020d0a95aa82a44c25d5eeeef845a873', 1, '2015-01-19', 'Chouet', 'Mathias', '1987-02-04', 'mathias.chouet@gmail.com', '45 Rue des impressionnistes', 'Montpellier', '34090', 'France', 'Né à Montpellier, j\ai étudié l\'informatique et la pêche à la mouche, afin d\'allier la joie bucolique aux nouvelles technologies.', 'Mon travail consiste en une série de clichés ringards et conventionnels de lieux tout à fait banals et hyper connus, tout au tour du monde.', '2015-01-19_Mathias_Chouet/DSC_0100.JPG,2015-01-19_Mathias_Chouet/DSC_0216.JPG,2015-01-19_Mathias_Chouet/DSC_0081.JPG,2015-01-19_Mathias_Chouet/DSC_0194.JPG,2015-01-19_Mathias_Chouet/DSC_0210.JPG', 3))
				),
				"jeunes_talents" => array()
			);
			$candidatsEnAttente = array(
				array_combine($clefs, array('dbfd228d6ef591a64e5111f5a44c4bfbf4a30fec', 'exposants',   0, 'pas-termine@test.com', 'Pasterminé', 'Jacques', '35.00', '--details--', '2015-01-19', 'http://laquatriemeimage.com/pgs/inscription.php?id_commande=19e55a1b020d0a95aa82a44c25d5eeeef845a873', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)),
				array_combine($clefs, array('dbfd228d6ef591a64e5111f5a44c4bfbf4a30fec', 'jeunes_talents',   0, 'alice.enretard@hotmail.com', 'En Retard', 'Alice', '35.00', '--details--', '2015-01-02', 'http://laquatriemeimage.com/pgs/inscription.php?id_commande=19e55a1b020d0a95aa82a44c25d5eeeef845a873', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL))
			);*/
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