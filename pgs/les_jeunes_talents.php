<?php include "entete.php" ?>
<body>
	<?php
		$page = "jeunes_talents";
		$annee = isset($_GET['annee']) ? $_GET['annee'] : '2015';
		$nom = '';
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
				<li><a href="les_jeunes_talents.php?annee=2015" data-annee="2015"<?php echo $annee == '2015' ? 'class="active"' : ''?>>2015</a></li>
            	<li><a href="les_jeunes_talents.php?annee=2014" data-annee="2014"<?php echo $annee == '2014' ? 'class="active"' : ''?>>2014</a></li>
            </ul>
			<div id="presentation" data-annee="2015">
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
	<div class="prix_photos annee" data-annee="2015" <?php echo $annee != '2015' ? 'style="display: none;"' : ''?>>
		<section class="jeunes_talents bandeau content">
			<div id="content">
				<div class="entete-photographe" data-nom="sahraoui" <?php echo $nom != 'sahraoui' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/jeunes talents/Fethi Sahraoui/00.jpg" />
					<span class="titre-categorie">Jeune Talent 2015</span>
					<h1>Fethi SAHRAOUI</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sahraoui" href="#" class="active"></a></li>
						<li><a data-nom="lavigne" href="#"></a></li>
						<li><a data-nom="valle" href="#"></a></li>
						<li><a data-nom="wojciechowska" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="lavigne" <?php echo $nom != 'lavigne' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/jeunes talents/Maroesjka Lavigne/00.jpg" />
					<span class="titre-categorie">Jeune Talent 2015</span>
					<h1>Maroesjka LAVIGNE</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sahraoui" href="#"></a></li>
						<li><a data-nom="lavigne" href="#" class="active"></a></li>
						<li><a data-nom="valle" href="#"></a></li>
						<li><a data-nom="wojciechowska" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="valle" <?php echo $nom != 'valle' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/jeunes talents/Miriam Valle/00.jpg" />
					<span class="titre-categorie">Jeune Talent 2015</span>
					<h1>Miriam VALLE</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sahraoui" href="#"></a></li>
						<li><a data-nom="lavigne" href="#"></a></li>
						<li><a data-nom="valle" href="#" class="active"></a></li>
						<li><a data-nom="wojciechowska" href="#"></a></li>
					</ul>
					<br class="clear" />
				</div>
				<div class="entete-photographe" data-nom="wojciechowska" <?php echo $nom != 'wojciechowska' ? 'style="display:none;"' : '' ?>>
					<img class="portrait" src="../img/jeunes talents/Wiktoria Wojciechowska/00.jpg" />
					<span class="titre-categorie">Jeune Talent 2015</span>
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<ul class="controle controle-petit">
						<li><a data-nom="sahraoui" href="#"></a></li>
						<li><a data-nom="lavigne" href="#"></a></li>
						<li><a data-nom="valle" href="#"></a></li>
						<li><a data-nom="wojciechowska" href="#" class="active"></a></li>
					</ul>
					<br class="clear" />
				</div>
			</div>
		</section>
		<section class="jeunes_talents diaporama content" data-nom="sahraoui" <?php echo $nom != 'sahraoui' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/fethi_sahraoui_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=fethi_sahraoui&retour=les_jeunes_talents.php?annee=2015|nom=sahraoui">
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
					<h1>Fethi SAHRAOUI</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Fethi SAHRAOUI</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Fethi SAHRAOUI</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Fethi SAHRAOUI</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Fethi SAHRAOUI</h1>
					<h4></h4>
					<p>

					</p>
				</div>
			</div>
		</section>
		<section class="jeunes_talents diaporama content" data-nom="lavigne" <?php echo $nom != 'lavigne' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/maroesjka_lavigne_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=maroesjka_lavigne&retour=les_jeunes_talents.php?annee=2015|nom=lavigne">
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
					<h1>Maroesjka LAVIGNE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Maroesjka LAVIGNE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Maroesjka LAVIGNE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Maroesjka LAVIGNE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Maroesjka LAVIGNE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
			</div>
		</section>
		<section class="jeunes_talents diaporama content" data-nom="valle" <?php echo $nom != 'valle' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/miriam_valle_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=miriam_valle&retour=les_jeunes_talents.php?annee=2015|nom=valle">
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
					<h1>Miriam VALLE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Miriam VALLE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Miriam VALLE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Miriam VALLE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Miriam VALLE</h1>
					<h4></h4>
					<p>

					</p>
				</div>
			</div>
		</section>
		<section class="jeunes_talents diaporama content" data-nom="wojciechowska" <?php echo $nom != 'wojciechowska' ? 'style="display:none;"' : '' ?>>
			<div id="content">
				<div class="conteneur-diaporama">
					<div class="image">
						<?php include "galeries/wiktoria_wojciechowska_images.html" ?>
					</div>
					<div class="commandes">
						<a class="lien-plein-ecran" href="diaporama.php?&auteur=wiktoria_wojciechowska&retour=les_jeunes_talents.php?annee=2015|nom=wojciechowska">
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
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="1" style="display: none;">
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="2" style="display: none;">
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="3" style="display: none;">
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<h4></h4>
					<p>

					</p>
				</div>
				<div class="commentaire-diaporama" data-idx="4" style="display: none;">
					<h1>Wiktoria WOJCIECHOWSKA</h1>
					<h4></h4>
					<p>

					</p>
				</div>
			</div>
		</section>
	</div>
	<div class="prix_photos annee" data-annee="2014" <?php echo $annee != '2014' ? 'style="display: none;"' : ''?>>
		<section class="jeunes_talents bandeau content">
		<div id="content">
			<div class="entete-photographe" data-nom="simion" <?php echo $nom != 'simion' ? 'style="display:none;"' : '' ?>>
				<img class="portrait" src="../img/jeunes talents/Felicia Simion/00.jpg" />
				<span class="titre-categorie">Jeune Talent 2014</span>
				<h1>Felicia SIMION</h1>
				<ul class="controle controle-petit">
					<li><a data-nom="simion" href="#" class="active"></a></li>
					<li><a data-nom="chekachkov" href="#"></a></li>
					<li><a data-nom="buser-suero" href="#"></a></li>
					<li><a data-nom="kohlerova" href="#"></a></li>
				</ul>
				<br class="clear" />
			</div>
			<div class="entete-photographe" data-nom="chekachkov" <?php echo $nom != 'chekachkov' ? 'style="display:none;"' : '' ?>>
				<img class="portrait" src="../img/jeunes talents/Igor Chekachkov/00.jpg" />
				<span class="titre-categorie">Jeune Talent 2014</span>
				<h1>Igor CHEKACHKOV</h1>
				<ul class="controle controle-petit">
					<li><a data-nom="simion" href="#"></a></li>
					<li><a data-nom="chekachkov" href="#" class="active"></a></li>
					<li><a data-nom="buser-suero" href="#"></a></li>
					<li><a data-nom="kohlerova" href="#"></a></li>
				</ul>
				<br class="clear" />
			</div>
			<div class="entete-photographe" data-nom="buser-suero" <?php echo $nom != 'buser-suero' ? 'style="display:none;"' : '' ?>>
				<img class="portrait" src="../img/jeunes talents/Lorelei Buser Suero/00.jpg" />
				<span class="titre-categorie">Jeune Talent 2014</span>
				<h1>Loreleï BUSER SUERO</h1>
				<ul class="controle controle-petit">
					<li><a data-nom="simion" href="#"></a></li>
					<li><a data-nom="chekachkov" href="#"></a></li>
					<li><a data-nom="buser-suero" href="#" class="active"></a></li>
					<li><a data-nom="kohlerova" href="#"></a></li>
				</ul>
				<br class="clear" />
			</div>
			<div class="entete-photographe" data-nom="kohlerova" <?php echo $nom != 'kohlerova' ? 'style="display:none;"' : '' ?>>
				<img class="portrait" src="../img/jeunes talents/Renata Mia Kohlerova/00.jpg" />
				<span class="titre-categorie">Jeune Talent 2014</span>
				<h1>Renata Mia KÖHLEROVA</h1>
				<ul class="controle controle-petit">
					<li><a data-nom="simion" href="#"></a></li>
					<li><a data-nom="chekachkov" href="#"></a></li>
					<li><a data-nom="buser-suero" href="#"></a></li>
					<li><a data-nom="kohlerova" href="#" class="active"></a></li>
				</ul>
				<br class="clear" />
			</div>
		</div>
    </section>
    <section class="jeunes_talents diaporama content" data-nom="simion" <?php echo $nom != 'simion' ? 'style="display:none;"' : '' ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/felicia_simion_images.html" ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=felicia_simion&retour=les_jeunes_talents.php?annee=2014|nom=simion">
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
				<h1>Felicia SIMION</h1>
				<h4>The Playground, 2014</h4>
				<p>
					Passer de l'enfance à une soi-disant « vie d'adulte » a été bien plus facile pour Felicia Simion grâce à la présence de son cousin de 5 ans, Félix, originaire d'un petit village de Roumanie. Cet environnement traditionnel lui fait préférer jouer dans le sable plutôt qu'avec un iPad et le simple fait de nager dans la piscine d'un petit supermarché suffit à le rendre heureux. Il regarde la Voie Lactée, sans jamais être dérangé par les phares des voitures et les lampadaires des rues. < br/>
