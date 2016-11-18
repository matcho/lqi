<?php include "entete.php" ?>
<body>
	<?php
		$page = "espace_presse";
		include "menu.php"
	?>
    <section class="espace_presse-bandeau">
		<img src="../img/img_espace_presse.jpg" />
    </section>
    <section class="espace_presse_intro content">
    	<div id="content">
    		<h1><?php trad("Espace<br/>presse", "Press<br/>area"); ?><span id="title_line"></span></h1>
            <ul id="nav_concour">
				&nbsp; <!-- astuce à deux ronds -->
			</ul>
			<div id="presentation">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
					Bienvenue dans l'espace Presse de La Quatrième image, Salon
					international de photographie.
					La 3e édition se tiendra du 27 octobre au 1er novembre 2015.
					<br/><br/>
					VISUELS PRESSE
					<br/><br/>
					Une sélection d'œuvres et de visuels du salon est disponible
					pour la presse sur simple demande.
					<br/><br/>
					RÈGLES D'UTILISATION DES IMAGES
					<br/><br/>
					Indication obligatoire de la légende de chaque image,
					<br/>
					Interdiction de recadrer ou modifier les visuels,
					<br/>
					Autorisation d'utiliser les visuels mis à disposition uniquement
					dans le cadre exclusif d’article de presse sur la Quatrième Image,
					<br/>
					Nombre de visuels autorisés par publication limité à 10.
					<br/><br/>
					La Quatrième Image décline toute responsabilité en cas de
					non-respect de ces règles.
					<br/><br/>
					Pour télécharger les fichiers en HD (300 dpi), veuillez vous
					adresser à la responsable de la communication et relations presse :
					<br/><br/>
					Maud Schweblin
					<br/>
					06 27 74 27 75
					<a href="mailto:presse@laquatriemeimage.com">presse@laquatriemeimage.com</a>
                </p>
				<p>
					Téléchargez nos communiqués de presse 2015 (pdf)
					<br/><br/>
					<!--Téléchargez nos communiqués de presse 2015 (pdf)
					<br/><br/>-->
					Téléchargez l’invitation au vernissage 2015 (pdf)
				</p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
					Bienvenue dans l'espace Presse de La Quatrième image, Salon
					international de photographie.
					La 3e édition se tiendra du 27 octobre au 1er novembre 2015.
					<br/><br/>
					VISUELS PRESSE
					<br/><br/>
					Une sélection d'œuvres et de visuels du salon est disponible
					pour la presse sur simple demande.
					<br/><br/>
					RÈGLES D'UTILISATION DES IMAGES
					<br/><br/>
					Indication obligatoire de la légende de chaque image,
					<br/>
					Interdiction de recadrer ou modifier les visuels,
					<br/>
					Autorisation d'utiliser les visuels mis à disposition uniquement
					dans le cadre exclusif d’article de presse sur la Quatrième Image,
					<br/>
					Nombre de visuels autorisés par publication limité à 10.
					<br/><br/>
					La Quatrième Image décline toute responsabilité en cas de
					non-respect de ces règles.
					<br/><br/>
					Pour télécharger les fichiers en HD (300 dpi), veuillez vous
					adresser à la responsable de la communication et relations presse :
					<br/><br/>
					Maud Schweblin
					<br/>
					06 27 74 27 75
					<a href="mailto:presse@laquatriemeimage.com">presse@laquatriemeimage.com</a>
                </p>
				<p>
					Téléchargez nos communiqués de presse 2015 (pdf)
					<br/><br/>
					<!--Téléchargez nos communiqués de presse 2015 (pdf)
					<br/><br/>-->
					Téléchargez l’invitation au vernissage 2015 (pdf)
				</p>
				<?php endif; ?>
            </div>
    </section>
	<section class="espace_presse aller-plus-loin content">
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
					<a href="les_jeunes_talents.php?annee=2014">
						<img src="../img/allerplusloin/jeunes_talents.png" class="video-miniature" />
						<h4>Jeunes talents 2014</h4>
						<p>
							Création du prix Jeunes Talents qui met à l'honneur
							de jeunes photographes.
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
