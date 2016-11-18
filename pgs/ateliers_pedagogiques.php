<?php include "entete.php" ?>
<body>
	<?php
		$page = "ateliers_pedagogiques";
		include "menu.php"
	?>
    <section class="ateliers_pedagogiques-bandeau">
		<img src="../img/img_ateliers_pedagogiques.jpg" />
    </section>
    <section class="intro_ateliers_pedagogiques content">
		<div id="content">
            <div class="coll vide">
				<h1><?php trad("Ateliers pédagogiques", "Educational workshops") ?><span id="title_line"></span></h1>
			</div>
            <ul id="nav_concour">
			</ul>
            <div id="presentation">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Ateliers pédagogiques gratuits pour les enfants :<br/>
					« Deviens le photographe de tes envies ! »<br/>
					<br/>
					Les ateliers proposent une initiation à la photographie qui se compose dans un premier temps
					d'une succession d'activités ludiques (mise en scène, jeux de rôles, jeux de réflexion, etc.),
					puis d'un jeux de pistes dans le salon pour parcourir l'exposition et enfin d'une rencontre
					avec un vrai photographe.<br/>
					<br/>
					Chaque enfant aura un livret pédagogique qui l'accompagnera tout au long de l'atelier et où il
					collera les photos réalisées lors des activités : c'est un premier album photo, qu'ils pourront
					poursuivre chez eux grâce via des jeux d'applications ludiques.
				</p>
				<p>
					<strong>Ateliers pour les 7 - 10 ans :</strong><br/>
					de 15h à 17h30 le jeudi 29 octobre<br/>
					de 10h à 12h30 le samedi 31 octobre<br/>
					<br/>
					<strong>Ateliers pour les 11 - 13 ans :</strong><br/>
					de 14h30 à 17h le samedi 31 octobre<br/>
					de 10h à 12h30 le dimanche 1er novembre<br/>
					<br/>
					<strong>Halle des Blancs Manteaux</strong><br/>
					<strong>Pierre-Charles Krieg</strong><br/>
					48, rue Vieille du Temple<br/>
					75004 Paris<br/>
					<br/>
					<strong>Pour s'inscrire</strong><br/>
					<a href="mailto:imageshumaines@gmail.com">imageshumaines@gmail.com</a><br/>
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Ateliers pédagogiques gratuits pour les enfants :<br/>
					« Deviens le photographe de tes envies ! »<br/>
					<br/>
					Les ateliers proposent une initiation à la photographie qui se compose dans un premier temps
					d'une succession d'activités ludiques (mise en scène, jeux de rôles, jeux de réflexion, etc.),
					puis d'un jeux de pistes dans le salon pour parcourir l'exposition et enfin d'une rencontre
					avec un vrai photographe.<br/>
					<br/>
					Chaque enfant aura un livret pédagogique qui l'accompagnera tout au long de l'atelier et où il
					collera les photos réalisées lors des activités : c'est un premier album photo, qu'ils pourront
					poursuivre chez eux grâce via des jeux d'applications ludiques.
				</p>
				<p>
					<strong>Ateliers pour les 7 - 10 ans :</strong><br/>
					de 15h à 17h30 le jeudi 29 octobre<br/>
					de 10h à 12h30 le samedi 31 octobre<br/>
					<br/>
					<strong>Ateliers pour les 11 - 13 ans :</strong><br/>
					de 14h30 à 17h le samedi 31 octobre<br/>
					de 10h à 12h30 le dimanche 1er novembre<br/>
					<br/>
					<strong>Halle des Blancs Manteaux</strong><br/>
					<strong>Pierre-Charles Krieg</strong><br/>
					48, rue Vieille du Temple<br/>
					75004 Paris<br/>
					<br/>
					<strong>Pour s'inscrire</strong><br/>
					<a href="mailto:imageshumaines@gmail.com">imageshumaines@gmail.com</a><br/>
                </p>
				<?php endif; ?>
            </div>
        </div>
    </section>
    </section>
    <section class="ateliers_pedagogiques affiche content">
		<div class="affiche-image">
			<a href="../img/affiche_ateliers_pedagogiques_2015_full.png">
				<img src="../img/affiche_ateliers_pedagogiques.jpg" />
			</a>
		</div>
	</section>
    <section class="ateliers_pedagogiques aller-plus-loin content">
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
