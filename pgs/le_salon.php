<?php
	include "entete.php";
	include "../lib/bdd.php";
	$link = connexion();
?>
<body>
	<?php
		$page = "salon";
		include "menu.php"
	?>
    <section class="lesalon intro content">
    	<div id="content">
    		<h1>La quatrième image<span id="title_line"></span></h1>
            <ul id="nav_concour">
            	<li><a data-contenu="concept" href="#" class="active"><?php trad("Le Festival 2017", "2017 Festival") ?></a></li>
				<li><a data-contenu="edition_2015" href="#"><?php trad("L'édition 2015", "2015 edition") ?></a></li>
                <li><a data-contenu="edition_2014" href="#"><?php trad("L'édition 2014", "2014 edition") ?></a></li>
				<li><a data-contenu="residence" href="#"><?php trad("La Résidence photographique", "The photographic residency") ?></a></li>
				<li><a data-contenu="qsn" href="#"><?php trad("Qui sommes-nous ?", "Who are we ?") ?></a></li>
            </ul>
			<div id="presentation" data-contenu="concept">
				<p class="doublecol">
					<?php if($langue == 'fr'): ?>				
S’il est un art permettant de rassembler, de se faire rencontrer connaisseurs passionnés et flâneurs en recherche d’émotions, c’est bien la photographie.
Créée en 2013 avec le soutien de la Mairie de Paris, de la Mairie du 4<sup>e</sup> et de la MEP, LA QUATRIÈME IMAGE est une rencontre internationale de la photographie, ouverte au public, gratuite, dont l’ambition est d’ouvrir le spectre de cette scène culturelle. Elle met à l’honneur les jeunes talents issus de tous horizons.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					Photography is an art form which allows both keen amateurs and consummate experts in search of emotions to meet together and share their passion.
Created with the support of the Mairie de Paris, the Mairie du 4e arrondissement de Paris and the Maison Européenne de la Photographie, LA QUATRIEME IMAGE is a free international photographic event open to the public whose purpose is to widen access to this cultural platform and open the door to new visuals landscapes.
					<?php endif; ?>
                    
				</p>
                <p class="colg">
					<?php if($langue == 'fr'): ?>
                	<br /> <strong> UNE EXPOSITION INTERNATIONALE</strong> <br />
  Une trentaine de photographes sont sélectionnés parmi plusieurs centaines de candidatures en provenance des quatre coins du monde. Leurs œuvres sont présentées pendant 16 jours à l’Espace des Blancs Manteaux à Paris.  <br />
    <br /> <strong> UN PAYS INVITÉ D'HONNEUR </strong> <br />
    En 2017, La Quatrième Image accueillera <strong>la Pologne</strong> en tant qu’invitée d’honneur. La scène photographique de ce pays est en effet, très active, avec notamment de jeunes talents très créatifs. 6 photographes seront sélectionnés et exposés. Les artistes seront également visibles sur leurs stands pour exposer nombre de leurs tirages.<br />
