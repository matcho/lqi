<?php include "entete.php" ?>
<body>
	<?php
		$page = "prix_photo";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2015';
		$nom = '';
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
				<li><a href="le_prix_photo.php?annee=2015" data-annee="2015"<?php echo $annee == '2015' ? 'class="active"' : ''?>>2015</a></li>
            	<li><a href="le_prix_photo.php?annee=2014" data-annee="2014"<?php echo $annee == '2014' ? 'class="active"' : ''?>>2014</a></li>
            	<li><a href="le_prix_photo.php?annee=2013" data-annee="2013"<?php echo $annee == '2013' ? 'class="active"' : ''?>>2013</a></li>
            </ul>
			<div id="presentation" data-annee="2015">
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
	<div class="prix_photos annee" data-annee="2015" <?php echo $annee != '2015' ? 'style="display: none;"' : ''?>>
		<section class="prix_photos bandeau content">
			<div id="content">
				<div class="entete-photographe" data-nom="dondyuk" <?php echo $nom != 'dondyuk' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Maxim Dondyuk/00.jpg" />
					<span class="titre-categorie">1er Prix</span>
					<h1>Maxim DONDYUK</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="dondyuk" href="#" class="active"></a></li>
						<li><a data-nom="geldhof" href="#"></a></li>
						<li><a data-nom="goldgruber" href="#"></a></li>
						<li><a data-nom="hyland" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="geldhof" <?php echo $nom != 'geldhof' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Mathilde Geldhof/00.jpg" />
					<span class="titre-categorie">2e Prix</span>
					<h1>Mathilde GELDHOF</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="dondyuk" href="#"></a></li>
						<li><a data-nom="geldhof" href="#" class="active"></a></li>
						<li><a data-nom="goldgruber" href="#"></a></li>
						<li><a data-nom="hyland" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="goldgruber" <?php echo $nom != 'goldgruber' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Michael Goldgruber/00.jpg" />
					<span class="titre-categorie">3e prix</span>
					<h1>Michael GOLDGRUBER</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="dondyuk" href="#"></a></li>
						<li><a data-nom="geldhof" href="#"></a></li>
						<li><a data-nom="goldgruber" href="#" class="active"></a></li>
						<li><a data-nom="hyland" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="hyland" <?php echo $nom != 'hyland' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Gillian Hyland//00.jpg" />
					<span class="titre-categorie">4e prix</span>
					<h1>Gillian HYLAND</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="dondyuk" href="#"></a></li>
						<li><a data-nom="geldhof" href="#"></a></li>
						<li><a data-nom="goldgruber" href="#"></a></li>
						<li><a data-nom="hyland" href="#" class="active"></a></li>
					</ul>
					<br class="clear" />
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="dondyuk" <?php echo $nom != 'dondyuk' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/maxim_dondyuk_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=maxim_dondyuk&retour=le_prix_photo.php?annee=2015|nom=dondyuk">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Maxim DONDYUK</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Maxim DONDYUK</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Maxim DONDYUK</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Maxim DONDYUK</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Maxim DONDYUK</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="geldhof" <?php echo $nom != 'geldhof' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/mathilde_geldhof_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=mathilde_geldhof&retour=le_prix_photo.php?annee=2015|nom=geldhof">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Mathilde GELDHOF</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Mathilde GELDHOF</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Mathilde GELDHOF</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Mathilde GELDHOF</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Mathilde GELDHOF</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="goldgruber" <?php echo $nom != 'goldgruber' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/michael_goldgruber_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=michael_goldgruber&retour=le_prix_photo.php?annee=2015|nom=goldgruber">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Michael GOLDGRUBER</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Michael GOLDGRUBER</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Michael GOLDGRUBER</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Michael GOLDGRUBER</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Michael GOLDGRUBER</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="hyland" <?php echo $nom != 'hyland' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/gillian_hyland_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=gillian_hyland&retour=le_prix_photo.php?annee=2015|nom=hyland">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Gillian HYLAND</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Gillian HYLAND</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Gillian HYLAND</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Gillian HYLAND</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Gillian HYLAND</h1>
					<h4></h4>
					<p>
						
					</p>
				</div>
			</div>
		</section>
	</div>
	<div class="prix_photos annee" data-annee="2014" <?php echo $annee != '2014' ? 'style="display: none;"' : ''?>>
		<section class="prix_photos bandeau content">
			<div id="content">
				<div class="entete-photographe" data-nom="sarello" <?php echo $nom != 'sarello' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Mateusz Sarello/00.jpg" />
					<span class="titre-categorie">1er Prix</span>
					<h1>Mateusz SARELLO</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sarello" href="#" class="active"></a></li>
						<li><a data-nom="strokins" href="#"></a></li>
						<li><a data-nom="strano" href="#"></a></li>
						<li><a data-nom="arcenillas" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="strokins" <?php echo $nom != 'strokins' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Andrejs Strokins/00.jpg" />
					<span class="titre-categorie">2e Prix</span>
					<h1>Andrejs STROKINS</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sarello" href="#"></a></li>
						<li><a data-nom="strokins" href="#" class="active"></a></li>
						<li><a data-nom="strano" href="#"></a></li>
						<li><a data-nom="arcenillas" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="strano" <?php echo $nom != 'strano' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Eleonora Strano/00.jpg" />
					<span class="titre-categorie">3e prix</span>
					<h1>Eleonora STRANO</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sarello" href="#"></a></li>
						<li><a data-nom="strokins" href="#"></a></li>
						<li><a data-nom="strano" href="#" class="active"></a></li>
						<li><a data-nom="arcenillas" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="arcenillas" <?php echo $nom != 'arcenillas' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Javier Arcenillas/00.jpg" />
					<span class="titre-categorie">4e prix</span>
					<h1>Javier ARCENILLAS</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sarello" href="#"></a></li>
						<li><a data-nom="strokins" href="#"></a></li>
						<li><a data-nom="strano" href="#"></a></li>
						<li><a data-nom="arcenillas" href="#" class="active"></a></li>
					</ul>
					<br class="clear" />
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="sarello" <?php echo $nom != 'sarello' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/mateusz_sarello_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=mateusz_sarello&retour=le_prix_photo.php?annee=2014|nom=sarello">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Mateusz SARELLO</h1>
					<h4>Swell 2014</h4>
					<p>
					« Une route. 
					L'hiver. 
					Le vide. 
					Vide de tout ce qui est important. J'essaie de penser à la «route". Je ne peux pas, je suis totalement épuisé. Ce n'est que le temps qui me permet d'avancer. L'idée du vent, de la neige et l'idée de mes flashs sur la plage, m'ont empêché de                     dormir. Et j'ai aussi peur des quelques jours où je ne penserai qu'à Elle. C'est comme cela que j'atteindrai la Baltique. Ma Baltique. Au lieu de… ».
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Mateusz SARELLO</h1>
					<h4>Swell 2014</h4>
					<p>
					«Swell» est l'histoire d'une rupture et d'une solitude inacceptée, de souvenirs que l'on ne peut oublier. <br /> Cela devait d'abord être un projet documentaire sur la Mer Baltique. Un plan avait été établi et les places qui devaient être visitées                                  avaient été marquées sur la carte. La compagne de Mateusz Sarello l'accompagnait durant ses voyages à la mer Baltique jusqu'au moment où ils se séparèrent. La rupture le changea et il ne fut plus capable de mener son projet tel qu'il avait été                  conçu. Il commença à retourner aux endroits où ils avaient été ensemble. C'est à ce moment que le projet s'arrête et qu'une histoire personnelle débute.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Mateusz SARELLO</h1>
					<h4>Swell 2014</h4>
					<p>
						«Swell» est l'histoire d'une rupture et d'une solitude inacceptée, de souvenirs que l'on ne peut oublier. <br /> Cela devait d'abord être un projet documentaire sur la Mer Baltique. Un plan avait été établi et les places qui devaient être visitées                                  avaient été marquées sur la carte. La compagne de Mateusz Sarello l'accompagnait durant ses voyages à la mer Baltique jusqu'au moment où ils se séparèrent. La rupture le changea et il ne fut plus capable de mener son projet tel qu'il avait été                  conçu. Il commença à retourner aux endroits où ils avaient été ensemble. C'est à ce moment que le projet s'arrête et qu'une histoire personnelle débute.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Mateusz SARELLO</h1>
					<h4>Swell 2014</h4>
					<p>
						«Swell» est l'histoire d'une rupture et d'une solitude inacceptée, de souvenirs que l'on ne peut oublier. <br /> Cela devait d'abord être un projet documentaire sur la Mer Baltique. Un plan avait été établi et les places qui devaient être visitées avaient été marquées sur la carte. La compagne de Mateusz Sarello l'accompagnait durant ses voyages à la mer Baltique jusqu'au moment où ils se séparèrent. La rupture le changea et il ne fut plus capable de mener son projet tel qu'il avait été conçu. Il commença à retourner aux endroits où ils avaient été ensemble. C'est à ce moment que le projet s'arrête et qu'une histoire personnelle débute.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Mateusz SARELLO</h1>
					<h4>Swell 2014</h4>
					<p>
						«Swell» est l'histoire d'une rupture et d'une solitude inacceptée, de souvenirs que l'on ne peut oublier. <br /> Cela devait d'abord être un projet documentaire sur la Mer Baltique. Un plan avait été établi et les places qui devaient être visitées                                  avaient été marquées sur la carte. La compagne de Mateusz Sarello l'accompagnait durant ses voyages à la mer Baltique jusqu'au moment où ils se séparèrent. La rupture le changea et il ne fut plus capable de mener son projet tel qu'il avait été                  conçu. Il commença à retourner aux endroits où ils avaient été ensemble. C'est à ce moment que le projet s'arrête et qu'une histoire personnelle débute.
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="strokins" <?php echo $nom != 'strokins' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/andrejs_strokins_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=andrejs_strokins&retour=le_prix_photo.php?annee=2014|nom=strokins">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Andrejs STROKINS</h1>
					<h4>People in the dunes, 2014</h4>
					<p>
					Le projet «Les gens dans les dunes » explore les frontières entre la nature urbaine et sauvage autour des districts de Bolderâja et Daugavgriva, situés dans la périphérie de Riga, à quelques kilomètres du golfe de Riga. Après la Seconde                           Guerre mondiale, les villages de pêcheurs construits sur les dunes ont été remplacés par des blockhaus et certaines parties de Daugavgriva sont devenues des zones militaires fermées. Depuis, 23 années se sont écoulées, mais la population                        majoritairement russophone de la zone est toujours hantée par les ombres du passé soviétique.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Andrejs STROKINS</h1>
					<h4>Photo 2</h4>
					<p>
						Le projet «Les gens dans les dunes » explore les frontières entre la nature urbaine et sauvage autour des districts de Bolderâja et Daugavgriva, situés dans la périphérie de Riga, à quelques kilomètres du golfe de Riga. Après la Seconde                                               Guerre mondiale, les villages de pêcheurs construits sur les dunes ont été remplacés par des blockhaus et certaines parties de Daugavgriva sont devenues des zones militaires fermées. Depuis, 23 années se sont écoulées, mais la population                                            majoritairement russophone de la zone est toujours hantée par les ombres du passé soviétique.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Andrejs STROKINS</h1>
					<h4>Photo 3</h4>
					<p>
					Le projet «Les gens dans les dunes » explore les frontières entre la nature urbaine et sauvage autour des districts de Bolderâja et Daugavgriva, situés dans la périphérie de Riga, à quelques kilomètres du golfe de Riga. Après la Seconde                                                               Guerre mondiale, les villages de pêcheurs construits sur les dunes ont été remplacés par des blockhaus et certaines parties de Daugavgriva sont devenues des zones militaires fermées. Depuis, 23 années se sont écoulées, mais la population                                            majoritairement russophone de la zone est toujours hantée par les ombres du passé soviétique.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Andrejs STROKINS</h1>
					<h4>Photo 4</h4>
					<p>
						Le projet «Les gens dans les dunes » explore les frontières entre la nature urbaine et sauvage autour des districts de Bolderâja et Daugavgriva, situés dans la périphérie de Riga, à quelques kilomètres du golfe de Riga. Après la Seconde                                               Guerre mondiale, les villages de pêcheurs construits sur les dunes ont été remplacés par des blockhaus et certaines parties de Daugavgriva sont devenues des zones militaires fermées. Depuis, 23 années se sont écoulées, mais la population                                            majoritairement russophone de la zone est toujours hantée par les ombres du passé soviétique.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Andrejs STROKINS</h1>
					<h4>Photo 5</h4>
					<p>
						Le projet «Les gens dans les dunes » explore les frontières entre la nature urbaine et sauvage autour des districts de Bolderâja et Daugavgriva, situés dans la périphérie de Riga, à quelques kilomètres du golfe de Riga. Après la Seconde                                               Guerre mondiale, les villages de pêcheurs construits sur les dunes ont été remplacés par des blockhaus et certaines parties de Daugavgriva sont devenues des zones militaires fermées. Depuis, 23 années se sont écoulées, mais la population                                            majoritairement russophone de la zone est toujours hantée par les ombres du passé soviétique.
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="strano" <?php echo $nom != 'strano' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/eleonora_strano_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=eleonora_strano&retour=le_prix_photo.php?annee=2014|nom=strano">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Eleonora STRANO</h1>
					<h4>Une histoire turkmène - Turkménistan, 2011-2013</h4>
					<p>
					Dans ce pays isolé, coupé du monde, les gens se passionnent pour les films Bollywood et font face à la dictature.  <br />
	Dans ce monde, où les gens rêvent encore d'une vie normale, entre traces du communisme et perte d'identité des jeunes générations qui doivent choisir entre deux nationalités qui ne leur conviennent ni l'une ni l'autre, les entreprises étrangères n'y voient qu'une occasion d'accroitre leurs profits. 
	Dans ce pays qui jouit du statut de quatrième exportateur mondial de gaz et compte seulement 6 millions d'habitants pour une superficie équivalente à celle de la France, se jouent des enjeux majeurs pour le futur.  
	Un pays à croissance forte, un pays jeune, un pays où les amoureux doivent se cacher dans les parcs pour exprimer leurs sentiments et les étudiants défilent par tous temps et à toute heure selon les désirs du président. 
	Un pays où le mot "existence" rime souvent avec "résistance". 
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Eleonora STRANO</h1>
					<h4>Une histoire turkmène - Turkménistan, 2011-2013</h4>
					<p>
						Dans ce pays isolé, coupé du monde, les gens se passionnent pour les films Bollywood et font face à la dictature.  <br />
	Dans ce monde, où les gens rêvent encore d'une vie normale, entre traces du communisme et perte d'identité des jeunes générations qui doivent choisir entre deux nationalités qui ne leur conviennent ni l'une ni l'autre, les entreprises étrangères n'y voient qu'une occasion d'accroitre leurs profits. 
	Dans ce pays qui jouit du statut de quatrième exportateur mondial de gaz et compte seulement 6 millions d'habitants pour une superficie équivalente à celle de la France, se jouent des enjeux majeurs pour le futur.  
	Un pays à croissance forte, un pays jeune, un pays où les amoureux doivent se cacher dans les parcs pour exprimer leurs sentiments et les étudiants défilent par tous temps et à toute heure selon les désirs du président. 
	Un pays où le mot "existence" rime souvent avec "résistance".
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Eleonora STRANO</h1>
					<h4>Une histoire turkmène - Turkménistan, 2011-2013</h4>
					<p>
						Dans ce pays isolé, coupé du monde, les gens se passionnent pour les films Bollywood et font face à la dictature.  <br />
	Dans ce monde, où les gens rêvent encore d'une vie normale, entre traces du communisme et perte d'identité des jeunes générations qui doivent choisir entre deux nationalités qui ne leur conviennent ni l'une ni l'autre, les entreprises étrangères n'y voient qu'une occasion d'accroitre leurs profits. 
	Dans ce pays qui jouit du statut de quatrième exportateur mondial de gaz et compte seulement 6 millions d'habitants pour une superficie équivalente à celle de la France, se jouent des enjeux majeurs pour le futur.  
	Un pays à croissance forte, un pays jeune, un pays où les amoureux doivent se cacher dans les parcs pour exprimer leurs sentiments et les étudiants défilent par tous temps et à toute heure selon les désirs du président. 
	Un pays où le mot "existence" rime souvent avec "résistance".
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Eleonora STRANO</h1>
					<h4>Une histoire turkmène - Turkménistan, 2011-2013</h4>
					<p>
						Dans ce pays isolé, coupé du monde, les gens se passionnent pour les films Bollywood et font face à la dictature.  <br />
	Dans ce monde, où les gens rêvent encore d'une vie normale, entre traces du communisme et perte d'identité des jeunes générations qui doivent choisir entre deux nationalités qui ne leur conviennent ni l'une ni l'autre, les entreprises étrangères n'y voient qu'une occasion d'accroitre leurs profits. 
	Dans ce pays qui jouit du statut de quatrième exportateur mondial de gaz et compte seulement 6 millions d'habitants pour une superficie équivalente à celle de la France, se jouent des enjeux majeurs pour le futur.  
	Un pays à croissance forte, un pays jeune, un pays où les amoureux doivent se cacher dans les parcs pour exprimer leurs sentiments et les étudiants défilent par tous temps et à toute heure selon les désirs du président. 
	Un pays où le mot "existence" rime souvent avec "résistance".
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Eleonora STRANO</h1>
					<h4>Une histoire turkmène - Turkménistan, 2011-2013</h4>
					<p>
						Dans ce pays isolé, coupé du monde, les gens se passionnent pour les films Bollywood et font face à la dictature.  <br />
	Dans ce monde, où les gens rêvent encore d'une vie normale, entre traces du communisme et perte d'identité des jeunes générations qui doivent choisir entre deux nationalités qui ne leur conviennent ni l'une ni l'autre, les entreprises étrangères n'y voient qu'une occasion d'accroitre leurs profits. 
	Dans ce pays qui jouit du statut de quatrième exportateur mondial de gaz et compte seulement 6 millions d'habitants pour une superficie équivalente à celle de la France, se jouent des enjeux majeurs pour le futur.  
	Un pays à croissance forte, un pays jeune, un pays où les amoureux doivent se cacher dans les parcs pour exprimer leurs sentiments et les étudiants défilent par tous temps et à toute heure selon les désirs du président. 
	Un pays où le mot "existence" rime souvent avec "résistance".
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="arcenillas" <?php echo $nom != 'arcenillas' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/javier_arcenillas_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=javier_arcenillas&retour=le_prix_photo.php?annee=2014|nom=arcenillas">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Javier ARCENILLAS</h1>
					<h4>Red Note, 2014</h4>
					<p>
						Red Note est un essai sociologique sur la violence en Amérique latine, qui est, sur fond de drame et de misère, la région la plus violente du monde.
	Entre douleur et enfer, le théâtre de la guerre y est permanent et alimente au quotidien la une de l'actualité avec les victimes des meurtriers.
	Dans les rues de villes comme San Pedro Sula, les meurtres, les vols et la violence augmentent chaque jour. Enfants et adolescents sont entraînés pour y exercer un emploi courant : celui de tueur à gages. Les jeunes sont attirés par la perspective de l'argent facile qui génère respect et crainte envers celui qui en est doté. Dans ce contexte de violence, ces sociétés font preuve d'un laxisme alarmant dans leur lutte pour la défense et la protection des enfants.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Javier ARCENILLAS</h1>
					<h4>Red Note, 2014</h4>
					<p>
						Red Note est un essai sociologique sur la violence en Amérique latine, qui est, sur fond de drame et de misère, la région la plus violente du monde.
	Entre douleur et enfer, le théâtre de la guerre y est permanent et alimente au quotidien la une de l'actualité avec les victimes des meurtriers.
	Dans les rues de villes comme San Pedro Sula, les meurtres, les vols et la violence augmentent chaque jour. Enfants et adolescents sont entraînés pour y exercer un emploi courant : celui de tueur à gages. Les jeunes sont attirés par la perspective de l'argent facile qui génère respect et crainte envers celui qui en est doté. Dans ce contexte de violence, ces sociétés font preuve d'un laxisme alarmant dans leur lutte pour la défense et la protection des enfants.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Javier ARCENILLAS</h1>
					<h4>Red Note, 2014</h4>
					<p>
						Red Note est un essai sociologique sur la violence en Amérique latine, qui est, sur fond de drame et de misère, la région la plus violente du monde.
	Entre douleur et enfer, le théâtre de la guerre y est permanent et alimente au quotidien la une de l'actualité avec les victimes des meurtriers.
	Dans les rues de villes comme San Pedro Sula, les meurtres, les vols et la violence augmentent chaque jour. Enfants et adolescents sont entraînés pour y exercer un emploi courant : celui de tueur à gages. Les jeunes sont attirés par la perspective de l'argent facile qui génère respect et crainte envers celui qui en est doté. Dans ce contexte de violence, ces sociétés font preuve d'un laxisme alarmant dans leur lutte pour la défense et la protection des enfants.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Javier ARCENILLAS</h1>
					<h4>Red Note, 2014</h4>
					<p>
						Red Note est un essai sociologique sur la violence en Amérique latine, qui est, sur fond de drame et de misère, la région la plus violente du monde.
	Entre douleur et enfer, le théâtre de la guerre y est permanent et alimente au quotidien la une de l'actualité avec les victimes des meurtriers.
	Dans les rues de villes comme San Pedro Sula, les meurtres, les vols et la violence augmentent chaque jour. Enfants et adolescents sont entraînés pour y exercer un emploi courant : celui de tueur à gages. Les jeunes sont attirés par la perspective de l'argent facile qui génère respect et crainte envers celui qui en est doté. Dans ce contexte de violence, ces sociétés font preuve d'un laxisme alarmant dans leur lutte pour la défense et la protection des enfants.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Javier ARCENILLAS</h1>
					<h4>Red Note, 2014</h4>
					<p>
						Red Note est un essai sociologique sur la violence en Amérique latine, qui est, sur fond de drame et de misère, la région la plus violente du monde.
	Entre douleur et enfer, le théâtre de la guerre y est permanent et alimente au quotidien la une de l'actualité avec les victimes des meurtriers.
	Dans les rues de villes comme San Pedro Sula, les meurtres, les vols et la violence augmentent chaque jour. Enfants et adolescents sont entraînés pour y exercer un emploi courant : celui de tueur à gages. Les jeunes sont attirés par la perspective de l'argent facile qui génère respect et crainte envers celui qui en est doté. Dans ce contexte de violence, ces sociétés font preuve d'un laxisme alarmant dans leur lutte pour la défense et la protection des enfants.
					</p>
				</div>
			</div>
		</section>
	</div>
	<div class="prix_photos annee" data-annee="2013" <?php echo $annee != '2013' ? 'style="display: none;"' : ''?>>
		<section class="prix_photos bandeau content">
			<div id="content">
				<div class="entete-photographe" data-nom="polina" <?php echo $nom != 'polina' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Alexandra Polina/00.jpg" />
					<span class="titre-categorie">1er Prix</span>
					<h1>Alexandra POLINA</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="polina" href="#" class="active"></a></li>
						<li><a data-nom="pleshkova" href="#"></a></li>
						<li><a data-nom="podavini" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="pleshkova" <?php echo $nom != 'pleshkova' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Maria Pleshkova/00.jpg" />
					<span class="titre-categorie">2e Prix</span>
					<h1>Maria PLESHKOVA</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="polina" href="#"></a></li>
						<li><a data-nom="pleshkova" href="#" class="active"></a></li>
						<li><a data-nom="podavini" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="podavini" <?php echo $nom != 'podavini' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/prix photos/Fausto Podavini/00.jpg" />
					<span class="titre-categorie">3e prix</span>
					<h1>Fausto PODAVINI</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="polina" href="#"></a></li>
						<li><a data-nom="pleshkova" href="#"></a></li>
						<li><a data-nom="podavini" href="#" class="active"></a></li>
					</ul>
					<br class="clear" />
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="polina" <?php echo $nom != 'polina' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/alexandra_polina_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=alexandra_polina&retour=le_prix_photo.php?annee=2013|nom=polina">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Alexandra POLINA</h1>
					<h4>Made in USSR</h4>
					<p>
					Dans les années 80, est née la dernière génération de citoyens soviétiques, génération dite des Jeunes Pionniers. Ils regardaient les mêmes dessins animés et ont été éduqués selon les mêmes principes, partageant une langue commune. Durant leur enfance, ils ont assisté à l'effondrement du communisme et ont été témoins de la période mouvementée de la Perestroïka. Après la chute de l'Union soviétique, nombre d'entre eux ont émigré vers divers pays à travers le monde, endroits où ils vivent aujourd'hui au milieu d'un monde capitaliste.Alexandra tire des portraits de cette génération, sa génération. L'iconographie de la période est reconstruite avec des éléments contemporains, cassant l'esthétique des affiches historiques de propagande qui symbolise le pays où ils vivaient. Quelle part d'identité ontils emmené avec eux d'un pays dont les icônes se sont toujours opposées à la quête personnelle pour l'individualité de chacun d'eux ?
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Alexandra POLINA</h1>
					<h4>Made in USSR</h4>
					<p>
					Dans les années 80, est née la dernière génération de citoyens soviétiques, génération dite des Jeunes Pionniers. Ils regardaient les mêmes dessins animés et ont été éduqués selon les mêmes principes, partageant une langue commune. Durant leur enfance, ils ont assisté à l'effondrement du communisme et ont été témoins de la période mouvementée de la Perestroïka. Après la chute de l'Union soviétique, nombre d'entre eux ont émigré vers divers pays à travers le monde, endroits où ils vivent aujourd'hui au milieu d'un monde capitaliste.Alexandra tire des portraits de cette génération, sa génération. L'iconographie de la période est reconstruite avec des éléments contemporains, cassant l'esthétique des affiches historiques de propagande qui symbolise le pays où ils vivaient. Quelle part d'identité ontils emmené avec eux d'un pays dont les icônes se sont toujours opposées à la quête personnelle pour l'individualité de chacun d'eux ?
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Alexandra POLINA</h1>
					<h4>Made in USSR</h4>
					<p>
						Dans les années 80, est née la dernière génération de citoyens soviétiques, génération dite des Jeunes Pionniers. Ils regardaient les mêmes dessins animés et ont été éduqués selon les mêmes principes, partageant une langue commune. Durant leur enfance, ils ont assisté à l'effondrement du communisme et ont été témoins de la période mouvementée de la Perestroïka. Après la chute de l'Union soviétique, nombre d'entre eux ont émigré vers divers pays à travers le monde, endroits où ils vivent aujourd'hui au milieu d'un monde capitaliste.Alexandra tire des portraits de cette génération, sa génération. L'iconographie de la période est reconstruite avec des éléments contemporains, cassant l'esthétique des affiches historiques de propagande qui symbolise le pays où ils vivaient. Quelle part d'identité ontils emmené avec eux d'un pays dont les icônes se sont toujours opposées à la quête personnelle pour l'individualité de chacun d'eux ?
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Alexandra POLINA</h1>
					<h4>Made in USSR</h4>
					<p>
						Dans les années 80, est née la dernière génération de citoyens soviétiques, génération dite des Jeunes Pionniers. Ils regardaient les mêmes dessins animés et ont été éduqués selon les mêmes principes, partageant une langue commune. Durant leur enfance, ils ont assisté à l'effondrement du communisme et ont été témoins de la période mouvementée de la Perestroïka. Après la chute de l'Union soviétique, nombre d'entre eux ont émigré vers divers pays à travers le monde, endroits où ils vivent aujourd'hui au milieu d'un monde capitaliste.Alexandra tire des portraits de cette génération, sa génération. L'iconographie de la période est reconstruite avec des éléments contemporains, cassant l'esthétique des affiches historiques de propagande qui symbolise le pays où ils vivaient. Quelle part d'identité ontils emmené avec eux d'un pays dont les icônes se sont toujours opposées à la quête personnelle pour l'individualité de chacun d'eux ?
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Alexandra POLINA</h1>
					<h4>Made in USSR</h4>
					<p>
						Dans les années 80, est née la dernière génération de citoyens soviétiques, génération dite des Jeunes Pionniers. Ils regardaient les mêmes dessins animés et ont été éduqués selon les mêmes principes, partageant une langue commune. Durant leur enfance, ils ont assisté à l'effondrement du communisme et ont été témoins de la période mouvementée de la Perestroïka. Après la chute de l'Union soviétique, nombre d'entre eux ont émigré vers divers pays à travers le monde, endroits où ils vivent aujourd'hui au milieu d'un monde capitaliste.Alexandra tire des portraits de cette génération, sa génération. L'iconographie de la période est reconstruite avec des éléments contemporains, cassant l'esthétique des affiches historiques de propagande qui symbolise le pays où ils vivaient. Quelle part d'identité ontils emmené avec eux d'un pays dont les icônes se sont toujours opposées à la quête personnelle pour l'individualité de chacun d'eux ?
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="pleshkova" <?php echo $nom != 'pleshkova' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/maria_pleshkova_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=maria_pleshkova&retour=le_prix_photo.php?annee=2013|nom=pleshkova">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Maria PLESHKOVA</h1>
					<h4>Days of war : a pillow book</h4>
					<p>
					Days of war : a pillow book est un journal sur l'attente. Le projet s'appuie sur l'expérience personnelle de la photographe. L'homme qu'elle aimait, qui est journaliste, est allé en Lybie pour couvrir la guerre. Incapable de le rejoindre, elle est restée dans sa ville natale. Elle lisait alors les articles et suivait quotidiennement les nouvelles de Lybie. Elle a finalement été plongée dans ces événements si profondément, qu'il lui a semblé être partie aussi. A la fois désespérée et angoissée, elle a commencé ce projet, qui est devenu son journal intime et sa thérapie.Dans ce projet, chaque photo est suivie d'un texte. Ce dernier raconte ce qu'il s'est passé en Lybie un jour donné. Les photos, quant à elles, montrent ce qui se passait pour la photographe ce même jour. Le texte est délibérément très formel, comme les grands titres d'un journal. C'est une sorte de chronologie de la guerre civile libyenne. A l'inverse, les photographies sont toutes très personnelles et racontent l'intimité de la photographe. 
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Maria PLESHKOVA</h1>
					<h4>Days of war : a pillow book</h4>
					<p>
						Days of war : a pillow book est un journal sur l'attente. Le projet s'appuie sur l'expérience personnelle de la photographe. L'homme qu'elle aimait, qui est journaliste, est allé en Lybie pour couvrir la guerre. Incapable de le rejoindre, elle est restée dans sa ville natale. Elle lisait alors les articles et suivait quotidiennement les nouvelles de Lybie. Elle a finalement été plongée dans ces événements si profondément, qu'il lui a semblé être partie aussi. A la fois désespérée et angoissée, elle a commencé ce projet, qui est devenu son journal intime et sa thérapie.Dans ce projet, chaque photo est suivie d'un texte. Ce dernier raconte ce qu'il s'est passé en Lybie un jour donné. Les photos, quant à elles, montrent ce qui se passait pour la photographe ce même jour. Le texte est délibérément très formel, comme les grands titres d'un journal. C'est une sorte de chronologie de la guerre civile libyenne. A l'inverse, les photographies sont toutes très personnelles et racontent l'intimité de la photographe.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Maria PLESHKOVA</h1>
					<h4>Days of war : a pillow book</h4>
					<p>
						Days of war : a pillow book est un journal sur l'attente. Le projet s'appuie sur l'expérience personnelle de la photographe. L'homme qu'elle aimait, qui est journaliste, est allé en Lybie pour couvrir la guerre. Incapable de le rejoindre, elle est restée dans sa ville natale. Elle lisait alors les articles et suivait quotidiennement les nouvelles de Lybie. Elle a finalement été plongée dans ces événements si profondément, qu'il lui a semblé être partie aussi. A la fois désespérée et angoissée, elle a commencé ce projet, qui est devenu son journal intime et sa thérapie.Dans ce projet, chaque photo est suivie d'un texte. Ce dernier raconte ce qu'il s'est passé en Lybie un jour donné. Les photos, quant à elles, montrent ce qui se passait pour la photographe ce même jour. Le texte est délibérément très formel, comme les grands titres d'un journal. C'est une sorte de chronologie de la guerre civile libyenne. A l'inverse, les photographies sont toutes très personnelles et racontent l'intimité de la photographe.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Maria PLESHKOVA</h1>
					<h4>Days of war : a pillow book</h4>
					<p>
						Days of war : a pillow book est un journal sur l'attente. Le projet s'appuie sur l'expérience personnelle de la photographe. L'homme qu'elle aimait, qui est journaliste, est allé en Lybie pour couvrir la guerre. Incapable de le rejoindre, elle est restée dans sa ville natale. Elle lisait alors les articles et suivait quotidiennement les nouvelles de Lybie. Elle a finalement été plongée dans ces événements si profondément, qu'il lui a semblé être partie aussi. A la fois désespérée et angoissée, elle a commencé ce projet, qui est devenu son journal intime et sa thérapie.Dans ce projet, chaque photo est suivie d'un texte. Ce dernier raconte ce qu'il s'est passé en Lybie un jour donné. Les photos, quant à elles, montrent ce qui se passait pour la photographe ce même jour. Le texte est délibérément très formel, comme les grands titres d'un journal. C'est une sorte de chronologie de la guerre civile libyenne. A l'inverse, les photographies sont toutes très personnelles et racontent l'intimité de la photographe.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Maria PLESHKOVA</h1>
					<h4>Days of war : a pillow book</h4>
					<p>
						Days of war : a pillow book est un journal sur l'attente. Le projet s'appuie sur l'expérience personnelle de la photographe. L'homme qu'elle aimait, qui est journaliste, est allé en Lybie pour couvrir la guerre. Incapable de le rejoindre, elle est restée dans sa ville natale. Elle lisait alors les articles et suivait quotidiennement les nouvelles de Lybie. Elle a finalement été plongée dans ces événements si profondément, qu'il lui a semblé être partie aussi. A la fois désespérée et angoissée, elle a commencé ce projet, qui est devenu son journal intime et sa thérapie.Dans ce projet, chaque photo est suivie d'un texte. Ce dernier raconte ce qu'il s'est passé en Lybie un jour donné. Les photos, quant à elles, montrent ce qui se passait pour la photographe ce même jour. Le texte est délibérément très formel, comme les grands titres d'un journal. C'est une sorte de chronologie de la guerre civile libyenne. A l'inverse, les photographies sont toutes très personnelles et racontent l'intimité de la photographe.
					</p>
				</div>
			</div>
		</section>
		<section class="prix_photos diaporama content" data-nom="podavini" <?php echo $nom != 'podavini' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/fausto_podavini_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=fausto_podavini&retour=le_prix_photo.php?annee=2013|nom=podavini">
							<img class="plein-ecran" src="../img/plein-ecran.png" />
						</a>
						<span class="decompte"><span class="numero-photo">1</span> / <span class="total-photos"></span></span>
						<div class="fleches">
							<img class="fleche-gauche" src="../img/gauche_noir.png" />
							<img class="fleche-droite" src="../img/droite_noir.png" />
						</div>
					</div>
				</div>
				<div class="commentaire-diaporama" data-idx="0">
					<h1>Fausto PODAVINI</h1>
					<h4>Mirella</h4>
					<p>
					Mirella a 71 ans et a passé 43 ans de sa vie avec la seule personne qu'elle n'ait jamais aimée. 43 années de partage, de difficultés, de rires et de beaux moments : une famille, une maison, des valeurs transmises. Durant les six dernières années, quelque chose a changé : Mirella a dû combattre la maladie d'Alzheimer de son mari. Elle lui a dévoué sa vie. Elle est devenue son aide-soignante avec dévotion, force et amour…tant qu'il y a de la vie, il y a de l'espoir…même si les souvenirs s'effacent jour après jour, sans relâche. Que peut-il y a voir de plus douloureux que de ne pas être reconnue par l'être aimé, le partenaire de toute une vie ? Mirella, c'est l'histoire d'amour d'une femme pour son mari, d'une femme qui a été soudainement obligée de faire face seule à son épreuve la plus difficile, faite d'espoirs et d'incrédulité, de douleur et de résignation, de chagrin et d'impuissance.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Fausto PODAVINI</h1>
					<h4>Mirella</h4>
					<p>
						Mirella a 71 ans et a passé 43 ans de sa vie avec la seule personne qu'elle n'ait jamais aimée. 43 années de partage, de difficultés, de rires et de beaux moments : une famille, une maison, des valeurs transmises. Durant les six dernières années, quelque chose a changé : Mirella a dû combattre la maladie d'Alzheimer de son mari. Elle lui a dévoué sa vie. Elle est devenue son aide-soignante avec dévotion, force et amour…tant qu'il y a de la vie, il y a de l'espoir…même si les souvenirs s'effacent jour après jour, sans relâche. Que peut-il y a voir de plus douloureux que de ne pas être reconnue par l'être aimé, le partenaire de toute une vie ? Mirella, c'est l'histoire d'amour d'une femme pour son mari, d'une femme qui a été soudainement obligée de faire face seule à son épreuve la plus difficile, faite d'espoirs et d'incrédulité, de douleur et de résignation, de chagrin et d'impuissance.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Fausto PODAVINI</h1>
					<h4>Mirella</h4>
					<p>
					Mirella a 71 ans et a passé 43 ans de sa vie avec la seule personne qu'elle n'ait jamais aimée. 43 années de partage, de difficultés, de rires et de beaux moments : une famille, une maison, des valeurs transmises. Durant les six dernières années, quelque chose a changé : Mirella a dû combattre la maladie d'Alzheimer de son mari. Elle lui a dévoué sa vie. Elle est devenue son aide-soignante avec dévotion, force et amour…tant qu'il y a de la vie, il y a de l'espoir…même si les souvenirs s'effacent jour après jour, sans relâche. Que peut-il y a voir de plus douloureux que de ne pas être reconnue par l'être aimé, le partenaire de toute une vie ? Mirella, c'est l'histoire d'amour d'une femme pour son mari, d'une femme qui a été soudainement obligée de faire face seule à son épreuve la plus difficile, faite d'espoirs et d'incrédulité, de douleur et de résignation, de chagrin et d'impuissance.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Fausto PODAVINI</h1>
					<h4>Mirella</h4>
					<p>
						Mirella a 71 ans et a passé 43 ans de sa vie avec la seule personne qu'elle n'ait jamais aimée. 43 années de partage, de difficultés, de rires et de beaux moments : une famille, une maison, des valeurs transmises. Durant les six dernières années, quelque chose a changé : Mirella a dû combattre la maladie d'Alzheimer de son mari. Elle lui a dévoué sa vie. Elle est devenue son aide-soignante avec dévotion, force et amour…tant qu'il y a de la vie, il y a de l'espoir…même si les souvenirs s'effacent jour après jour, sans relâche. Que peut-il y a voir de plus douloureux que de ne pas être reconnue par l'être aimé, le partenaire de toute une vie ? Mirella, c'est l'histoire d'amour d'une femme pour son mari, d'une femme qui a été soudainement obligée de faire face seule à son épreuve la plus difficile, faite d'espoirs et d'incrédulité, de douleur et de résignation, de chagrin et d'impuissance.
					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Fausto PODAVINI</h1>
					<h4>Mirella</h4>
					<p>
						Mirella a 71 ans et a passé 43 ans de sa vie avec la seule personne qu'elle n'ait jamais aimée. 43 années de partage, de difficultés, de rires et de beaux moments : une famille, une maison, des valeurs transmises. Durant les six dernières années, quelque chose a changé : Mirella a dû combattre la maladie d'Alzheimer de son mari. Elle lui a dévoué sa vie. Elle est devenue son aide-soignante avec dévotion, force et amour…tant qu'il y a de la vie, il y a de l'espoir…même si les souvenirs s'effacent jour après jour, sans relâche. Que peut-il y a voir de plus douloureux que de ne pas être reconnue par l'être aimé, le partenaire de toute une vie ? Mirella, c'est l'histoire d'amour d'une femme pour son mari, d'une femme qui a été soudainement obligée de faire face seule à son épreuve la plus difficile, faite d'espoirs et d'incrédulité, de douleur et de résignation, de chagrin et d'impuissance.
					</p>
				</div>
			</div>
		</section>
	</div>
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