Felicia a décidé de rejoindre Félix dans ses activités où elle serait la photographe, la conteuse et lui jouerait différents personnages – une petite fille blonde, un chien parmi les chiens et un cowboy autoproclamé - libre de toute contrainte.
Felicia est donc entrée dans un nouveau monde, se souvenant de sa propre enfance vécue dans un environnement pauvre en gadgets électroniques et qui lui laissait le temps de chercher sa vraie identité. La cour et ses environs sont de nouveau son terrain de jeu, le lieu où tout est possible une fois que le soleil, avec sa lumière nourrissante, brille et engloutit la peur de vieillir.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="1" style="display: none;">
				<h1>Felicia SIMION</h1>
				<h4>The Playground, 2014</h4>
				<p>
					Passer de l'enfance à une soi-disant « vie d'adulte » a été bien plus facile pour Felicia Simion grâce à la présence de son cousin de 5 ans, Félix, originaire d'un petit village de Roumanie. Cet environnement traditionnel lui fait préférer jouer dans le sable plutôt qu'avec un iPad et le simple fait de nager dans la piscine d'un petit supermarché suffit à le rendre heureux. Il regarde la Voie Lactée, sans jamais être dérangé par les phares des voitures et les lampadaires des rues. < br/>
Felicia a décidé de rejoindre Félix dans ses activités où elle serait la photographe, la conteuse et lui jouerait différents personnages – une petite fille blonde, un chien parmi les chiens et un cowboy autoproclamé - libre de toute contrainte.
Felicia est donc entrée dans un nouveau monde, se souvenant de sa propre enfance vécue dans un environnement pauvre en gadgets électroniques et qui lui laissait le temps de chercher sa vraie identité. La cour et ses environs sont de nouveau son terrain de jeu, le lieu où tout est possible une fois que le soleil, avec sa lumière nourrissante, brille et engloutit la peur de vieillir.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="2" style="display: none;">
				<h1>Felicia SIMION</h1>
				<h4>The Playground, 2014</h4>
				<p>
					Passer de l'enfance à une soi-disant « vie d'adulte » a été bien plus facile pour Felicia Simion grâce à la présence de son cousin de 5 ans, Félix, originaire d'un petit village de Roumanie. Cet environnement traditionnel lui fait préférer jouer dans le sable plutôt qu'avec un iPad et le simple fait de nager dans la piscine d'un petit supermarché suffit à le rendre heureux. Il regarde la Voie Lactée, sans jamais être dérangé par les phares des voitures et les lampadaires des rues. < br/>
