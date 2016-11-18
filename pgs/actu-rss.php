<?php
header('Content-Type: application/rss+xml; charset=utf-8');
include "../lib/bdd.php";
include "../lib/trad.php";
$link = connexion();
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<rss version="2.0">
	<channel>
	<title>La Quatrième Image - <?php trad("Actualités", "News") ?></title>
	<link>https://laquatriemeimage.com/pgs/actu-rss.php?lang=<?php echo $langue ?></link>
	<description>
		<?php if($langue == 'fr'): ?>
			Toutes les actualités de La Quatrième Image
		<?php endif; ?>
		<?php if($langue == 'en'): ?>
			All the news from La Quatrième Image
		<?php endif; ?>
	</description>
	<image>
		<url>https://laquatriemeimage.com/img/logo/lqi_100.gif</url>
		<link>https://laquatriemeimage.com</link>
	</image>

	<?php
	$actualites = array();
	// depuis la BDD
	$req = "SELECT * FROM lqi_actualites ORDER BY date desc";
	$res = requete($req);
	while ($ligne = mysql_fetch_assoc($res)) {
		$actualites[] = $ligne;
	}

	// JEU DE TEST
	/*$clefs = array('id', 'date', 'titre_fr', 'titre_en', 'texte_fr', 'texte_en', 'lien', 'image');
	$actualites[] = array_combine($clefs, array(1, '2015-02-09', 'Second essai d\'actualité', 'News: second attempt', "Rebonjour,

Dans l'email de notification, les apostrophes étaient échappées par erreur; j'espère que cette fois c'est réglé.

Mathias", "Hello again,

In the notification email, quotes were erroneously escaped; I hope it's OK this time.

Mathias", '', 'test-actu.jpg'));
	$actualites[] = array_combine($clefs, array(2, '2015-02-09', 'Second essai d\'actualité', 'News: second attempt', "Rebonjour,

Dans l'email de notification, les apostrophes étaient échappées par erreur; j'espère que cette fois c'est réglé.

Mathias", "Hello again,

In the notification email, quotes were erroneously escaped; I hope it's OK this time.

Mathias", 'les_jeunes_talents.php', 'test-actu.jpg'));
	$actualites[] = array_combine($clefs, array(3, '2015-01-24', 'Premier essai d\'actualité', 'First attempt for a news', "Bonjour.

Ceci est un premier essai pour une actu en français et en anglais. J'espère de tout cœur que les accents, les apostrophes et autres caractères complexes vont fonctionner du premier coup !

Bien à vous,
Mathias", "Hello.

This is a first attempt for a new in french and english. I sincerely hope that accents, quotes and other complex characters will directly work !

Tenderly,
Mathias", 'http://www.tela-botanica.org', 'test-actu.jpg'));
	$actualites[] = array_combine($clefs, array(4, '2015-01-24', 'Premier essai d\'actualité', 'First attempt for a news', "Bonjour.

Ceci est un premier essai pour une actu en français et en anglais. J'espère de tout cœur que les accents, les apostrophes et autres caractères complexes vont fonctionner du premier coup !

Bien à vous,
Mathias", "Hello.

This is a first attempt for a new in french and english. I sincerely hope that accents, quotes and other complex characters will directly work !

Tenderly,
Mathias", '', 'test-actu.jpg'));*/
	?>
	<?php foreach ($actualites as $actu): ?>
		<item>
			<title><?php echo $actu['titre_' . $langue] ?></title>
			<link>https://laquatriemeimage.com/pgs/actualites?langue=<?php echo $langue ?>&amp;annee=<?php echo substr($actu['date'], 0, 4) ?>&amp;nolimit#actu-<?php echo $actu['id'] ?></link> 
			<description><?php echo $actu['texte_' . $langue] ?></description>
			<pubDate><?php echo $actu['date'] ?></pubDate>
		</item>
	<?php endforeach; ?>
	</channel>
</rss>
<?
deconnexion($link);
?>