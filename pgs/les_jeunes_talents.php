<?php include "entete.php" ?>
<body>
	<?php
		$page = "jeunes_talents";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2017';
		$nom = '';
		if ($annee == '2017') {
			// @TODO_AURELIEN mettre le nom d'artiste par défaut de 2017 ici,
			// figurant dans "data-nom", ligne 6 du fichier 2017/les_jeunes_talents.php
			$nom = 'gruber';
		}
		if ($annee == '2015') {
			$nom = 'sahraoui';
		}
		if ($annee == '2014') {
			$nom = 'simion';
		}
		if (isset($_GET['nom'])) {
			$nom = $_GET['nom'];
		}
		include "menu.php"
	?>
    <section class="jeunes_talents intro content">
    	<div id="content">
    		<h1><?php trad("Les jeunes<br/>talents", "Young<br/>talents"); ?><span id="title_line"></span></h1>
            <ul id="nav_concour">
				<li><a href="les_jeunes_talents.php?annee=2017" data-annee="2017"<?php echo $annee == '2017' ? 'class="active"' : ''?>>2017</a></li>
				<li><a href="les_jeunes_talents.php?annee=2015" data-annee="2015"<?php echo $annee == '2015' ? 'class="active"' : ''?>>2015</a></li>
            	<li><a href="les_jeunes_talents.php?annee=2014" data-annee="2014"<?php echo $annee == '2014' ? 'class="active"' : ''?>>2014</a></li>
            </ul>
			<div id="presentation" data-annee="2017">
				<!-- @TODO_AURELIEN Remplir la description pour 2017 -->
                <p class="colspe">
                	Fidèle à sa démarche de promotion de la photographie émergente, le salon La quatrième Image et  son directeur artistique Raed Bawayah, ont créé, en 2014, une dotation «jeunes talents». Destiné aux   photographes âgés de moins de 26 ans, amateur, étudiant en école d’art ou de photographie ou   professionnel débutant leur carrière, ce concours offre aux 4 
				</p>
				<p>
                	gagnants un stand d’exposition; ils peuvent ainsi présenter leur travail pendant toute la durée du salon, aux côtés de photographes plus expérimentés, et vivre un événement professionnel important. Ces photographes ont partagé avec nous leur vision, leurs couleurs et leurs émotions, et un travail déjà très personnel.
                </p>
            </div>
			<div id="presentation" data-annee="2015" style="display: none;">
                <p class="colspe">
                	Fidèle à sa démarche de promotion de la photographie émergente, le salon La quatrième Image et  son directeur artistique Raed Bawayah, ont créé, en 2014, une dotation «jeunes talents». Destiné aux   photographes âgés de moins de 26 ans, amateur, étudiant en école d’art ou de photographie ou   professionnel débutant leur carrière, ce concours offre aux 4 
				</p>
				<p>
                	gagnants un stand d’exposition; ils peuvent ainsi présenter leur travail pendant toute la durée du salon, aux côtés de photographes plus expérimentés, et vivre un événement professionnel important. Ces photographes ont partagé avec nous leur vision, leurs couleurs et leurs émotions, et un travail déjà très personnel.
                </p>
            </div>
			<div id="presentation" data-annee="2014" style="display: none;">
                <p class="colspe">
                	Fidèle à sa démarche de promotion de la photographie émergente, le salon La quatrième Image et  son directeur artistique Raed Bawayah, ont créé, en 2014, une dotation «jeunes talents». Destiné aux   photographes âgés de moins de 26 ans, amateur, étudiant en école d’art ou de photographie ou   professionnel débutant leur carrière, ce concours offre aux 4 
				</p>
				<p>
                	gagnants un stand d’exposition; ils peuvent ainsi présenter leur travail pendant toute la durée du salon, aux côtés de photographes plus expérimentés, et vivre un événement professionnel important. Ces photographes ont partagé avec nous leur vision, leurs couleurs et leurs émotions, et un travail déjà très personnel.
                </p>
            </div>
        </div>
    </section>
	<?php
		include "2017/les_jeunes_talents.php";
		include "2015/les_jeunes_talents.php";
		include "2014/les_jeunes_talents.php";
	?>
    <section class="jeunes_talents aller-plus-loin content">
    	<div id="content">
    		<h3>Pour aller plus loin</h3>
    		<span id="title_line_h3"></span>
			<div id="container-liens">
				<div class="lien-bloc">
					<a href="actualites.php?annee=2015&nolimit#actu-21">
						<img src="../img/allerplusloin/bresil_invite_honneur.jpg" class="video-miniature" />
						<h4>Brésil, invité d'honneur</h4>
						<p>
							En 2014, le Brésil était invité d'honneur.
							Retrouvez tous les artistes qui ont participé.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="actualites.php?annee=2015&nolimit#actu-27">
						<img src="../img/allerplusloin/camille_lepage.png" class="video-miniature" />
						<h4>Camille Lepage</h4>
						<p>
							En 2014, La Quatrième Image rendait hommage à la photojournaliste.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="lecture_portfolios.php">
						<img src="../img/allerplusloin/portfolio.png" class="video-miniature" />
						<h4>Lectures de Portfolio</h4>
						<p>
							Présenter vos projets photographiques, ces rencontres sont gratuites.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="le_prix_photo.php?annee=2014">
						<img src="../img/allerplusloin/prix_photo.png" class="video-miniature" />
						<h4>Les Prix Photo 2014</h4>
						<p>
							En 2014, les Prix Photo ont été attribués à Mateusz
							Sarello, Andrejs Strokins, Eleonora...
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<br class="clear" />
			</div>
    	</div>
    </section>
    <?php include "pied.php" ?>
    
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