Felicia a décidé de rejoindre Félix dans ses activités où elle serait la photographe, la conteuse et lui jouerait différents personnages – une petite fille blonde, un chien parmi les chiens et un cowboy autoproclamé - libre de toute contrainte.
Felicia est donc entrée dans un nouveau monde, se souvenant de sa propre enfance vécue dans un environnement pauvre en gadgets électroniques et qui lui laissait le temps de chercher sa vraie identité. La cour et ses environs sont de nouveau son terrain de jeu, le lieu où tout est possible une fois que le soleil, avec sa lumière nourrissante, brille et engloutit la peur de vieillir.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="3" style="display: none;">
				<h1>Felicia SIMION</h1>
				<h4>The Playground, 2014</h4>
				<p>
					Passer de l'enfance à une soi-disant « vie d'adulte » a été bien plus facile pour Felicia Simion grâce à la présence de son cousin de 5 ans, Félix, originaire d'un petit village de Roumanie. Cet environnement traditionnel lui fait préférer jouer dans le sable plutôt qu'avec un iPad et le simple fait de nager dans la piscine d'un petit supermarché suffit à le rendre heureux. Il regarde la Voie Lactée, sans jamais être dérangé par les phares des voitures et les lampadaires des rues. < br/>
Felicia a décidé de rejoindre Félix dans ses activités où elle serait la photographe, la conteuse et lui jouerait différents personnages – une petite fille blonde, un chien parmi les chiens et un cowboy autoproclamé - libre de toute contrainte.
Felicia est donc entrée dans un nouveau monde, se souvenant de sa propre enfance vécue dans un environnement pauvre en gadgets électroniques et qui lui laissait le temps de chercher sa vraie identité. La cour et ses environs sont de nouveau son terrain de jeu, le lieu où tout est possible une fois que le soleil, avec sa lumière nourrissante, brille et engloutit la peur de vieillir.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="4" style="display: none;">
				<h1>Felicia SIMION</h1>
				<h4>The Playground, 2014</h4>
				<p>
					Passer de l'enfance à une soi-disant « vie d'adulte » a été bien plus facile pour Felicia Simion grâce à la présence de son cousin de 5 ans, Félix, originaire d'un petit village de Roumanie. Cet environnement traditionnel lui fait préférer jouer dans le sable plutôt qu'avec un iPad et le simple fait de nager dans la piscine d'un petit supermarché suffit à le rendre heureux. Il regarde la Voie Lactée, sans jamais être dérangé par les phares des voitures et les lampadaires des rues. < br/>