<br /> <strong>UN PRIX PHOTO</strong> <br />
                    Un jury de professionnels de l’image récompense quatre lauréats. Le 1er Prix, parrainé par la Mairie de Paris, consiste en une résidence de trois mois à la Cité des Arts de Paris, assortie d’une bourse. Les lauréats des 2<sup>e</sup>, 3<sup>e</sup> et 4<sup>e</sup> prix se voient remettre respectivement 3 000 €, 1 000 € et 500 €. Tous sont exposés pendant le festival.<br />
                    
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
                	<br /> <strong>AN INTERNATIONAL EXHIBITION</strong> <br />
                    Some 30 photographers are selected from several hundred candidates from all over the globe. These photographers’ work is presented for sixteen days at the Espace des Blancs-Manteaux in Paris.<br />
                    <br /> <strong>A GUEST OF HONOR</strong> <br />
                    In 2017 La Quatrième Image will welcome </strong>Poland</strong> as a guest of honour. The Polish photographic community is very active and is comprised of many young talents. Six photographers will be selected and will expose their works. The artists will also be present in their booths to present their photographs to the public.<br />
                    <br /> <strong>PHOTO AWARD</strong> <br />
                    A jury of photography professionals will reward four laureates. The first prize, sponsored by the Mairie of Paris, is a three-month residency at the Cité Internationale des Arts of Paris along with a scholarship. The second, third and fourth laureates respectively receive prizes of 3,000; 1,000 and 500 euros. All laureates exhibit their works during the festival.
                    
					<?php endif; ?>
				</p>
				<p class="cold">
					<?php if($langue == 'fr'): ?>
                    <br /> <strong>UN CONCOURS JEUNES TALENTS</strong> <br />
                    Le festival tient tout particulièrement, à promouvoir la photographie émergente. Quatre Jeunes Talents  sont  sélectionnés et invités à venir présenter leur travail pendant toute la durée du festival. Pour concourir : il faut être âgé de moins de 26 ans, étudiant en école d’art ou de photographie, professionnel débutant ou amateur.<br />  
                    <br /> <strong>UNE OPPORTUNITÉ D’ÉCHANGES AVEC DES EXPERTS </strong> <br />
                    Animées par des professionnels du monde de l’image, des lectures de portfolios sont ouvertes à tous gratuitement. Des débats et tables rondes sont organisés tout au long de l’événement.<br />
                    <br /> <strong>UNE DIMENSION ÉDUCATIVE ET D’OUVERTURE</strong> <br />
                    La Quatrième Image propose également des actions de médiation culturelles. Ces actions visent à être des vecteurs de lien social, d’éducation et de créativité, à destination du public et en particulier des enfants. Elles sont gratuites. Elles se déclinent sous forme d’ateliers et de visites animés par des médiateurs expérimentés.
                    
                    
                    
                    		<?php endif; ?>
					<?php if($langue == 'en'): ?>
                	 <br /> <strong>A COMPETITION OF YOUNG TALENTS</strong> <br />
                     Aiming to promote emerging photography, four young talents are selected and invited to present their work during the entire festival. In order to enter this competition they must be under twenty-six years of age, be students of an art or photography school, be young professionals or passionate amateurs.<br />
                      <br /> <strong>AN OPPORTUNITY TO EXCHANGE WITH PROFESSIONNALS</strong> <br />
                      Led by photo experts, portfolios reviews are open to all upon free registration. Conferences and round tables are organized throughout the festival. <br />
                      <br /> <strong>AN EDUCATIONAL DIMENSION</strong> <br />
                      LA QUATRIEME IMAGE also offers opportunities of cultural mediation. These initiatives seek to enrich social ties, education and creativity. They are aimed at the public and more specifically children. They are free and take the form of workshops and guided visits by experienced mediators.
                      
                      
					<?php endif; ?>
                </p>
            </div>
			<div id="presentation" data-contenu="edition_2015" style="display: none;">
				<p class="doublecol">
					<?php if($langue == 'fr'): ?>
					Partant du constat qu'au-delà de son message, la photographie 
                    est aussi une expression culturelle de l'Homme, un ressenti, 
                    une atmosphère, l'association Images Humaines a souhaité, 
                    soutenue par la Mairie de Paris et la Mairie du 4e, 
                    créer un Salon International de Photographie en plein centre 
                    de Paris, à l'espace des Blancs Manteaux.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					Beyond the message it conveys, photography is a cultural
					expression of man. It is also a feeling and an atmosphere.
					The organization called Images Humaines decided to create an
					international photo fair to take place at the Espace des
					Blancs Manteaux, in the very center of Paris.
					<?php endif; ?>
				</p>
                <p class="colg">
					<?php if($langue == 'fr'): ?>
					Ce salon international de Photographie d'entrée libre, qui se
					tient annuellement à la fin du mois d'octobre, s'attache à
					renforcer la proximité entre le public et les artistes, non
					seulement au travers des rencontres avec les exposants présents
					durant le salon, mais aussi par le biais de différents événements
					associés, comme la remise des 4 Prix Photo du salon, la sélection
					de 4 jeunes talents, des ateliers d'éducation à l'image pour les
					enfants, et des lectures de portfolios proposées en marge du salon.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					The event is supported by the City of Paris as well as by the
					Town Hall of the Paris 4th arrondissement.   This international
					photo fair, called “La Quatrième Image” (The Fourth Image) is
					held each year at the end of October. Admission is free with
					the aim of setting up a closer relationship between the public
					and the artists. This is made possible through encounters
					between the exhibiting photographers and the public, as well
					as through several related events such as the awarding of the
					fair’s four Photo Awards and the selection of four Young
					Talents, or as educational workshops for youngsters and
					portfolio reviews for photographers.
					<?php endif; ?>
				</p>
				<p class="cold">
					<?php if($langue == 'fr'): ?>
					En 2015, pour sa 3e édition, La Quatrième Image se déroulera
					sur 6 jours, du 27 octobre au 1er novembre inclus, à l'Espace
					des Blancs Manteaux.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					“La Quatrième Image” will take place for the third time in 2015.
					It will be held at the Espace des Blancs Manteaux, for six
					days, from October 27 thru November 1, 2015.
					<?php endif; ?>
                </p>
            </div>
			<div id="presentation" data-contenu="edition_2014" style="display: none;">
				<p class="doublecol">
					<?php if($langue == 'fr'): ?>
					Scène Photographique: La Quatrième Image en 2014 a offert au public 
                    l'occasion de rencontrer plus de 40 exposants, 
                    photographes indépendants de 18 nationalités différentes. Professionnels 
                    ou non, sélectionnés rigoureusement parmi de nombreuses candidatures, 
                    les 18 000 visiteurs ont pu découvrir leur regard sur le monde 
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					For its second edition in 2014, La Quatrième Image enabled visitors 
                    to meet with more than 40 exhibitors, all independent photographers 
                    coming from 18 different countries. They were professional and 
                    non-professional photographers, all of them rigorously selected 
                    among many applications.
					<?php endif; ?>
				</p>
                <p class="colg">
					<?php if($langue == 'fr'): ?>
					qui nous entoure dans le cadre lumineux de l'Espace des Blancs Manteaux, à Paris, au cœur du quartier du Marais. <br /> 
					<br /> Le Brésil était l'invité d'honneur, avec 10 photographes représentant un panorama de la scène photographique montante du plus grand pays du continent latino-américain. <br /> 
					<br /> 4 jeunes talents ont été invités à exposer, représentant de la nouvelle génération. <br /> 
					<br />  La photographie montante était aussi représentée par les lauréats des 4 Prix du salon La Quatrième Image 2014. Les 4 prix du salon La Quatrième Image, décernés par un jury de professionnels, ont été remis officiellement le 29 octobre, en présence de Mme Karine Taieb, conseillère à la mairie de Paris et M Jean-Luc Monterosso,                             directeur de la MEP:<br /> 
                            le gagnant du 1er prix, Matteusz Sarello a remporté une résidence de 3 mois à la Cité des Arts de Paris, avec une bourse, parrainée par la Mairie de Paris.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					In the bright exhibition space of l’Espace des Blancs Manteaux, 18,000 visitors were thus able to discover the way these photographers look at the world that surrounds us.
					<br/>Brazil being the invited country and the guest of honor, 10 Brazilian photographers offered us a wide angle panorama of the forefront scene of Latin America’s largest country.
					<br/>Moreover, La Quatrième Image chose to highlight four young talents of the rising generation.
					<br/><br/>The rising generation was also represented by the winners of the four awards of the 2014 Quatrième Image Photo Fair.
					<br/>The four winners in 2014 were chosen by a professional jury and officially awarded on 29 October 2014. Both Karine Taieb, Adviser at the City of Paris, and Jean Luc Monterosso, Director of the Paris Maison Européenne de la Photographie, were in attendance. The winner of the first prize, Matteusz Sarello, was awarded a three-month residency at the Paris Cité des Arts, along with a grant, sponsored by the City of Paris.
					<?php endif; ?>
				</p>
				<p class="cold">
					<?php if($langue == 'fr'): ?>
					Un hommage particulier a été rendu à Camille Lepage, à travers l'exposition de certains de ses clichés les plus marquants. Jeune photojournaliste passionnée et engagée, elle a lutté pour témoigner de sa vision humaniste de situations insuffisamment médiatisées; elle a été tuée le 12 mai 2014 en Centrafrique, en exerçant son métier. <br /> 
					<br /> Des ateliers d'éducation à l'image étaient proposés aux enfants de 6 à 13 ans, et des lectures de portfolios gratuites pour des photographes souhaitant bénéficier des conseils d'experts. <br /> 
					<br /> Une tombola organisée sur la durée du salon, a permis au gagnant de repartir avec une œuvre photographique "la gardeuse d'oies" tirage numéroté 2/12, © Raed Bawayah.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					A special tribute was paid to photographer Camille Lepage, and several of her most striking prints were exhibited. She was a young, passionate and committed photojournalist, fighting to testify about media-neglected situations with a humanist vision. She was killed in the Central African Republic on May 12, 2014, while practising her profession.
					<br/><br/>Image educational workshops were offered to youngsters from age six to 13 as well as free portfolio reviews, intended for photographers wishing to meet with experts.
					<br/><br/>A raffle was organized for the duration of the fair. The winner received a black and white print, a limited edition 2/12 of “La gardeuse d’oies” (The geese keeper) © Raed Bawayah. 
					<?php endif; ?>
                </p>
            </div>
			<div id="presentation" data-contenu="residence" style="display: none;">
				<p class="doublecol">
					<?php if($langue == 'fr'): ?>
					Depuis sa création en 2013, le salon photographique La Quatrième Image 
                    se donne comme objectif de rendre la photographie accessible à tous. 
                    Pensé comme nouvel espace de dialogue ouvert sur le monde, 
                    c'est un véritable lieu propice aux échanges interculturels 
                    et à l'émergence de nouveaux talents qui a vu le jour au cœur de Paris.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					Since 2013, the photo fair La Quatrième Image’s objective has
					been to make photography easily accessible to all. Created in
					Paris, it is a new opportunity for cultural exchange and the
					emergence of new talents.
					<?php endif; ?>
				</p>
                <p class="colg">
					<?php if($langue == 'fr'): ?>
					En lien avec cette démarche d'ouverture aux différentes cultures du monde, La Quatrième Image offre, avec le soutien de la Mairie de Paris, une résidence photographique d'une durée de 3 mois, à la Cité des Arts de Paris.  
					Cette résidence permet à un(e) photographe de réaliser le projet photographique de son choix à Paris ou en France. En 2013, la première résidence a été attribuée au photographe brésilien Alexandre Meneghini.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					In accordance with this approach of openness to different cultures of the world, La Quatrième Image offers, with the support of the City of Paris, a photographic residency for a period of three months at the Cité des Arts in Paris.
					<br/><br/>This residency allows a photographer to implement the photographic project of his or her choice in Paris or in France. In 2013, the first residency was given to Alexandre Meneghini, a Brazilian photographer.
					<?php endif; ?>
				</p>
				<p class="cold">
					<?php if($langue == 'fr'): ?>
					En 2014, le premier Prix du salon La Quatrième Image a récompensé le photographe polonais Mateusz Sarello pour son projet Swell; il a ainsi remporté la Résidence de 3 mois, assortie d'une bourse, à la Cité des Arts de Paris. Le fruit de son travail sera à découvrir lors de l'édition 2015 du salon.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					In 2014, the first prize of the Photo Fair La Quatrième Image went to the Polish photographer Mateusz Sarello with the three-month residency at the Cité des Arts, along with a grant. His work will be exhibited during the 2015 edition of the Photo Fair.
					<?php endif; ?>
                </p>
            </div>
			<div id="presentation" data-contenu="qsn" style="display: none;">
				<p class="doublecol">
					<?php if($langue == 'fr'): ?>
					La Quatrième Image est un salon international de photographie organisé 
                    par l'association Images Humaines. L'association Images Humaines 
                    s'adresse à tous ceux qui, à titre privé ou professionnel, 
                    sont concernés par la photographie et toutes les différentes 
                    fonctions de médiation qu'elle assume. 
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					La Quatrième Image is an international photo fair created and organized by the association Images Humaines. 
					The association Images Humaines is intended for all of those who are, whether privately or professionally, involved in photography. 
					<?php endif; ?>
				</p>
                <p class="colg">
					<?php if($langue == 'fr'): ?>
					L'association a pour but de réaliser des initiatives et des évènements afin de valoriser :
					<br /> - la diffusion de l'art photographique, de l'image et de la culture en général.
					<br /> - le développement d'échanges culturels au niveau international
					<br /> - l'éducation du goût pour l'image et la culture
					<br /> - la médiation notamment à travers l'organisation d'ateliers pédagogiques pour transmettre aux enfants les concepts et les outils pour comprendre et analyser la photographie Images Humaines est une association loi 1901, à but non lucratif et d'intérêt général.
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					The association aims to carry out initiatives and events in order to :
					<br />- Promote photography, image and culture in general.
					<br />- Develop cultural exchanges internationally
					<br />- Help acquire a taste for image and culture
					<?php endif; ?>
				</p>
				<p class="cold">
					<?php trad("Images Humaines", "Images Humaines is a cultural, non-profit enterprise intended for the common good.") ?>
					<br />  N. Siret : 792 759 797 000 14 
					<br /> Code APE : 94992
                </p>
            </div>
        </div>
    </section>
	<section class="lesalon actualites content">
		<?php
			$actualites = array();
			// depuis la BDD
			$req = "SELECT * FROM lqi_actualites ORDER BY date desc LIMIT 6";
			$res = requete($req);
			while ($ligne = mysql_fetch_assoc($res)) {
				$actualites[] = $ligne;
			}

		?>
		<div id="content">
			<h2><?php trad("Actualités", "News") ?><span id="title_line"></span></h2>
			<?php
			$cpt = 0;
			foreach ($actualites as $actu) {
				$jour = substr($actu['date'], 8, 2);
				$mois = substr($actu['date'], 5, 2);
				$annee = substr($actu['date'], 0, 4);
				// début bloc
				if ($cpt % 2 == 0) {
					$idx = ($cpt / 2) + 1;
					echo '<div class="actu-bloc" data-idx="' . $idx . '"' . ($idx > 1 ? ' style="display: none;"' : '') . '>'
						.'<div class="colg">';
				} else {
					echo '<div class="cold">';
				}
				// corps actu
				$texte = trad($actu['texte_fr'], $actu['texte_en'], true);
				echo '<a href="actualites.php?annee=' . $annee . '&nolimit#actu-' . $actu['id'] . '">'
					.'<span class="date-actu">' . $jour . '/' . $mois . '</span>'
					.'<h4>' . trad($actu['titre_fr'], $actu['titre_en'], true) . '</h4>'
					.'<p>' . str_replace("\n", "<br/>", substr($texte, 0, 141)) . '...</p>'
					.'<span class="lire-suite">Lire la suite</span>'
					.'</a>';
				// fin bloc
				if ($cpt % 2 != 0) {
					echo '</div>';
				}
				echo '</div>';
				// compteur
				$cpt++;
			}
			// fin bloc si nombre impair
			if ($cpt % 2 != 0) {
				echo '</div>';
			}
			?>
			<br class="clear" />
			<div class="col2">
				<ul class="controle controle-noir">
					<?php if ($cpt > 0): ?>
					<li><a data-idx="1" href="#" class="active"></a></li>
					<?php endif; ?>
					<?php if ($cpt > 2): ?>
					<li><a data-idx="2" href="#"></a></li>
					<?php endif; ?>
					<?php if ($cpt > 4): ?>
					<li><a data-idx="3" href="#"></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="lesalon p-j content">
		<div id="content">
			<div class="colg moitie">
				<a href="participer.php">
					<h2><?php trad("Participer", "Participate") ?><span id="title_line"></span></h1>
					<div class="surimg">
						<span class="sur-copyright">© Stephen Dupont</span>
					</div>
					<img src="../img/salon/participer.jpg" />
					<h4>Découvrez les modalités d'inscription au salon</h4>
					<p>
						Vous souhaitez exposer vos photographies ? Vous souhaitez
						participer au concours Prix Photo ? Vous avez moins de 26
						ans et souhaitez présenter un Jeune Talent ?
					</p>
				</a>
			</div>
			<div class="cold moitie">
				<a href="jury.php">
					<h2><?php trad("Le Jury", "The Jury") ?><span id="title_line"></span></h1>
					<div class="surimg">
						<span class="sur-copyright">© Hiroshi Watanabe</span>
					</div>
					<img src="../img/salon/le-jury.jpg" />
					<h4>Découvrez les membres du jury 2017</h4>
					<p>
						Depuis 2013, des professionnels du monde de l'art, des journalistes,
						des photographes, des éditeurs se sont réunis pour distinguer
						des regards, des démarches singulières.
					</p>
				</a>
			</div>
		</div>
	</section>
	<section class="lesalon citation content bg-red">
		<div id="content">
			<div class="citation-centrale" data-idx="1" data-couleur="red">
				<p>"Dans ce flot constant d'images et de photographes,
				certains courent après le désir de faire passer un
				message particulier, déterminés à placer l'humain
				au cœur de leur mission. Rendre compte de notre
				présence sur terre, comment notre histoire commune
				s'organise, se transforme et se construit, telle est leur
				ambition, parfois au péril de leur vie."</p>
				<span class="citation-signature">
					Raed Bawayah
				</span>
			</div>
			<div class="citation-centrale" data-idx="2" data-couleur="blue" style="display: none;">
				<p>"La photographie est une brève complicité entre la prévoyance et le hasard." </p>
				<span class="citation-signature">
					John Stuart Mill
				</span>
			</div>
			<div class="citation-centrale" data-idx="3" data-couleur="yellow" style="display: none;">
				<p>"Ce que la photo reproduit à l'infini n'a lieu qu'une fois."</p>
				<span class="citation-signature">
					 Roland Barthes
				</span>
			</div>
		    <ul class="controle">
		        <li><a data-idx="1" href="#" class="active"></a></li>
		        <li><a data-idx="2" href="#"></a></li>
		        <li><a data-idx="3" href="#"></a></li>
		    </ul>
		</div>
	</section>
	<section class="lesalon programmes content">
		<div id="content">
			<div class="contenu-programme" data-idx="1">
				<a href="exposants.php">
					<h2 class="hover-red"><?php trad("Les exposants", "Exhibitors") ?><span id="title_line"></span></h2>
				</a>
				<div class="colg">
					<?php if($langue == 'fr'): ?>
					<a href="exposants.php">
						<p>
							La Quatrième Image en 2015 a offert au public l’occasion de rencontrer plus de 44 exposants, 
                            photographes indépendants de 18 nationalités différentes.
						</p></p>
					</a>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<a href="exposants.php">
						<p>
                            La Quatrième Image has become a point of reference in the photographic landscape. 
                            It is a unique opportunity to meet up with professionals and to enhance your network. 
						</p></p>
					</a>
					<?php endif; ?>
					<span class="annee-couleur red">2015</span>
					<ul>
						<li>44 <?php echo trad("photographes", "photographers") ?></li>
						<li>18 <?php echo trad("nationalités", "nationalities") ?></li>
						<li>500 <?php echo trad("œuvres exposées", "works exposed") ?></li>
					</ul>
					<ul class="controle controle-noir">
						<li><a data-idx="1" href="#" class="active"></a></li>
						<li><a data-idx="2" href="#"></a></li>
						<li><a data-idx="3" href="#"></a></li>
					</ul>
				</div>
				<a href="exposants.php" class="lien-img">
					<div class="surimg">
						<span class="sur-copyright">© Stéphanie Buret</span>
					</div>
					<img class="cold" src="../img/salon/les-exposants-edinger.jpg" />
				</a>
			</div>

			<div class="contenu-programme" data-idx="2" style="display:none;">
					<a href="le_prix_photo.php">
						<h2 class="hover-blue"><?php trad("Les prix photo", "Photo prizes") ?><span id="title_line"></span></h2>
					</a>
					<div class="colg">
                    <?php if($langue == 'fr'): ?>
						<a href="le_prix_photo.php">
							<p>
								Le concours est ouvert aux photographes professionnels 
                                ou amateurs, de toutes nationalités, 
                                âgés de 18 ans ou plus.
                                </p><?php endif; ?>
							</a>
                            
                    <?php if($langue == 'en'): ?>
                    <a href="le_prix_photo.php">
							<p>
								The competition is open to all photographers, 
                                whether professional or non-professional, 
                                and to all nationalities. The minimum age required is 18.
                                </p><?php endif; ?>
						</a>
						<span class="annee-couleur blue">2015</span>
						<ul>
							<li><a href="le_prix_photo.php?nom=sarello">Maxim DONDYUK</a></li>
							<li><a href="le_prix_photo.php?nom=strokins">Mathilde GELDHOF</a></li>
							<li><a href="le_prix_photo.php?nom=strano">Michael GOLDGRUBER</a></li>
							<li><a href="le_prix_photo.php?nom=arcenillas">Gillian HYLAND</a></li>
						</ul>
						<ul class="controle controle-noir">
							<li><a data-idx="1" href="#"></a></li>
							<li><a data-idx="2" href="#" class="active"></a></li>
							<li><a data-idx="3" href="#"></a></li>
						</ul>
					</div>
					<a href="le_prix_photo.php" class="lien-img">
						<div class="surimg">
							<span class="sur-copyright">© Michael GOLDGRUBER</span>
						</div>
						<img class="cold" src="../img/salon/prix-photo.jpg" />
					</a>
			</div>
			<div class="contenu-programme" data-idx="3" style="display:none;">
				<a href="les_jeunes_talents.php">
					<h2 class="hover-yellow"><?php trad("Les jeunes talents", "Young talents") ?><span id="title_line"></span></h2>
				</a>
				<div class="colg">
					<?php if($langue == 'fr'): ?>
					<a href="les_jeunes_talents.php">
						<p>
							Le concours JEUNES TALENTS s’adresse aux photographes 
                            âgés de 18 à 25 ans à la date  d’inscription. 
                            Amateurs ou professionnels débutant leur carrière, 
                            étudiants en école d’art ou de   photographie, photographes indépendants.    
						</p>
                        </a>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<a href="les_jeunes_talents.php">
						<p>
							The Young Talents competition is open to all photographers aged 18-25 on the application date. 
                            Submission is open to non-professionals and professionals beginning their career, 
                            students at art or photography schools, and independent photographers.<br/>
						</p>
					</a>
                    <?php endif; ?>
					<span class="annee-couleur yellow">2015</span>
					<ul>
						<li><a href="les_jeunes_talents.php?nom=buser-suero">Fethi SAHRAOUI</a></li>
						<li><a href="les_jeunes_talents.php?nom=chekachkov">Maroesjka LAVIGNE</a></li>
						<li><a href="les_jeunes_talents.php?nom=kohlerova">Miriam VALLE</a></li>
						<li><a href="les_jeunes_talents.php?nom=simion">Wiktoria WOJCIECHOWSKA</a></li>
					</ul>
					<ul class="controle controle-noir">
						<li><a data-idx="1" href="#"></a></li>
						<li><a data-idx="2" href="#"></a></li>
						<li><a data-idx="3" href="#" class="active"></a></li>
					</ul>
				</div>
				<a href="les_jeunes_talents.php" class="lien-img">
					<div class="surimg">
						<span class="sur-copyright">© Maroesjka LAVIGNE</span>
					</div>
					<img class="cold" src="../img/salon/les-jeunes-talents.jpg" />
				</a>
			</div>
		</div>
	</section>
	<section class="lesalon pendant content">
		<div id="content">
			<h2><?php trad("Pendant le salon", "During the photo fair") ?><span id="title_line"></span></h2>
			<div class="colg">
            <a href="lecture_portfolios.php">
				<?php if($langue == 'fr'): ?>
					<h4>Lectures<br/>de portfolio</h4>
					<p> 
