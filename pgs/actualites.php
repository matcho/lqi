<?php
	include "entete.php";
	include "../lib/bdd.php";
	$link = connexion();
?>
<body>
	<?php
		$page = "actualites";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2015';
		$limite = isset($_GET['nolimit']) ? false : 4;
		include "menu.php"
	?>
    <section class="actu intro content">
    	<div id="content">
    		<h1>Les actualités<span id="title_line"></span></h1>
           
			<?php
			$actualites = array();
			// depuis la BDD
			$req = "SELECT * FROM lqi_actualites WHERE YEAR(date) = '$annee' ORDER BY date desc, id desc";
			if ($limite !== false) {
				$req .= " LIMIT $limite";
			}
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				$actualites[] = $ligne;
			}
			// JEU DE TEST
			/*$clefs = array('id', 'date', 'titre_fr', 'titre_en', 'texte_fr', 'texte_en', 'lien', 'image', 'copyright');
			$actualites[] = array_combine($clefs, array(1, '2015-02-09', 'Second essai d\'actualité', 'News: second attempt', "Rebonjour,

Dans l'email de notification, les apostrophes étaient échappées par erreur; j'espère que cette fois c'est réglé.

Mathias", "Hello again,

In the notification email, quotes were erroneously escaped; I hope it's OK this time.

Mathias", '', 'test-actu.jpg', 'Jean TALUS'));
			$actualites[] = array_combine($clefs, array(2, '2015-02-09', 'Second essai d\'actualité', 'News: second attempt', "Rebonjour,

Dans l'email de notification, les apostrophes étaient échappées par erreur; j'espère que cette fois c'est réglé.

Mathias", "Hello again,

In the notification email, quotes were erroneously escaped; I hope it's OK this time.

Mathias", 'les_jeunes_talents.php', 'test-actu.jpg', 'Seth LITROSSAN'));
			$actualites[] = array_combine($clefs, array(3, '2015-01-24', 'Premier essai d\'actualité', 'First attempt for a news', "Bonjour.

Ceci est un premier essai pour une actu en français et en anglais. J'espère de tout cœur que les accents, les apostrophes et autres caractères complexes vont fonctionner du premier coup !

Bien à vous,
Mathias", "Hello.

This is a first attempt for a new in french and english. I sincerely hope that accents, quotes and other complex characters will directly work !

Tenderly,
Mathias", 'http://www.tela-botanica.org', 'test-actu.jpg', 'Guy TOUNE'));
			$actualites[] = array_combine($clefs, array(4, '2015-01-24', 'Premier essai d\'actualité', 'First attempt for a news', "Bonjour.

Ceci est un premier essai pour une actu en français et en anglais. J'espère de tout cœur que les accents, les apostrophes et autres caractères complexes vont fonctionner du premier coup !

Bien à vous,
Mathias", "Hello.

This is a first attempt for a new in french and english. I sincerely hope that accents, quotes and other complex characters will directly work !

Tenderly,
Mathias", '', 'test-actu.jpg', 'Otto RHINO'));*/
			// parcours des actus
			$nbActus = count($actualites);
			$cpt = 0;
			foreach ($actualites as $actu) {
				$gauche = ($cpt % 2 == 0);
				echo renduTemplate("actu.tpl.php", array('a' => $actu, 'gauche' => $gauche));
				$cpt++;
			}
			?>
			<?php if (($limite !== false) && ($nbActus > 0)): ?>
			<div class="plus-d-actus">
				<a href="actualites.php?annee=<?php echo $annee ?>&nolimit">
					<img src="../img/plus-info_blanc.png" />
				</a>
			</div>
			<?php endif; ?>
        </div>
    </section>
    <?php
		include "pied.php";
		deconnexion($link);
	?>
    
    
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59936821-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