Felicia a décidé de rejoindre Félix dans ses activités où elle serait la photographe, la conteuse et lui jouerait différents personnages – une petite fille blonde, un chien parmi les chiens et un cowboy autoproclamé - libre de toute contrainte.
Felicia est donc entrée dans un nouveau monde, se souvenant de sa propre enfance vécue dans un environnement pauvre en gadgets électroniques et qui lui laissait le temps de chercher sa vraie identité. La cour et ses environs sont de nouveau son terrain de jeu, le lieu où tout est possible une fois que le soleil, avec sa lumière nourrissante, brille et engloutit la peur de vieillir.erations from my family have called home throughout
					their lives.
				</p>
			</div>
    	</div>
    </section>
    <section class="jeunes_talents diaporama content" data-nom="chekachkov" <?php echo $nom != 'chekachkov' ? 'style="display:none;"' : '' ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/igor_chekachkov_images.html" ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=igor_chekachkov&retour=les_jeunes_talents.php?annee=2014|nom=chekachkov">
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
				<h1>Igor CHEKACHKOV</h1>
				<h4>Daily lives, 2014</h4>
				<p>
					Le travail d'Igor Chekachkov consiste à composer des visuels à partir d'idées, de concepts et de manifestations difficiles à traduire en images. Le plan, la couleur, la composition des photographies sont dépourvus de leur signification instrumentale. Le concept suit la réalité, tisse et crée avec elle, et non l'inverse. <br/>
Tous les projets photo ont été réalisés dans le flux d'évènements qu'ils soient d'ordre social, public ou intime. L'approche de l'objet visuel est sans hésitation, sans précipitation mais vise la révélation.
Son travail appartient à la fois au genre documentaire et à la photographie de rue. Cette pratique instantanée permet d'éviter une vision sélective tel le syndrome de la vision du tunnel, et de s'intéresser aux magnifiques éclats de la beauté douloureuse de nos existences.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="1" style="display: none;">
				<h1>Igor CHEKACHKOV</h1>
				<h4>Daily lives, 2014</h4>
				<p>
					Le travail d'Igor Chekachkov consiste à composer des visuels à partir d'idées, de concepts et de manifestations difficiles à traduire en images. Le plan, la couleur, la composition des photographies sont dépourvus de leur signification instrumentale. Le concept suit la réalité, tisse et crée avec elle, et non l'inverse. <br/>
