<?php
	include "entete.php";
	include "../lib/bdd.php";
	$link = connexion();
?>
<body>
	<?php
		$page = "actualites";
		$limite = isset($_GET['nolimit']) ? false : 4;
		include "menu.php"
	?>
    <section class="actu intro content">
    	<div id="content">
    		<h1>Les actualités<span id="title_line"></span></h1>
           
			<?php
			$actualites = array();
			// depuis la BDD
			$req = "SELECT * FROM lqi_actualites ORDER BY date desc, id desc";
			if ($limite !== false) {
				$req .= " LIMIT $limite";
			}
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				$actualites[] = $ligne;
			}

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
				<a href="actualites.php?nolimit">
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
