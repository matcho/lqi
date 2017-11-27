<?php include "entete.php" ?>
<body>
	<?php
		$page = "prix_photo";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2017';
		$nom = '';
		if ($annee == '2017') {
			// @TODO_AURELIEN mettre le nom d'artiste par défaut de 2017 ici,
			// figurant dans "data-nom", ligne 6 du fichier 2017/le_prix_photo.php
			$nom = 'dondyuk';
		}
		if ($annee == '2015') {
			$nom = 'dondyuk';
		}
		if ($annee == '2014') {
			$nom = 'sarello';
		}
		if ($annee == '2013') {
			$nom = 'polina';
		}
		if (isset($_GET['nom'])) {
			$nom = $_GET['nom'];
		}
		include "menu.php";
	?>
    <section class="prix_photos intro content">
    	<div id="content">
    		<h1><?php trad("Le prix<br/>photo", "Photo<br/>prizes"); ?><span id="title_line"></span></h1>
            <ul id="nav_concour">
				<li><a href="le_prix_photo.php?annee=2017" data-annee="2017"<?php echo $annee == '2017' ? 'class="active"' : ''?>>2017</a></li>
				<li><a href="le_prix_photo.php?annee=2015" data-annee="2015"<?php echo $annee == '2015' ? 'class="active"' : ''?>>2015</a></li>
            	<li><a href="le_prix_photo.php?annee=2014" data-annee="2014"<?php echo $annee == '2014' ? 'class="active"' : ''?>>2014</a></li>
            	<li><a href="le_prix_photo.php?annee=2013" data-annee="2013"<?php echo $annee == '2013' ? 'class="active"' : ''?>>2013</a></li>
            </ul>
			<div id="presentation" data-annee="2017">
				<!-- @TODO_AURELIEN Remplir la description pour 2017 -->
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
            </div>
			<div id="presentation" data-annee="2015" style="display: none;">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
            </div>
			<div id="presentation" data-annee="2014" style="display: none;">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
            </div>
			<div id="presentation" data-annee="2013" style="display: none;">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Année 2013 Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Quatre Prix Photos du salon international La Quatrième Image sont décernés chaque année par un jury de personnalités du monde de la Photographie. Le travail des gagnants est présenté pendant le salon La Quatrième Image à Paris, la production de leur exposition étant prise en charge par l’organisation du salon.  <br/>
                    <br/> Le 1er prix: résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon.
                    <br/>2e prix: 3 000 euros et exposition au salon,  
                    <br/> 3e prix: 1 000 euros et exposition au salon,  
                    <br/> 4e prix: exposition au salon.
                </p>
				<p>
                	La remise officielle des prix a lieu au cours d'une cérémonie, en présence de conseiller à la Mairie de Paris et de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la Presse spécialisée ou grand public. <br/>
                    <br/>Les lauréats figurent dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix.
                </p>
				<?php endif; ?>
            </div>
        </div>
    </section>
	<?php
		include "2017/le_prix_photo.php";
		include "2015/le_prix_photo.php";
		include "2014/le_prix_photo.php";
		include "2013/le_prix_photo.php";
	?>
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