Tous les projets photo ont été réalisés dans le flux d'évènements qu'ils soient d'ordre social, public ou intime. L'approche de l'objet visuel est sans hésitation, sans précipitation mais vise la révélation.
Son travail appartient à la fois au genre documentaire et à la photographie de rue. Cette pratique instantanée permet d'éviter une vision sélective tel le syndrome de la vision du tunnel, et de s'intéresser aux magnifiques éclats de la beauté douloureuse de nos existences.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="2" style="display: none;">
				<h1>Igor CHEKACHKOV</h1>
				<h4>Daily lives, 2014</h4>
				<p>Le travail d'Igor Chekachkov consiste à composer des visuels à partir d'idées, de concepts et de manifestations difficiles à traduire en images. Le plan, la couleur, la composition des photographies sont dépourvus de leur signification instrumentale. Le concept suit la réalité, tisse et crée avec elle, et non l'inverse. <br/>
Tous les projets photo ont été réalisés dans le flux d'évènements qu'ils soient d'ordre social, public ou intime. L'approche de l'objet visuel est sans hésitation, sans précipitation mais vise la révélation.
Son travail appartient à la fois au genre documentaire et à la photographie de rue. Cette pratique instantanée permet d'éviter une vision sélective tel le syndrome de la vision du tunnel, et de s'intéresser aux magnifiques éclats de la beauté douloureuse de nos existences.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="3" style="display: none;">
				<h1>Igor CHEKACHKOV</h1>
				<h4>Daily lives, 2014</h4>
				<p>
					Le travail d'Igor Chekachkov consiste à composer des visuels à partir d'idées, de concepts et de manifestations difficiles à traduire en images. Le plan, la couleur, la composition des photographies sont dépourvus de leur signification instrumentale. Le concept suit la réalité, tisse et crée avec elle, et non l'inverse. <br/>
Tous les projets photo ont été réalisés dans le flux d'évènements qu'ils soient d'ordre social, public ou intime. L'approche de l'objet visuel est sans hésitation, sans précipitation mais vise la révélation.
Son travail appartient à la fois au genre documentaire et à la photographie de rue. Cette pratique instantanée permet d'éviter une vision sélective tel le syndrome de la vision du tunnel, et de s'intéresser aux magnifiques éclats de la beauté douloureuse de nos existences.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="4" style="display: none;">
				<h1>Igor CHEKACHKOV</h1>
				<h4>Daily lives, 2014</h4>
				<p>
					Le travail d'Igor Chekachkov consiste à composer des visuels à partir d'idées, de concepts et de manifestations difficiles à traduire en images. Le plan, la couleur, la composition des photographies sont dépourvus de leur signification instrumentale. Le concept suit la réalité, tisse et crée avec elle, et non l'inverse. <br/>
Tous les projets photo ont été réalisés dans le flux d'évènements qu'ils soient d'ordre social, public ou intime. L'approche de l'objet visuel est sans hésitation, sans précipitation mais vise la révélation.
Son travail appartient à la fois au genre documentaire et à la photographie de rue. Cette pratique instantanée permet d'éviter une vision sélective tel le syndrome de la vision du tunnel, et de s'intéresser aux magnifiques éclats de la beauté douloureuse de nos existences.
				</p>
			</div>
    	</div>
    </section>
    <section class="jeunes_talents diaporama content" data-nom="buser-suero" <?php echo $nom != 'buser-suero' ? 'style="display:none;"' : '' ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/lorelei_buser_suero_images.html" ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=lorelei_buser_suero&retour=les_jeunes_talents.php?annee=2014|nom=buser-suero">
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
				<h1>Lorelei BUSER SUERO</h1>
				<h4>Regarde moi, Enee, alopécie décalvante 2014</h4>
				<p>
					Série de portraits photographiques de personnes atteintes de maladies plus ou moins graves, d'handicaps physiques et mentaux plus ou moins marqués. Avec ce projet, Loreleï Buser Suero cherche à mettre le spectateur face à des personnes, dont, par gêne, on évite souvent de croiser le regard parce qu'il pointe une différence difficile à accepter. Pourtant les personnes photographiées ont toutes exprimé l'envie d'être regardées au même titre que tout un chacun.
