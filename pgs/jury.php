<?php include "entete.php" ?>
<body>
	<?php
		$page = "jury";
		include "menu.php"
	?>
    <section class="jury_intro intro content">
    	<div id="content">
    		<h1><?php trad("Le jury", "Jury"); ?><span id="title_line"></span></h1>
            <ul id="nav_concour">
				<li><a href="#" data-annee="2015" class="active">2015</a></li>
            	<li><a href="#" data-annee="2014">2014</a></li>
                <li><a href="#" data-annee="2013">2013</a></li>
            </ul>
			<div id="presentation" data-annee="2015" style="display: none;">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Les candidatures sont évaluées par un jury international d'experts : directeur de rédaction, photographes, artistes, critiques… 

				</p>
				<p>
                	Les candidatures sont évaluées selon des critères techniques, esthétiques, et pour l'originalité de leur point de vue.  
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Entries are judged by an international jury of experts: Managing Editor, photographers, artists, critics... 

				</p>
				<p>
                	Applications are evaluated based on technical, aesthetic, and for the originality of their conception.  
                </p>
				<?php endif; ?>
            </div>
			<div id="presentation" data-annee="2014">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Les candidatures sont évaluées par un jury international d'experts : directeur de rédaction, photographes, artistes, critiques…
				</p>
				<p>
                	Les candidatures sont évaluées selon des critères techniques, esthétiques, et pour l'originalité de leur point de vue.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Entries are judged by an international jury of experts: Managing Editor, photographers, artists, critics... 
				</p>
				<p>
                	Applications are evaluated based on technical, aesthetic, and for the originality of their conception.
                </p>
				<?php endif; ?>
            </div>
			<div id="presentation" data-annee="2013" style="display: none;">
				<?php if($langue == 'fr'): ?>
                <p class="colspe">
                	Les candidatures sont évaluées par un jury international d'experts : directeur de rédaction, photographes, artistes, critiques…
				</p>
				<p>
                	Les candidatures sont évaluées selon des critères techniques, esthétiques, et pour l'originalité de leur point de vue.
                </p>
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
                <p class="colspe">
                	Entries are judged by an international jury of experts: Managing Editor, photographers, artists, critics…
				</p>
				<p>
                	Applications are evaluated based on technical, aesthetic, and for the originality of their conception.
                </p>
				<?php endif; ?>
            </div>
        </div>
    </section>
	<section class="jury equipe content">
    	<div id="content" data-annee="2015">
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			©
            		</div>
                	<img src="../img/jury/jury-2015-06.jpg" />
					<div class="fond-rouge"></div>
                </a>
                <div class="text">
                	<h4>Anne CARTIER-BRESSON</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Conservatrice générale du patrimoine, est directrice de l'Atelier de Restauration et de Conservation des Photographies de la Ville de Paris (ARCP) depuis sa création en 1983</h5>
                    <p>
						Docteure en histoire de l'art (option Art contemporain, recherches historiques et techniques de l'Université de Paris I), elle est également diplômée de la Maîtrise de Sciences 
                        et techniques en Conservation-Restauration des Biens Culturels et licenciée en histoire et en archéologie de l'Université de Paris I.<br/>
                     <br/>Elle est responsable du département Photographie du département des restaurateurs de l'Institut National du Patrimoine (Inp), et enseigne auprès de divers organismes de 
                         formation en France ou à l'étranger. <br/>
                     <br/>Elle a publié de nombreux articles et contribué à divers ouvrages sur l'histoire, les techniques et les méthodes de conservation des photographies.<br/>
                     <br/>Depuis 1994, elle a assuré le commissariat d'expositions sur les collections photographiques parisiennes ou étrangères.<br/>
                     <br/>Elle est administratrice de la Fondation Henri Cartier-Bresson, et de la Société française de Photographie. 
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Heritage general curator, the director of the ARCP (City of Paris Photographic Conservation and Restoration Workshop) since its creation in 1983</h5>
                    <p>
						Ph.D in Art History at the Université Paris 1 (specialized in contemporary arts, historical research and techniques), she graduated from the Master's degree in Sciences and techniques in conservation-restoration of cultural property and from the undergraduate program of History and archaeology                        at the same university.<br/>
                     <br/She is head of the Photographic section of the restoration department of the National Heritage Institute (Institut National du Patrimoine). She is a teacher within multiple training organisations in France or abroad.<br/>
                     <br/>She published numerous articles and contributed in various works about History, photographic techniques and conservation methods.<br/>
                     <br/>Since 1994, she carries out exhibition curating functions in Parisian or international photographic collections.<br/>
                     <br/>She is administrator of the Henri Cartier-Bresson Foundation, and of the French Society of Photography. 
                    </p>
					<?php endif; ?>
                    
                    <span class="deco"></span>
                </div>
                </div>
            <div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014-01.jpg" />
					<div class="fond-rouge"></div>
                </a>
                <div class="text">
                	<h4>Dimitri Beck</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Rédacteur en chef de Polka Magazine</h5>
                    <p>
						Rédacteur en chef de Polka magazine depuis 2008. En tant que membre fondateur de Polka (magazine, galerie de photos, iPad et web) au côté de la famille Genestar, il participe également à son développement.<br/>
                        <br/> Il participe régulièrement à des jurys photos et donne des cours et des conférences sur le photojournalisme. De septembre 2004 à fin 2006, il a dirigé en Afghanistan l'agence Aina Photo et Les Nouvelles de Kaboul, un magazine illustré                                                  d'actualités en français-anglais, réalisé avec des collaborateurs afghans et internationaux. <br/>
                        <br/>En 2004, Dimitri était rédacteur en chef de l'agence photo de Reza, Webistan. De 1998 à 2004, il a notamment réalisé des reportages en Asie centrale et au Caucase en tant que journaliste indépendant. Ses reportages ont été publiés                                                  dans la presse française et internationale. 
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Dimitri Beck is the editor-in-chief Polka</h5>
                    <p>
						Dimitri Beck is the editor-in-chief of the Paris based photojournalism magazine, Polka. Dimitri has been part of the executive management of Polka since the beginning of the company in 2008, contributing to the development of the magazine, gallery and website. During his spare time Dimitri                        gives lectures on photojournalism at conferences and educational institutes.<br/>
                        <br/> Prior to working at Polka, Dimitri was the Director and the editor of the Aina Photo Agency based in the Afghan capital Kabul from September 2004 to December 2006, where he was also the Editor-in-chief for the Anglo-French feature magazine Les Nouvelles de Kaboul - New Afghanistan. His                          thirst to travel to Afghanistan was inspired when he was working as editor-in-chief of Reza Deghati's photo agency "Webistan". <br/>
                        <br/>He started out as an independent journalist filing reports to French and international media outlets from trips he did in the Caucasus area and across Central Asia in particular 
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
            <div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			©
            		</div>
                	<img src="../img/jury/jury-2015-05.jpg" />
					<div class="fond-rouge"></div>
                </a>
                <div class="text">
                	<h4>Claire Berger-Vachon</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Responsable des relations internationales à la Direction des affaires culturelles de la Ville de Paris</h5>
                    <p>
						Claire Berger-Vachon est responsable des relations internationales à la Direction des affaires culturelles de la Ville de Paris depuis 2011.  Elle a été chargée de différentes missions au sein de la Ville de Paris dans le domaine des arts de la scène et des arts visuels, et a occupé                                   précédemment le poste d'administrateur de l'Opéra de Lyon et de directrice du Palais des Congrès de Lyon. <br/>  
                       <br/>Détachée auprès du Ministère des Affaires étrangères de 1999 à 2003, elle a successivement assuré la direction du Centre culturel français de Séoul ainsi que la direction de l'Alliance Française de Hong Kong, où, en liaison avec l'Institut Français elle a organisé différentes expositions                                             et événements, tout en assurant la promotion et le développement de la langue française. <br/>
                    <br/>Elle a récemment signé l'exposition de vidéos et photographies contemporaines Paris Champ et Hors Champ. 
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Claire Berger-Vachon is head of the international relations division of the Paris Town Hall at the Cultural Services</h5>
                    <p>
						She has been in charge of multiple cultural and artistic missions for the City of Paris, specially in performing and visual arts. She is a former supervisor of the Opera de Lyon and was also the head of the Palais des Congrès de Lyon. <br/>  
                       <br/>Serving under the French Ministry of Foreign Affairs from 1999 until 2003, she worked successively as the director of the French cultural centre of Seoul, and head of the Hong Kong Alliance Française where she promoted French culture and language through exhibitions and events in cooperation with the Institut Français. <br/>
                    <br/>She recently participated to the exhibition "Paris Champ et Hors Champ", featuring both videos and contemporary photographs. 
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			©
            		</div>
                	<img src="../img/jury/jury-2015-02.jpg" />
                </a>
                <div class="text">
                	<h4>Jean-Yves LANGLAIS</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Directeur de la Cité Internationale des Arts de Paris</h5>
                    <p>
					Jean-Yves LANGLAIS est né à Rennes en 1950. Titulaire d'un DEA en Histoire, l'essentiel de sa carrière, de 1980 à 2000, s'est déroulée dans le champ de la danse contemporaine, notamment aux côtés de Jean-Claude Gallotta où il a été co-directeur du Centre Chorégraphique National de Grenoble et                                                             d'Anne Teresa De Keersmaeker alors qu'il était directeur de la danse au Théâtre Royal de la Monnaie à Bruxelles. <br/>
                   <br/>Pendant cette période, il a signé une vingtaine de productions en tant que costumier et décorateur. Depuis 2000, il s'est engagé dans la restructuration d'institutions culturelles en couplant rééquilibre financier et nouveau projet notamment en assurant la direction générale de Paris Ateliers                     dans le champ des métiers d'art puis de la Cité internationale des arts à Paris dans le champ des résidences d'artistes au sein des politiques culturelles françaises et étrangères.

                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>General director of the Cité Internationale des Arts of Paris</h5>
                    <p>
					Jean-Yves LANGLAIS was born in Rennes in 1950. He graduated from a one-year curriculum post graduation program in History. He carried out most of his career, between 1980 and 2000, in the contemporary dance where he collaborated with Jean-Claude Gallotta as co-director of the Centre Chorégraphique National de Grenoble et d'Anne Teresa De Keersmaeker as he was Dance director of the Théâtre Royal de la Monnaie in Bruxels. <br/>
                    <br/>During this period, he co-signed about twenty productions as costume-maker and decorator. Since 2000, he got involved in the restructuration of cultural institutions combining financial rebalancing and project innovation. We can highlight his achievements as general director of "Paris Atelier" in the field of art professions, or in the Cité Internationale des arts of Paris in the artistic residencies-related issues in the context of French or foreign cultural policies

                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			©
            		</div>
                	<img src="../img/jury/jury-2015-03.jpg" />
                </a>
                <div class="text">
                	<h4>Jyrki Parantainen</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Artiste, photographe et professeur d'art photographique à Helsinki</h5>
                    <p>				
                        Jyrki Parantainen est un artiste finlandais né en 1962 qui appartient à l'École d'Helsinki dont il est l'une des forces motrices depuis sa création. Diplômé en 1992, il travaille à Helsinki en tant que Professeur d'Art Photographique à                                                                          l'Aalto University School of Arts, Design and Architecture.<br/>
                        <br/> Son procédé créatif a évolué au cours de sa carrière qui recouvre une vingtaine d'années. Sa série Maa (1989 -1991) est constituée de photographies prises exclusivement de nuit qui reflètent une inspiration proche du Land Art ou                        Earth Art du début des années soixante en Amérique du Nord et en Europe. <br/>
                        <br/> Il revendique de vouloir combiner son propre medium avec d'autres formes d'art. Les thèmes récurrents de ses photographies sont la vie et la mort, la chair et le sang et l'amour et la haine. A partir de paysages finlandais, il                             intègre différents medias organiques qui créent un effet de recyclage écologique.
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Artist, photographer, professor of photographic art in Helsinki </h5>
                    <p>				
                        Jyrki Parantainen is a Finnish artist born in 1962 who belongs to Helsinki Schooland is one of its driving forces since its creation. Graduated in 1992, he is working in Helsinki as a Professor of Photographic Art at the Aalto University School of Arts, Design and Architecture.<br/>
                        <br/> His creative process has changed throughout his now over twenty-year long career. His Maa Series (1989-1991) is made of photographies taken exclusively during the nighttime, which reflect inspiration of Land Art or Earth Art beginning in the 1960s in North America and Europe.<br/>
                        <br/> He claims the combination of his own medium with other forms of art. The recurrent themes of his photographies are life and death, flesh and blood, love and hate. From finnish landscapes, he integrates various organic media which create an ecological effect of recycling.
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	
            
            </div>
        </div>
    	<div id="content" data-annee="2014" style="display: none;">
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014-01.jpg" />
					<div class="fond-rouge"></div>
                </a>
                <div class="text">
                	<h4>Dimitri Beck</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Rédacteur en chef de Polka Magazine</h5>
                    <p>
						Rédacteur en chef de Polka magazine depuis 2008. En tant que membre fondateur de Polka (magazine, galerie de photos, iPad et web) au côté de la famille Genestar, il participe également à son développement.  <br/>
                         <br/>Il participe régulièrement à des jurys photos et donne des cours et des conférences sur le photojournalisme. De septembre 2004 à fin 2006, il a dirigé en Afghanistan l’agence Aina Photo et Les Nouvelles de Kaboul, un magazine illustré d’actualités en français-anglais, réalisé avec des collaborateurs afghans et internationaux.  <br/>
                          <br/>En 2004, Dimitri était rédacteur en chef de l’agence photo de Reza, Webistan. De 1998 à 2004, il a notamment réalisé des reportages en Asie centrale et au Caucase en tant que journaliste indépendant. Ses reportages ont été publiés dans la presse française et internationale. 
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Dimitri Beck is the editor-in-chief Polka</h5>
                    <p>
						Dimitri Beck is the editor-in-chief of the Paris based photojournalism magazine, Polka. Dimitri has been part of the executive management of Polka since the beginning of the company in 2008, contributing to the development of the magazine, gallery and website. During his spare time Dimitri                        gives lectures on photojournalism at conferences and educational institutes.<br/>
                        <br/> Prior to working at Polka, Dimitri was the Director and the editor of the Aina Photo Agency based in the Afghan capital Kabul from September 2004 to December 2006, where he was also the Editor-in-chief for the Anglo-French feature magazine Les Nouvelles de Kaboul - New Afghanistan. His                          thirst to travel to Afghanistan was inspired when he was working as editor-in-chief of Reza Deghati's photo agency "Webistan". <br/>
                        <br/>He started out as an independent journalist filing reports to French and international media outlets from trips he did in the Caucasus area and across Central Asia in particular 
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			©
            		</div>
                	<img src="../img/jury/jury-2014-02.jpg" />
                </a>
                <div class="text">
                	<h4>Evelien Kunst</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Directrice de l'agence NOOR</h5>
                    <p>
						Evelien Kunst est titulaire d’un Master en communication de l’université d’Amsterdam, ville où elle est aujourd’hui établie.  <br/>
                         <br/>Elle dirige l’agence et fondation NOOR, qui regroupe des photographes de haut niveau. Kunst jouit d’une expérience internationale de plus de 15 ans dans le secteur de la photo, dans des domaines aussi variés que la publicité, la communication, l’éducation et la mise en relation de photographes. De 1999 à 2008, elle a travaillé chez World Press Photo, où elle était chargée d’organiser la formation des photographes à travers le monde.  <br/>
                          <br/>De 2008 à 2012, elle a été chargée de projet pour Canon à la Red Dot Agency, où elle s’occupait du réseau de professionnels (Canon Professionnal Network).
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Directrice de l'agence NOOR</h5>
                    <p>
						Evelien Kunst est titulaire d’un Master en communication de l’université d’Amsterdam, ville où elle est aujourd’hui établie.  <br/>
                         <br/>Elle dirige l’agence et fondation NOOR, qui regroupe des photographes de haut niveau. Kunst jouit d’une expérience internationale de plus de 15 ans dans le secteur de la photo, dans des domaines aussi variés que la publicité, la communication, l’éducation et la mise en relation de photographes. De 1999 à 2008, elle a travaillé chez World Press Photo, où elle était chargée d’organiser la formation des photographes à travers le monde.  <br/>
                          <br/>De 2008 à 2012, elle a été chargée de projet pour Canon à la Red Dot Agency, où elle s’occupait du réseau de professionnels (Canon Professionnal Network).
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014-03.jpg" />
                </a>
                <div class="text">
                	<h4>Rena Effendi</h4>
					<?php if($langue == 'fr'): ?>
					<h5>Photographe</h5>
                    <p>
						Rena Effendi est née en Azerbaïdjan et a grandi dans l’URSS des années 90. Elle a publié deux ouvrages de photographies : « Pipe Dreams: A Chronicle of Lives Along the Pipeline », résultat d’un voyage de 6 ans, entre 2002 et 2008, le long des 1700 kilomètres d’oléoduc à travers l’Azerbaïdjan, la Géorgie et la Turquie ; et « Liquid Land » en 2013, récit personnel de Rena, mettant en relation les photos de papillons azerbaïdjanais rares prises par son son père et ses propres photos de paysages et d’environnement dévastés.  <br/>
                         <br/> Les travaux de Rena Effendi ont été internationalement et ont reçu de nombreux prix, parmi lesquels deux prix World Press Photo en 2014.

                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Photographe</h5>
                    <p>
						Rena Effendi est née en Azerbaïdjan et a grandi dans l’URSS des années 90. Elle a publié deux ouvrages de photographies : « Pipe Dreams: A Chronicle of Lives Along the Pipeline », résultat d’un voyage de 6 ans, entre 2002 et 2008, le long des 1700 kilomètres d’oléoduc à travers l’Azerbaïdjan, la Géorgie et la Turquie ; et « Liquid Land » en 2013, récit personnel de Rena, mettant en relation les photos de papillons azerbaïdjanais rares prises par son son père et ses propres photos de paysages et d’environnement dévastés.  <br/>
                         <br/> Les travaux de Rena Effendi ont été internationalement et ont reçu de nombreux prix, parmi lesquels deux prix World Press Photo en 2014.

                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014-04.jpg" />
                </a>
                <div class="text">
                	<h4>Nathalie Gallon</h4>
					<?php if($langue == 'fr'): ?>
					<h5> Nathalie Gallon- Commissaire indépendante d'exposition et conseillère d'acquisitions. <br/> Directrice artistique du Prix Carmignac</h5>
                    <p>Historienne de l'art de formation, Nathalie Gallon a suivi un cursus en esthétique. <br/>
                    <br/> Après avoir travaillé dans des galeries d'art contemporain et de photographies, Nathalie Gallon est directrice du Prix Carmignac depuis sa création en 2009. Elle a dirigé différentes actions menées par la fondation : le mécénat  au Musée d'art moderne de la ville de Paris pour l'exposition                            Basquiat, prêts d'œuvres, achat d'œuvres… Responsable éditoriale et co-éditeur des publications pour le Prix Carmignac, elle a travaillé avec les Editions Actes Sud et aujourd'hui les éditions Kehrer Verlag pour la parution des photographies des lauréats. 
                    <br/> Elle a participé aux lectures de portfolio des Rencontres d'Arles et a été membre d'un jury pour une bourse, aide à la première publication en Turquie en 2013. <br/>
                    <br/> Nathalie Gallon est l'une des 6 commissaires de l'exposition «6 personnalités en quête d'intime» dans le cadre du Mois de la photo en novembre 2014 à la galerie Françoise Paviot, à Paris.
                    </p>
					<?php endif; ?>
					<?php if($langue == 'en'): ?>
					<h5>Directrice du Prix Carmignac Gestion du photojournalisme</h5>
                    <p>
						Rena Effendi est née en Azerbaïdjan et a grandi dans l’URSS des années 90. Elle a publié deux ouvrages de photographies : « Pipe Dreams: A Chronicle of Lives Along the Pipeline », résultat d’un voyage de 6 ans, entre 2002 et 2008, le long des 1700 kilomètres d’oléoduc à travers l’Azerbaïdjan, la Géorgie et la Turquie ; et « Liquid Land » en 2013, récit personnel de Rena, mettant en relation les photos de papillons azerbaïdjanais rares prises par son son père et ses propres photos de paysages et d’environnement dévastés. Les travaux de Rena Effendi ont été internationalement et ont reçu de nombreux prix, parmi lesquels deux prix World Press Photo en 2014. 
                    </p>
					<?php endif; ?>
                    <span class="deco"></span>
                </div>
            </div>
        </div>
    	<div id="content" data-annee="2013" style="display: none;">
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014.jpg" />
					<div class="fond-rouge"></div>
                </a>
                <div class="text">
                	<h4>Sophie Bernard</h4>
					<h5>Rédactirice en chef Images Magazine</h5>
                    <p>
					
                    </p>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014-04.jpg" />
                </a>
                <div class="text">
                	<h4>Nathalie Gallon</h4>
					<h5>Nathalie Gallon- Commissaire indépendante d'exposition et conseillère d'acquisitions. <br/> Directrice artistique du Prix Carmignac</h5>
                   <p>Historienne de l'art de formation, Nathalie Gallon a suivi un cursus en esthétique. <br/>
                    <br/> Après avoir travaillé dans des galeries d'art contemporain et de photographies, Nathalie Gallon est directrice du Prix Carmignac depuis sa création en 2009. Elle a dirigé différentes actions menées par la fondation : le mécénat  au Musée d'art moderne de la ville de Paris pour l'exposition                            Basquiat, prêts d'œuvres, achat d'œuvres… Responsable éditoriale et co-éditeur des publications pour le Prix Carmignac, elle a travaillé avec les Editions Actes Sud et aujourd'hui les éditions Kehrer Verlag pour la parution des photographies des lauréats. 
                    <br/> Elle a participé aux lectures de portfolio des Rencontres d'Arles et a été membre d'un jury pour une bourse, aide à la première publication en Turquie en 2013. <br/>
                    <br/> Nathalie Gallon est l'une des 6 commissaires de l'exposition «6 personnalités en quête d'intime» dans le cadre du Mois de la photo en novembre 2014 à la galerie Françoise Paviot, à Paris.
                    </p>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014.jpg" />
                </a>
                <div class="text">
                	<h4>Jean-François Leroy</h4>
					<h5>Photographe journalistique, directeur et fondateur du festival Visa pour l'image</h5>
                    <p>
						
                    </p>
                    <span class="deco"></span>
                </div>
            </div>
        	<div class="box">
            	<a href="#" class="profil_jury">
            		<div class="texte-badge">
            			© 
            		</div>
                	<img src="../img/jury/jury-2014.jpg" />
                </a>
                <div class="text">
                	<h4>Alice Morgaine</h4>
					<h5>Conseillère art et design, direction artistique d'Hermès, Luxembourg</h5>
                    <p>
						
                    </p>
                    <span class="deco"></span>
                </div>
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