Animées par des professionnels du monde de l&rsquo;image, des<strong> lectures de portfolios</strong> sont  gratuites, destinées à tous les photographes, professionnels ou non, qu'ils participent au salon ou non. Deux sessions de portfolios sont organisées durant le salon avec des experts du monde de la photographie, notamment des conservateurs de musées, des curateurs d'expositions, des iconographes, des galeristes…
Chacune des sessions se déroule sur une demi-journée.
Les détails( dates et horaires) seront communiqués plus tard.<br/>
<br/> Des débats et tables rondes sont organisés tout au long de l&rsquo;événement.</p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
			  <h4>Portfolio<br/>reviews</h4>
					<p>
					La Quatrième Image organizes free portfolio reviews, open to all photographers, whether professional or non-professional, whether they participate in the Photo Fair or not.
					<br/>Two sessions of portfolio reviews are held during the Photo Fair, with experts of the photo scene, including museum and exhibition curators, photo editors, art and photo gallery owners.
					<br/>Each session lasts half a day. 
				
					Dates of the 2017 edition and details to be announced later on.<br/>
					<br/> Conferences and round tables are organized throughout the festival.</p>
				<?php endif; ?>
			</div>
			<div class="cold">
				<a href="ateliers_pedagogiques.php">
				<?php if($langue == 'fr'): ?>
					<h4>Les ateliers<br/>pédagogiques</h4>
					<p><strong>La Quatrième Image</strong> propose également des <strong>actions de médiation culturelles</strong>.  Ces actions visent à être des vecteurs de lien social, d&rsquo;éducation et  de créativité, à destination du public et en particulier des enfants.  Elles sont gratuites. Elles se déclinent sous forme d&rsquo;ateliers et de  visites animés par des médiateurs expérimentés.<br/></p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
					<h4>Les ateliers<br/>pédagogiques</h4>
					<p>La Quatrième Image also offers opportunities of<strong>cultural mediation</strong>. These initiatives seek to enrich social ties, education and creativity.  They are aimed at the public and more specifically children. They are free and take the form of workshops and guided visits by experienced mediators.</p>
				<?php endif; ?>
				</a>
			</div>
			<br class="clear" />
		</div>
	</section>
	<!-- Suppression des vidéos Valmic
	<section class="lesalon videos content">
		<div id="content">
			<h2><?php trad("Les vidéos", "Videos") ?><span id="title_line"></span></h2>
			
			<div id="container-videos">
				<div id="videos-gauche">
					<img src="../img/gauche_noir.png" class="defiler-gauche" />
				</div>
				<div class="video-bloc" data-idx="1">
					<a href="videos.php?video=1" class="lien-vid">
						<div class="survid"></div>
						<img src="../img/salon/felicia_simion.jpg" class="video-miniature" />
						<h4>Interview</h4>
						<p>
							Rencontre avec Felicia Simion qui présente sa démarche artistique.
						</p>
					</a>
				</div>
				<div class="video-bloc central" data-idx="2">
					<a href="videos.php?video=2" class="lien-vid">
						<div class="survid"></div>
						<img src="../img/salon/igor_chekachkov.jpg" class="video-miniature" />
						<h4>Interview</h4>
						<p>
							Rencontre avec Igor Chekachkov qui présente sa démarche artistique.
						</p>
					</a>
				</div>
				<!--<div class="video-bloc" data-idx="3">
					<a href="videos.php?video=3">
						<img src="../img/salon/video-03.jpg" class="video-miniature" />
						<h4>Le mot du directeur</h4>
						<p>
							Raed Bawayah présente la deuxième édition du salon La Quatrième Image.
						</p>
					</a>
				</div>
				<div class="video-bloc" data-idx="4" style="display: none;">
					<a href="videos.php?video=4">
						<img src="../img/salon/video-01.jpg" class="video-miniature" />
						<h4>Interview</h4>
						<p>
							Rencontre avec Mateusz Sarello, Prix Photo 2014.
						</p>
					</a>
				</div>
				<div class="video-bloc" data-idx="5" style="display: none;">
					<a href="videos.php?video=5">
						<img src="../img/salon/video-02.jpg" class="video-miniature" />
						<h4>Portrait</h4>
						<p>
							Rencontre avec Felicia Simon qui présente sa démarche.
						</p>
					</a>
				</div>
				<div class="video-bloc" data-idx="6" style="display: none;">
					<a href="videos.php?video=6">
						<img src="../img/salon/video-03.jpg" class="video-miniature" />
						<h4>Le mot du directeur</h4>
						<p>
							Raed Bawayah présente la deuxième édition du salon La Quatrième Image.
						</p>
					</a>
				</div>
				<div id="videos-droite">
					<img src="../img/droite_noir.png" class="defiler-droite" />
				</div>
				<br class="clear" />
			</div>
			<br class="clear" />
		</div>
	</section>
	<!--<section class="lesalon galerie content">
		<div id="content">
			<h2><?php trad("La galerie", "The gallery") ?><span id="title_line"></span></h2>
		</div>
	</section>-->
	<section class="lesalon partenaires content">
		<div id="content">
			<h2><?php trad("Nos partenaires", "Our partners") ?><span id="title_line"></span></h2>
			<div class="logos-partenaires">
				<a href="http://www.culturecommunication.gouv.fr" target="_blank">
					<div id="logo-ministere"></div>
				</a>
				<a href="http://www.paris.fr" target="_blank">
					<div id="logo-mairie"></div>
				</a>
				<a href="http://www.mairie04.paris.fr/mairie04" target="_blank">
					<div id="logo-mairie-4"></div>
				</a>
				<a href="http://www.mep-fr.org" target="_blank">
					<div id="logo-maison-europeenne"></div>
				</a>
				<a href="http://www.polkamagazine.com" target="_blank">
					<div id="logo-polka"></div>
				</a>
				
				<a href="http://www.institutpolonais.fr" target="_blank">
					<div id="logo-institut-polonais"></div>
				</a>
			</div>
			<div class="logos-partenaires">
				<a href="http://fundacjarydet.pl/?lang=en" target="_blank">
					<div id="logo-zrf"></div>
				</a>
				<a href="http://www.les-treilles.com/en" target="_blank">
					<div id="logo-treilles"></div>
				</a>
				<a href="http://www.centrecultureldubresil.fr/site" target="_blank">
					<div id="logo-ccb"></div>
				</a>
                <a href="https://maison-heinrich-heine.org" target="_blank">
					<div id="logo-maison-heine"></div>
				</a>
                <a href="http://www.picto.fr" target="_blank">
					<div id="logo-picto"></div>
				</a>
			</div>
			<div class="logos-partenaires">
                <a href="https://eu.impossible-project.com" target="_blank">
					<div id="logo-impossible-project"></div>
				</a>
                <a href="http://www.artistikrezo.com" target="_blank">
					<div id="logo-artistik-rezo"></div>
				</a>
			</div>
		</div>
	</section>
	<section class="lesalon espace content">
		<div id="content">
			<div class="contenu-programme">
				<h2>L'espace des<br/>blancs-manteaux<span id="title_line"></span></h2>
				<div class="colg">
					<?php if($langue == 'fr'): ?>
					<p>
						Lieu magique d'une surface de 1 000 m<sup>2</sup> en plein cœur du Marais, 
                        cet espace accueille de nombreux évènements. Il offre des conditions optimales 
                        pour mettre en valeur le travail des photographes – grand espace, haut de plafond, 
                        luminosité. Les salles en mezzanine accueillent les ateliers pour les enfants.
					</p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<p>
						La Quatrième Image is held at the Espace des Blancs Manteaux
						located in the heart of Paris, in the Marais area, at 48,
						rue Vieille du Temple, 75004 Paris. This very large space of
						1,000 sq ft hosts numerous events each year. The conditions
						are optimal: large space, high ceilings, brightness – photo
						work can be seen to full advantage. Educational workshops
						for youngsters are on the first floor.
					</p>
					<?php endif; ?>
					<p class="adresse">
						48 rue Vieille du Temple<br/>
						75004 Paris
					</p>
					<p>
						Horaires<br/>
						10h - 20h
					</p>
					<ul class="controle controle-noir">
						<li><a data-idx="0" href="#" class="active"></a></li>
						<li><a data-idx="1" href="#"></a></li>
						<li><a data-idx="2" href="#"></a></li>
					</ul>
				</div>
				<img class="cold" src="../img/salon/espace-blancs-manteaux.jpg" data-idx="0" />
				<img class="cold" src="../img/salon/espace-blancs-manteaux-1.jpg" data-idx="1" style="display: none;" />
				<img class="cold" src="../img/salon/espace-blancs-manteaux-2.jpg" data-idx="2" style="display: none;" />
			</div>
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