Cette exposition est construite comme une invitation à un échange qui surmonte les différences à travers le médium de la photographie.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="1" style="display: none;">
				<h1>Lorelei BUSER SUERO</h1>
				<h4>Regarde moi, Marie France, cancer du sein</h4>
				<p>
					Série de portraits photographiques de personnes atteintes de maladies plus ou moins graves, d'handicaps physiques et mentaux plus ou moins marqués. Avec ce projet, Loreleï Buser Suero cherche à mettre le spectateur face à des personnes, dont, par gêne, on évite souvent de croiser le regard parce qu'il pointe une différence difficile à accepter. Pourtant les personnes photographiées ont toutes exprimé l'envie d'être regardées au même titre que tout un chacun.
Cette exposition est construite comme une invitation à un échange qui surmonte les différences à travers le médium de la photographie.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="2" style="display: none;">
				<h1>Lorelei BUSER SUERO</h1>
				<h4>Regarde moi, Magali, Infirme moteur cérébral</h4>
				<p>
					Série de portraits photographiques de personnes atteintes de maladies plus ou moins graves, d'handicaps physiques et mentaux plus ou moins marqués. Avec ce projet, Loreleï Buser Suero cherche à mettre le spectateur face à des personnes, dont, par gêne, on évite souvent de croiser le regard parce qu'il pointe une différence difficile à accepter. Pourtant les personnes photographiées ont toutes exprimé l'envie d'être regardées au même titre que tout un chacun.
Cette exposition est construite comme une invitation à un échange qui surmonte les différences à travers le médium de la photographie.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="3" style="display: none;">
				<h1>Lorelei BUSER SUERO</h1>
				<h4>Regarde moi, Vincent, grand brûlé</h4>
				<p>
					Série de portraits photographiques de personnes atteintes de maladies plus ou moins graves, d'handicaps physiques et mentaux plus ou moins marqués. Avec ce projet, Loreleï Buser Suero cherche à mettre le spectateur face à des personnes, dont, par gêne, on évite souvent de croiser le regard parce qu'il pointe une différence difficile à accepter. Pourtant les personnes photographiées ont toutes exprimé l'envie d'être regardées au même titre que tout un chacun.
Cette exposition est construite comme une invitation à un échange qui surmonte les différences à travers le médium de la photographie.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="4" style="display: none;">
				<h1>Lorelei BUSER SUERO</h1>
				<h4>Regarde moi, Cécile, pelade</h4>
				<p>
					Série de portraits photographiques de personnes atteintes de maladies plus ou moins graves, d'handicaps physiques et mentaux plus ou moins marqués. Avec ce projet, Loreleï Buser Suero cherche à mettre le spectateur face à des personnes, dont, par gêne, on évite souvent de croiser le regard parce qu'il pointe une différence difficile à accepter. Pourtant les personnes photographiées ont toutes exprimé l'envie d'être regardées au même titre que tout un chacun.
Cette exposition est construite comme une invitation à un échange qui surmonte les différences à travers le médium de la photographie.
				</p>
			</div>
    	</div>
    </section>
    <section class="jeunes_talents diaporama content" data-nom="kohlerova" <?php echo $nom != 'kohlerova' ? 'style="display:none;"' : '' ?>>
    	<div id="content">
			<div class="conteneur-diaporama">
				<div class="image">
					<?php include "galeries/renata_mia_kohlerova_images.html" ?>
				</div>
				<div class="commandes">
					<a class="lien-plein-ecran" href="diaporama.php?&auteur=renata_mia_kohlerova&retour=les_jeunes_talents.php?annee=2014|nom=kohlerova">
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
				<h1>Renata Mia KÖHLEROVA</h1>
				<h4>Kintsukoroi, 2014</h4>
				<p>
					Le projet en cours Kintsukuroi, parle de l'amour et de la mort, de la douleur et de la beauté. Renata est inspirée par sa philosophie de la poterie japonaise, où Kintsukuroi signifie - réparer avec de l'or. C'est l'art de la réparation de la poterie avec de l'or ou de la laque argent et de comprendre qu'une pièce est plus belle après avoir été cassée.
