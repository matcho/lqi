<?php include "entete.php" ?>
<body>
	<?php
		$page = "exposants";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2015';
		include "menu.php"
	?>
    <section class="exposants intro content">
    	<div id="content">
    		<h1><?php trad("Les exposants", "Exhibitors"); ?><span id="title_line"></span></h1>
            <ul id="nav_concour">
            	<li><a href="#" data-annee="2015"<?php echo ($annee == '2015' ? ' class="active"' : '') ?>>2015</a></li>
            	<li><a href="#" data-annee="2014"<?php echo ($annee == '2014' ? ' class="active"' : '') ?>>2014</a></li>
            	<li><a href="#" data-annee="2013"<?php echo ($annee == '2013' ? ' class="active"' : '') ?>>2013</a></li>
            </ul>
			<div id="presentation" data-annee="2015"<?php echo ($annee != '2015' ? ' style="display: none;"' : '') ?>>
                <p class="colspe">
                	Devenu une référence dans le paysage photographique, le salon international de photographie La Quatrième Image favorise la rencontre entre des photographes, venus du monde entier et sélectionnés par la Direction Artistique du salon, avec le public. Occasion d’échanges interculturels autour du média photographique, le festival reçoit
                </p>
				</p>
				<p>
                	plus de 18 000 visiteurs, amateurs avertis ou néophytes, galeristes, presse généraliste ou spécialisée… C’est aussi la possibilité pour les exposants de vendre leur travail. Environ 40  exposants sont sélectionnés chaque année parmi plusieurs centaines de candidature, et figurent dans le livre photo, catalogue du salon
                </p>
            </div>
			<div id="presentation" data-annee="2014"<?php echo ($annee != '2014' ? ' style="display: none;"' : '') ?>>
                <p class="colspe">
                	Devenu une référence dans le paysage photographique, le salon international de photographie La Quatrième Image favorise la rencontre entre des photographes, venus du monde entier et sélectionnés par la Direction Artistique du salon, avec le public. Occasion d’échanges interculturels autour du média photographique, le festival reçoit
                </p>
				</p>
				<p>
                	plus de 18 000 visiteurs, amateurs avertis ou néophytes, galeristes, presse généraliste ou spécialisée… C’est aussi la possibilité pour les exposants de vendre leur travail. Environ 40  exposants sont sélectionnés chaque année parmi plusieurs centaines de candidature, et figurent dans le livre photo, catalogue du salon
                </p>
            </div>
			<div id="presentation" data-annee="2013"<?php echo ($annee != '2013' ? ' style="display: none;"' : '') ?>>
                <p class="colspe">
                	Devenu une référence dans le paysage photographique, le salon international de photographie La Quatrième Image favorise la rencontre entre des photographes, venus du monde entier et sélectionnés par la Direction Artistique du salon, avec le public. Occasion d’échanges interculturels autour du média photographique, le festival reçoit
				</p>
				<p>
                	plus de 18 000 visiteurs, amateurs avertis ou néophytes, galeristes, presse généraliste ou spécialisée… C’est aussi la possibilité pour les exposants de vendre leur travail. Environ 40  exposants sont sélectionnés chaque année parmi plusieurs centaines de candidature, et figurent dans le livre photo, catalogue du salon
                </p>
            </div>
        </div>
    </section>
    <section class="exposants liste content" data-annee="2015"<?php echo ($annee != '2015' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
            <h1>Liste des exposants 2015<span id="title_line"></span></h1>
			<?php include "galeries/exposants_2015_liste.php"; ?>
			<br class="clear" />
        </div>
    </section>
    <section class="exposants liste content" data-annee="2014"<?php echo ($annee != '2014' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
            <h1>Liste des exposants 2014<span id="title_line"></span></h1>
			<?php include "galeries/exposants_2014_liste.php"; ?>
			<br class="clear" />
        </div>
    </section>
    <section class="exposants liste content" data-annee="2013"<?php echo ($annee != '2013' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
            <h1>Liste des exposants 2013<span id="title_line"></span></h1>
			<?php include "galeries/exposants_2013_liste.php"; ?>
			<br class="clear" />
        </div>
    </section>
    <section class="exposants diaporama content" data-annee="2015"<?php echo ($annee != '2015' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/exposants_2015_images.html"; ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=exposants_2015&retour=exposants.php?annee=2015">
						<img class="plein-ecran" src="../img/plein-ecran.png" />
					</a>
					<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
					<div class="fleches">
						<img class="fleche-gauche" src="../img/gauche_noir.png" />
						<img class="fleche-droite" src="../img/droite_noir.png" />
					</div>
				</div>
			</div>
			<?php include "galeries/exposants_2015_commentaires.php"; ?>
    	</div>
    </section>
    <section class="exposants diaporama content" data-annee="2014"<?php echo ($annee != '2014' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/exposants_2014_images.html"; ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=exposants_2014&retour=exposants.php?annee=2014">
						<img class="plein-ecran" src="../img/plein-ecran.png" />
					</a>
					<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
					<div class="fleches">
						<img class="fleche-gauche" src="../img/gauche_noir.png" />
						<img class="fleche-droite" src="../img/droite_noir.png" />
					</div>
				</div>
			</div>
			<?php include "galeries/exposants_2014_commentaires.php"; ?>
    	</div>
    </section>
    <section class="exposants diaporama content" data-annee="2013"<?php echo ($annee != '2013' ? ' style="display: none;"' : '') ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/exposants_2013_images.html"; ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=exposants_2013&retour=exposants.php?annee=2013">
						<img class="plein-ecran" src="../img/plein-ecran.png" />
					</a>
					<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
					<div class="fleches">
						<img class="fleche-gauche" src="../img/gauche_noir.png" />
						<img class="fleche-droite" src="../img/droite_noir.png" />
					</div>
				</div>
			</div>
			<?php include "galeries/exposants_2013_commentaires.php"; ?>
    	</div>
    </section>
    <section class="prix_photos aller-plus-loin content">
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
