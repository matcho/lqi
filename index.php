<?php
	// démarrage de session pour conserver le choix de la langue
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>La Quatrième Image</title>
	<link href="styles/index.css" rel="stylesheet" media="screen" />
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/accueil.js"></script>
</head>
<?php include "lib/trad.php"; ?>

<body>
	<div id="global">
        <header>
            <div id="logo">
				<img src="img/logo_home.png" alt="La Quatrième Image" />
			</div>
			<ul id="lang">
				<li><a href="index.php?langue=en"<?php echo $langue == 'en' ? ' class="active"' : '' ?>>EN</a></li>
				<li class="sep">/</li>
				<li><a href="index.php?langue=fr"<?php echo $langue == 'fr' ? ' class="active"' : '' ?>>FR</a></li>
			</ul>
            <nav>
                <ul>
                    <li><a href="pgs/le_salon.php"><?php trad("Le festival", "The Festival") ?></a></li>
                    <li><a href="pgs/participer.php"><?php trad("Participer", "Participate") ?></a></li>
                    <li><a class=rouge" href="pgs/exposants.php"><?php trad("Les exposants", "Exhibitors") ?></a></li>
                    <li><a class="bleu" href="pgs/le_prix_photo.php"><?php trad("Le Prix Photo", "Photo Prizes") ?></a></li>
                    <li><a class="jaune" href="pgs/les_jeunes_talents.php"><?php trad("Les Jeunes Talents", "Young talents") ?></a></li>
                    <li><a href="pgs/jury.php"><?php trad("Le jury", "Jury") ?></a></li>
                </ul>
            </nav>
        </header>

        <div id="content">
            <div id="centrage-vertical">
                <div id="slide">
                    <div id="texte_home_01" class="box_slide">
						<a href="pgs/le_salon.php">
							<h2><?php trad("Édition 2017", "2017 edition") ?></h2>
							<!--<?php trad("En savoir plus", "Read more") ?>-->
						</a>
                    </div>
                    <div id="texte_home_02" class="box_slide hidden">
						<a href="pgs/le_salon.php">
							<h2><?php trad("Le Festival", "The Festival") ?></h2>
							<?php if ($langue == 'fr'): ?>
							<h3>Un événement exceptionnel pour les passionnés de la photographie</h3>
							<?php endif; ?>
							<?php if ($langue == 'en'): ?>
							<h3>An exceptional event for photo passionates</h3>
							<?php endif; ?>
							<!--<?php trad("En savoir plus", "Read more") ?>-->
						</a>
                    </div>
                    <div id="texte_home_03" class="box_slide hidden">
						<a href="pgs/les_jeunes_talents.php">
							<h2><?php trad("Les Jeunes Talents", "Young talents") ?></h2>
							<?php if ($langue == 'fr'): ?>
							<h3>Les inscriptions sont ouvertes du 22 novembre 2016 au 30 janvier 2017</h3>
							<?php endif; ?>
							<?php if ($langue == 'en'): ?>
							<h3>Call for entries open from 22 november 2016 until 30 january 2017</h3>
							<?php endif; ?>
							<!--<?php trad("En savoir plus", "Read more") ?>-->
						</a>
                    </div>
                    <div id="texte_home_04" class="box_slide hidden">
						<a href="pgs/le_prix_photo.php">
							<h2><?php trad("Le Prix Photo", "Photo Prizes") ?></h2>
							<?php if ($langue == 'fr'): ?>
							<h3>Les inscriptions sont ouvertes du 22 novembre 2016 au 30 janvier 2017</h3>
							<?php endif; ?>
							<?php if ($langue == 'en'): ?>
							<h3>Call for entries open from 22 november 2016 until 30 january 2017</h3>
							<?php endif; ?>
							<!--<?php trad("En savoir plus", "Read more") ?></a>-->
						</a>
                    </div>
                    <div id="texte_home_05" class="box_slide hidden">
						<a href="pgs/participer.php">
							<h2><?php trad("Participer", "Participate") ?></h2>
							<?php if ($langue == 'fr'): ?>
							<h3>Prix Photo et Jeunes Talents</h3>
							<?php endif; ?>
							<?php if ($langue == 'en'): ?>
							<h3>PhotoPrice & Young Talents</h3>
							<?php endif; ?>
						</a>
                    </div>
                </div>
                <a href="#" class="btn left"></a>
            	<a href="#" class="btn right"></a>
            </div>
        </div>

		<div id="conteneur-controle">
		    <ul id="controle">
		        <li><a data-idx="1" href="#" class="active"></a></li>
		        <li><a data-idx="2" href="#"></a></li>
		        <li><a data-idx="3" href="#"></a></li>
		        <li><a data-idx="4" href="#"></a></li>
		        <li><a data-idx="5" href="#"></a></li>
		    </ul>
		</div>

		<!--<a href="pgs/le_salon.php">
			<div id="fleche-bas"><img src="img/bas.png"/></div>
		</a>-->
    </div>
</body>
</html>
