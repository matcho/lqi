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