Renata utilise cette philosophie du " cassé " pour sa vie personnelle et les histoires qui se passent autour d'elle. C'est un travail plus intuitif que la photographie mise en scène. Ces photos révèlent son subconscient tel qu'elle ne l'avait jamais connu avant.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="1" style="display: none;">
				<h1>Renata Mia KÖHLEROVA</h1>
				<h4>Kintsukoroi, 2014</h4>
				<p>
					Le projet en cours Kintsukuroi, parle de l'amour et de la mort, de la douleur et de la beauté. Renata est inspirée par sa philosophie de la poterie japonaise, où Kintsukuroi signifie - réparer avec de l'or. C'est l'art de la réparation de la poterie avec de l'or ou de la laque argent et de comprendre qu'une pièce est plus belle après avoir été cassée.
Renata utilise cette philosophie du " cassé " pour sa vie personnelle et les histoires qui se passent autour d'elle. C'est un travail plus intuitif que la photographie mise en scène. Ces photos révèlent son subconscient tel qu'elle ne l'avait jamais connu avant.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="2" style="display: none;">
				<h1>Renata Mia KÖHLEROVA</h1>
				<h4>Kintsukoroi, 2014 </h4>
				<p>
					Le projet en cours Kintsukuroi, parle de l'amour et de la mort, de la douleur et de la beauté. Renata est inspirée par sa philosophie de la poterie japonaise, où Kintsukuroi signifie - réparer avec de l'or. C'est l'art de la réparation de la poterie avec de l'or ou de la laque argent et de comprendre qu'une pièce est plus belle après avoir été cassée.
Renata utilise cette philosophie du " cassé " pour sa vie personnelle et les histoires qui se passent autour d'elle. C'est un travail plus intuitif que la photographie mise en scène. Ces photos révèlent son subconscient tel qu'elle ne l'avait jamais connu avant.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="3" style="display: none;">
				<h1>Renata Mia KÖHLEROVA</h1>
				<h4>Kintsukoroi, 2014</h4>
				<p>Le projet en cours Kintsukuroi, parle de l'amour et de la mort, de la douleur et de la beauté. Renata est inspirée par sa philosophie de la poterie japonaise, où Kintsukuroi signifie - réparer avec de l'or. C'est l'art de la réparation de la poterie avec de l'or ou de la laque argent et de comprendre qu'une pièce est plus belle après avoir été cassée.
Renata utilise cette philosophie du " cassé " pour sa vie personnelle et les histoires qui se passent autour d'elle. C'est un travail plus intuitif que la photographie mise en scène. Ces photos révèlent son subconscient tel qu'elle ne l'avait jamais connu avant.
				</p>
			</div>
			<div class="commentaire-diaporama" data-idx="4" style="display: none;">
				<h1>Renata Mia KÖHLEROVA</h1>
				<h4>Kintsukoroi, 2014</h4>
				<p>
					Le projet en cours Kintsukuroi, parle de l'amour et de la mort, de la douleur et de la beauté. Renata est inspirée par sa philosophie de la poterie japonaise, où Kintsukuroi signifie - réparer avec de l'or. C'est l'art de la réparation de la poterie avec de l'or ou de la laque argent et de comprendre qu'une pièce est plus belle après avoir été cassée.
Renata utilise cette philosophie du " cassé " pour sa vie personnelle et les histoires qui se passent autour d'elle. C'est un travail plus intuitif que la photographie mise en scène. Ces photos révèlent son subconscient tel qu'elle ne l'avait jamais connu avant.
				</p>
			</div>
    	</div>
    </section>
	</div>
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
