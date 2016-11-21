<?php
	include "entete.php";
	include "../lib/email.php";
?>
<body>
	<?php
		$page = "participer";
		include "menu.php";
		// génération d'un identifiant unique de commande, pour lier au paiement a priori
		$idCommande = sha1(microtime() . rand());
	?>
    <section class="participer-bandeau">
		<img src="../img/img_participer.jpg" />
    </section>
    <section class="intro_participer content">
		<div id="content">
            <div class="coll vide">
				<h1><?php trad("Participer", "Participate") ?><span id="title_line"></span></h1>
            </div>
            <div class="coll text">
                <p>
				<?php if($langue == 'fr'): ?>
                    

Participer à La Quatrième Image, c’est l’occasion unique d’exposer dans un festival international au cœur de Paris qui favorise les échanges interculturels autour de la photographie. Le public d’amateurs avertis, de galeristes et de professionnels de la presse et de la photographie pourra apprécier votre travail dans une ambiance conviviale, entre invités prestigieux et révélations artistiques.<br/><br/>

Plusieurs possibilités s’offrent à vous pour exposer pendant le festival, en déposant votre candidature pour un ou plusieurs des concours : les Prix Photo et/ou les Jeunes Talents. Vous trouverez ci-dessous en détail, les conditions spécifiques à chaque concours.         
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
					
					

Participating in La Quatrième Image is a unique opportunity for exhibiting at an international Festival that promotes cultural exchange in the field of photography in the centre of Paris. In a relaxed atmosphere, a public of art lovers, gallery owners, the media and photography professionals will have a chance to appreciate your work along with that of other distinguished exhibitors guests and artistic discoveries.<br/>
<br/>

Submissions can take place by competing in two categories: Photo Award and/or Young Talents. You can submit your work to more than one category. More detailed information about each category follows below.<br/>
<?php endif; ?>
                </p>
            </div>
        </div>
    </section>
    <section class="concours content">
    	<div id="content">
        	<div class="categories exposants">
            	<h2><?php trad("Le jury", "Jury") ?><span id="title_line_h3" class="bg-red"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
               La réunion du jury aura lieu à Paris à la Cité des arts de Paris en février 2017 et sera présidée par Jean-François Leroy, le directeur du festival photo Visa pour l’Image. </br>
               </br><a href="https://www.laquatriemeimage.com/pgs/jury.php"><strong>En savoir plus sur le jury</strong></a> 
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
				The Jury will meet on Februrary in Paris at the Cité des Arts. Jean-François Leroy, Director of the Festival Visa pour l&rsquo;Image, is the  President of the Jury.</br>
               </br><a href="https://www.laquatriemeimage.com/pgs/jury.php"><strong>More information about the jury</strong></a> 
				<?php endif; ?>
                </p>
				
            </div>
            <div class="categories prix_photo">
            	<h2><?php trad("Le Prix Photo", "Photo Prizes") ?><span id="title_line_h3" class="bg-blue"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
				Dès sa première édition, La Quatrième Image a récompensé chaque année  le travail de quatre lauréats. Ce prix est décerné par un jury de  professionnels du monde de la Photographie. <br>
Les lauréats seront invités à présenter leur travail pendant le Festival  La Quatrième Image à Paris, en avril 2017 et se verront remettre leur  prix lors d&rsquo;une soirée officielle. C&rsquo;est une occasion unique de  rencontrer les visiteurs amateurs, les collectionneurs et les  professionnels de la photographie.<br />
                 <br /><strong>Conditions</strong>  <br />
Le concours Prix Photo s’adresse à des photographes :<br />
– professionnels ou amateurs, débutant leur carrière, étudiants en école d’art ou de photographie, photographes indépendants,<br />
– de toutes nationalités,<br />
– âgés de plus de 18 ans.<br />

Le thème est libre. Les photographies présentées peuvent être en noir et blanc ou en couleur. Elles doivent appartenir en totalité ou en partie à une série d’œuvres photographique.<br />

<br />
<strong>Les inscriptions sont ouvertes du 22 novembre 2016 au 30 janvier 2017. </strong>  <br />

<br /><strong>Sélection</strong>  <br />
Les lauréats du Prix Photo 2017 seront sélectionnés par un jury de professionnels du monde de l’image. Le jury se réunira le 2 février 2017 et les candidats sélectionnés seront informés individuellement au plus tard le 10 février 2017. Ils devront fournir des fichiers haute définition de leurs photographies avant le 15<sup></sup> février 2017 afin de figurer dans le catalogue. Les candidats ne fournissant pas les informations demandées ne seront pas retenus. <br />

<br/><strong>Les prix</strong>  <br />
1<sup>er</sup> prix : une résidence d’artiste de 3 mois avec une bourse de 1 300 euros par mois, à la Cité Internationale des Arts de Paris.<br/>
2<sup>e</sup> prix: 3 000 euros<br/>
3<sup>e</sup> prix: 1 000 euros<br/>
4<sup>e</sup> prix: 500 euros<br/>

<br />Les 4 lauréats seront également invités à présenter leurs travaux pendant les 16 jours du Festival La Quatrième Image à Paris. Leur voyage sur Paris (billet A/R), leur hébergement durant la première semaine ainsi que la production de leur exposition seront prises en charge par l’organisation de l’événement.
Les lauréats figureront dans une section dédiée du catalogue officiel du Festival, et une communication spécifique sera organisée autour des Prix.<br />

<br /><strong>Modalités de participation</strong>  <br />
Le dépôt des dossiers se fait en ligne uniquement.<br />

<br /><strong>Chaque candidat doit fournir :</strong>  <br />
– 5 à 10 clichés pris ou publiés au cours des 4 dernières années (2013),<br />
– une courte biographie,<br />
– un texte court de présentation du projet.<br />

Les images digitales doivent être fournies en format JPG uniquement, 72 dpi, la largeur des photos ne doit pas excéder 1024 pixels en longueur. La taille du fichier image doit être inférieur à 1MB.<br />

<br />Frais d’inscription : 35 euros.<br />

<br />
<i>NB : Vous avez la possibilité de candidater pour une ou plusieurs catégories : Prix Photo 2017, Jeunes Talents 2017. Chaque inscription doit cependant être faite indépendamment l’une de l’autre. </i>            
  <?php endif; ?>
                  <?php if($langue == 'en'): ?>
                  
                  

Since its 1<sup>st</sup> edition, each year La Quatrième Image has rewarded four photographers for their special contribution. Candidates’ works will be submitted to a professional Jury.

The 4 winners of this competition are invited to attend the festival and have their work exhibited during the event in April 2017.

The prizes will be awarded, in the presence of officials, photo professionals and media.<br />

<br /><strong>Conditions for entry</strong>  <br />

The competition is open to:<br />
– All photographers, whether professional or non-professional,<br />
– All nationalities.<br />
– The minimum age required is 18.<br />

The candidates will submit a selection of works of their choice. Photographs can be black and white or colour. The candidates must showcase at least one series (partial or total) within their photographic submission.<br />

<br />
<strong>Call for entries open from 22 November 2016 until 30 January 2017.</strong>  <br />

<br /><strong>Selection</strong>  <br />

The works will be reviewed and winners nominated by an independent professional Jury.



The jury will meet the 2<sup>nd</sup> of Februrary. The four selected candidates will be informed individually the 10 februrary 2016. They will submit high-definition photos of their works before 15 February 2017.

Candidates who do not provide the required information will be disqualified.<br />

<br /><strong>The Award</strong>  <br />

First Prize: A three-month photo residency at the Cité Internationale des Arts of Paris, along with a 1,300 euros monthly grant.

<br />Second Prize: 3,000 euros

<br />Third Prize: 1,000 euros

<br />Fourth Prize: 500 euros<br />

<br />The four winners will be invited to attend the festival to meet the public and receive their prize. Their work will be exhibited during the 16 days of the festival.

Their travel (roundtrip ticket) and stay during the first week as well as the production of prints for the exhibit will be cared for by the festival organisation.

The works of the winners will be presented in a specific section of the official catalogue, and a special announcement will take place.<br />

<br /><strong>How to apply</strong>  <br />

Applications are made on-line.
<br />

<br /><strong>Each candidate must submit</strong>  <br />

    - 5 to 10 pictures taken or published during the past four years (2013),<br />
   - A short biography and<br />
   - A short description of your project.<br />

Pictures must be provided in Jpeg format only in 72 dpi. The length of an image should not exceed 1024 pixels. The maximum size per picture is 1 MB.

A registration fee of 35 euros is applicable.<br />

<br />
<i>N.B. Photographers may submit to one or more categories: the Photo Awards competition, the Young Talents competition. Each application must be done separately.</i>

                  <?php endif; ?>
              </p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">-->
					<!-- Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée -->
					<input name="amount" type="hidden" value="35" />
					<input name="currency_code" type="hidden" value="EUR" />
					<!-- Indication du montant de la TVA (ou 0.00) -->
					<input name="tax" type="hidden" value="0.00" />
					<!-- Indication de l'URL de retour automatique -->
					<input name="return" type="hidden" value="https://laquatriemeimage.com/pgs/paiement_recu.php?choix=prix_photos" />
					<!-- Indication de l'URL de retour si annulation du paiement -->
					<input name="cancel_return" type="hidden" value="https://laquatriemeimage.com/pgs/participer.php" />
					<!-- Indication de l'URL de retour pour contrôler le paiement -->
					<input name="notify_url" type="hidden" value="https://laquatriemeimage.com/paypal/ipn.php" />
					<!-- Indication du type d'action -->
					<input name="cmd" type="hidden" value="_xclick" />
					<!-- Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) -->
					<input name="business" type="hidden" value="<?php echo $email_vendeur; ?>" />
					<!-- Indication du libellé de la commande qui apparaitra sur Paypal -->
					<input name="item_name" type="hidden" value="Inscription LaQuatriemeImage - Prix Photos" />
					<!-- Indication permettant à l'acheteur de laisser un message lors du paiement -->
					<input name="no_note" type="hidden" value="0" />
					<!-- Indication de la langue -->
					<input name="lc" type="hidden" value="FR" />
					<!-- Indication du type de paiement -->
					<input name="bn" type="hidden" value="PP-BuyNowBF" />
					<!-- Indication du numéro de la commande (très important) -->
					<input name="custom" type="hidden" value="<?php echo $idCommande ?>||prix_photos" />
					<!-- Bouton pour valider le paiement -->
					<input class="bouton inscrire blue_achat" type="submit" value="<?php trad("Je m'inscris", "I apply")?>" />
				</form>
            </div>
            <div class="categories jeunes_talents">
           	  <h2><?php trad("Les Jeunes Talents", "Young Talents") ?><span id="title_line_h3" class="bg-yellow"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
				

Le Festival La Quatrième Image a une démarche forte pour développer la Photographie contemporaine et son lien avec le public, qui vient nombreux découvrir les exposants et pour certains, repartir avec une des œuvres présentées. C’est l’occasion de mettre en lumière de jeunes artistes photographes qui pourront bénéficier, en plein cœur de Paris, de l’espace prestigieux des Blancs Manteaux pour exposer leur travail aux côtés de photographes plus expérimentés, et vivre un événement professionnel significatif au début d’une belle carrière.<br />

<br /><strong>Conditions</strong>  <br />
Le concours Jeunes Talents s’adresse à des photographes :<br />
– professionnels ou amateurs, débutant leur carrière, étudiants en école d’art ou de photographie, photographes indépendants.<br />
– de toutes nationalités,<br />
– âgés de 18 à 25 ans à la date d’inscription.<br />

Le thème est libre. Les photographies présentées peuvent être en noir et blanc ou en couleur. Elles doivent appartenir en totalité ou en partie à une série d’œuvres photographique.<br />

<br />
<strong>Les inscriptions sont ouvertes du 22 novembre 2016 au 30 janvier 2017. </strong><br />

<br /><strong>Sélection</strong>  <br />
Les dossiers seront sélectionnés par la direction artistique du Festival et les candidats retenus seront informés individuellement au plus tard le 10 février 2017. Ils devront ensuite fournir des fichiers haute définition de leurs photographies avant le 15 février 2017 afin de figurer dans le catalogue.
Les lauréats «Jeunes Talents» verront leur voyage sur Paris (billet A/R), leur hébergement durant la première semaine ainsi que la production de leur exposition pris en charge par l’organisation de l’événement.

Les 4 lauréats «Jeunes Talents» sélectionnés seront invités à exposer pendant les 16 jours du Festival, où une section spécifique les mettra à l’honneur. De même, ils figureront dans le catalogue officiel du Festival, et bénéficieront de toute la communication afférente au Festival.<br />

<br /><strong>Modalités de participation</strong>  <br />
Le dépôt des dossiers se fait en ligne uniquement.<br />

<br /><strong>Chaque candidat doit fournir :</strong>  <br />
– 5 à 10 clichés pris ou publiés au cours des 4 dernières années (2013),<br />
– une courte biographie,<br />
– un texte court de présentation du projet.<br />

Les images digitales doivent être fournies en format JPG uniquement, 72 dpi, la largeur des photos ne doit pas excéder 1024 pixels en longueur. La taille du fichier image doit être inférieur à 1MB.<br />

<br />Frais d’inscription : 15 euros.<br />

<br />
<i>NB : Vous avez la possibilité de candidater pour une ou plusieurs catégories : Prix Photo 2017, Jeunes Talents 2017. Chaque inscription doit cependant être faite indépendamment l’une de l’autre.</i>

                
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
				
				La Quatrième Image has taken an important step in developing contemporary photography and strengthening its ties with the public. The many visitors to the photo festival want to discover the exhibiting photographers, and some of them buy photos. It is a unique opportunity for young photographers to be in the spotlight, to take advantage of the chance to show their work in the prestigious Espace des Blancs Manteaux located at the very center of Paris, next to established names in photography, and to take part in a professional event at the very beginning of their career. <br />
                
<br /><strong>Conditions for entry</strong><br />

The competition is open to:<br />
    - All photographers, whether professional or non-professional, student in a photography or art school.<br />
    - All nationalities.<br />
    - The age requirement is 18 to 25 at the date of application.<br />

The candidates will submit a selection of works of their choice. Photographs can be black and white or colour. The candidates must showcase at least one series (partial or total) within their photographic submission.<br />

<br />
<strong>Call for entries open from 22 november 2016 until 30 january 2017.</strong><br />

<br /><strong>Selection</strong>  <br />

The works will be reviewed and the winners selected by the artistic direction of the Festival.
The four selected laureates will be informed individually by 10 februrary 2017. They will submit high-definition photos of their works before 15 February 2017.
Candidates who do not provide the required information will be disqualified.
The four winners of the Young Talent competition will be invited to attend the festival. Their work will be highlighted in a special section during the 16 days of the festival.
Their travel (roundtrip ticket) and stay during the first week as well as the production of prints for the exhibit will be cared for by the festival organisation.
They will be included in the official catalogue and will benefit from the communication regarding the Festival.<br />

<br /><strong>How to apply</strong>  <br />

Applications are made on-line.

<br />

<br /><strong>Each candidate must submit</strong>  <br />
- 5 to 10 pictures taken or published during the past four years (2013),<br />
                 - A short biography and<br />
                  - A short description of your project.<br />
                  
                  Pictures must be provided in Jpeg format only in 72 dpi. The length of an image should not exceed 1024 pixels. The maximum size per picture is 1 MB.
                  
                  A registration fee of 15 euros is applicable.<br />
                  
  <br />
  <i>N.B. Photographers may submit to one or more categories: the Photo Awards competition, the Young Talents competition. Each application must be done separately.</i>
                  
                  
                  
                  <?php endif; ?>
              </p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">-->
					<!-- Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée -->
					<input name="amount" type="hidden" value="15" />
					<input name="currency_code" type="hidden" value="EUR" />
					<!-- Indication du montant de la TVA (ou 0.00) -->
					<input name="tax" type="hidden" value="0.00" />
					<!-- Indication de l'URL de retour automatique -->
					<input name="return" type="hidden" value="https://laquatriemeimage.com/pgs/paiement_recu.php?choix=jeunes_talents" />
					<!-- Indication de l'URL de retour si annulation du paiement -->
					<input name="cancel_return" type="hidden" value="https://laquatriemeimage.com/pgs/participer.php" />
					<!-- Indication de l'URL de retour pour contrôler le paiement -->
					<input name="notify_url" type="hidden" value="https://laquatriemeimage.com/paypal/ipn.php" />
					<!-- Indication du type d'action -->
					<input name="cmd" type="hidden" value="_xclick" />
					<!-- Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) -->
					<input name="business" type="hidden" value="<?php echo $email_vendeur; ?>" />
					<!-- Indication du libellé de la commande qui apparaitra sur Paypal -->
					<input name="item_name" type="hidden" value="Inscription LaQuatriemeImage - Jeunes Talents" />
					<!-- Indication permettant à l'acheteur de laisser un message lors du paiement -->
					<input name="no_note" type="hidden" value="0" />
					<!-- Indication de la langue -->
					<input name="lc" type="hidden" value="FR" />
					<!-- Indication du type de paiement -->
					<input name="bn" type="hidden" value="PP-BuyNowBF" />
					<!-- Indication du numéro de la commande (très important) -->
					<input name="custom" type="hidden" value="<?php echo $idCommande ?>||jeunes_talents" />
					<!-- Bouton pour valider le paiement -->
					<input class="bouton inscrire yellow_achat" type="submit" value="<?php trad("Je m'inscris", "I apply")?>" />
			  </form>
            </div>
        </div>
    </section>

    <section class="condition content">
    	<div id="content">
            <a href="#" class="content" id="basculer-conditions">
            	<img class="fleche-conditions" src="../img/bas_noir.png" />
                <h2><?php trad("Les conditions", "Qualification") ?><span id="title_line"></span></h2>
                <span></span>
            </a>
			<div id="text_condition" style="display:none;">
				<div class="condition-col premiere">
					<img src="../img/questions.png" />
                    <?php if($langue == 'fr'): ?>
					<span class="desquestions">Des questions</span>
					<p>
					Si vous avez d'autres questions au sujet des conditions, contactez-nous :
					</p>
					<a class="email" href="mailto:contact@laquatriemeimage.com">contact@laquatriemeimage.com</a>
					<br/><br/><br/>
					<a href="../pdf/conditions_fr.pdf"><img src="../img/pdf.png" /></a>
					<p>
					Télécharger les conditions d'inscription en pdf.
					</p>
					<?php endif; ?>
                    <?php if($langue == 'en'): ?>
                    <span class="desquestions">More information</span>
					<p>
					If you need more information, please send us an email:
					</p>
					<a class="email" href="mailto:contact@laquatriemeimage.com">contact@laquatriemeimage.com</a>
					<br/><br/><br/>
					<a href="../pdf/conditions_en.pdf"><img src="../img/pdf.png" /></a>
					<p>
					Download terms & conditions.
                    <?php endif; ?>
				</div>
				<div class="condition-col">
                <?php if($langue == 'fr'): ?>
					<h4>Qualification</h4>
					<p>Le concours est ouvert à tous les photographes, professionnels, amateurs et étudiants de tous les pays. Les candidats doivent être âgés de 18 ans ou plus. Pour le concours jeunes talents, les candidats doivent être âgés de moins de 26 ans à la date du concours.  
					</p>
					<h4>Frais d'inscription</h4>
					<p> <strong> Les participants seront facturés 35 euros pour participer au concours pour les «Prix Photo», 15 euros pour participer au concours Jeunes Talents </strong> <br/> 
                    <br/> Le paiement peut être effectué en ligne par Paypal. Les frais d'inscription ne sont pas remboursables. Ces frais d'inscription sont nécessaires pour couvrir l'infrastructure de l'événement, l'impression des catalogues et l'organisation générale.
					</p>
					<h4>Candidature</h4>
                    <h5>Candidature en ligne uniquement</h5>
					<p>Les candidatures doivent être basées sur un ensemble de travaux composé de la totalité ou d'une partie d'une série d'œuvres photographiques. Les photos peuvent être en noir et blanc ou en couleur dans n'importe quel format. Seuls les dossiers digitaux seront acceptés. 
                    N'envoyez pas de tirages originaux. Toutes les images digitales doivent nous être fournies en format Jpg uniquement, 72 dpi, la largeur des photos ne doit pas excéder 1024 pixels sur le côté le plus long.


					</p>
					<h4>Date limite de candidature</h4>
					<p>Date limite de candidature  Concours Prix Photos et jeunes Talents : <strong> jusqu'au 30 janvier 2017.  </strong> <br/>

					</p>
					<h4>Date de réalisation</h4>
					<p>Les Photos soumises doivent avoir été réalisées ou publiées au cours des 4 dernières années (2013).

					</p>
                    
                    
                   <h4>Inscription</h4>
					<p> Préparer les documents suivants:
                    <br/> Une courte biographie. (pdf ou doc ),
                    <br/> 1 à 5 photos en 72 dpi. (1024 pixels de large au maximum),
                    <br/> Un texte court de présentation du projet. <br/>
                    <br/> Merci de garder une taille du fichier image inférieure à 600 Ko. - 
                    Légendes et commentaires (en option). <br/>
                    <br/> Remplissez le formulaire d'inscription et téléchargez vos photos et documents. 
                    Un lien d'accès vers le formulaire d'inscription vous sera envoyé après le paiement Paypal). <br/>
                    <br/> Si vous rencontrez des difficultés pour vous inscrire, merci d'envoyer un mail à l'adresse:  
                    <br/><a class="email" href="mailto:support@laquatriemeimage.com">support@laquatriemeimage.com</a>
					</p>
                   
                   
                   
				</div>
				<div class="condition-col nomargin">
					
					<h4>Fichiers</h4>
					<p>Les fichiers doivent être intitulés de la manière suivante:
					<br/>
					nom.prénom.01.jpg<br/>
					<br/>
					Par exemple :
					<br/>
					Nom : Frédéric Dupont 
                    <br/>Images à présenter : 2
					<br/><br/>
					Renommer comme : <br/>
					dupont.frederic.01.jpg
					<br/>
					dupont.frederic.02.jpg
					</p>

					<h4>Droits d'utilisation</h4>
					<p>Les participants dont les candidatures ont été retenues accordent à La Quatrième Image le droit d'utiliser leurs photos, accompagnées des crédits correspondants, 
                    à des fins de marketing autour du salon, notamment la publication dans le catalogue de l'exposition et l'affichage sur le site Internet de La Quatrième Image et la page Facebook officielle.  <br />
                    <br/> Les lauréats du Prix Photo et Jeunes Talents seront contactés individuellement par e-mail.<br/>
                    <br/> Tous les candidats retenus (lauréats des Prix Photos et Jeunes Talents) s'engagent à envoyer par ftp / email des fichiers en haute résolution de leurs photos, choisies par la Direction Artistique du Salon pour être présentées dans le catalogue La Quatrième Image 2017.<br/>
                    <br/> Les candidatures ne respectant pas les conditions énoncées ci-dessus seront disqualifiées.
					</p>
					<h4>Droit d'auteur</h4>
					<p> Les participants conservent le droit d'auteur de toutes leurs photographies en tout temps.
					</p>
					<p>
					Les participants s’engagent sur le fait que si leur œuvre est sélectionnée pour l’exposition, ils assurent la responsabilité de vérifier que leurs photos retenues ne violent pas 
                    ou ne sont pas en infraction avec les droits d'une tierce personne ou entité.
					</p>
					<p> Les candidatures ne respectant pas les conditions énoncées ci-dessus seront disqualifiées.
					</p>
					<?php endif; ?>
                    
                    
                    <?php if($langue == 'en'): ?>
                    <h4>Qualification</h4>
					<p>To qualify to enter the competition. The competition is open to everyone, 18 years and older, professional and non-professional, photographers or students alike from all around the world. To enter the Young talents competition, applicants must be under 26 years old.  
					</p>
					<h4>Submission fees</h4>
					<p> <strong>To enter the competitions, the entrant must pay an entry fee of 35 euros for competition for the Photo Prizes, 15 euros for Young Talents competition. </strong> <br/>
                     Payment can be made online through Paypal. Registration fees are not refundable. 
                     Registration fees are needed to cover the infrastructure of the event, printing of the catalogue and the general organization of the event.
					</p>
					<h4>Registration</h4>
                    <h5>Registration online only</h5>
					<p>Applications must be based on a body of work consisting of all or part of a series of photographic works. <br/>
                      <br/>  Photos can be black and white or color in any format. Only digital files will be accepted. Do not send original prints. <br/>
                      <br/>Submissions must be of a reasonably large file size and of high quality: <br/>the width of the pictures should not exceed 1024 pixels, at 72dpi.<br/> Entrants' photos must be in JPEG format.


					</p>
					<h4>Entry deadlines</h4>
					<p><strong> Photo Prizes and Young Talents competition: until january 30, 2017. </strong>  <br/>
					</p>
					<h4>Date of creation</h4>
					<p>Photos submitted must have been completed or published over the last 4 years (2013).

					</p>
                    
                    
                   <h4>Registration</h4>
					<p> Please prepare the following documents:
                    <br/> - A short biography (pdf or doc),
                    <br/> - 1 to 5 photos 72 dpi (1024 pixels width maximum),
                    <br/> - A short text presenting the work. <br/>
                    <br/>The size of the file should not exceed 600 Ko. Captions and comments (optional). 
                    <br/>
                    <br/> Fill the registration form and download your photos and documents. 
                    (You will receive a link to the registration form after your payment via paypal). 
                    If any difficulty are encountered for registration, please send an e-mail to: <br />
                    <br /><a class="email" href="mailto:support@laquatriemeimage.com">support@laquatriemeimage.com</a>
					</p>
                   
                   
                   
				</div>
				<div class="condition-col nomargin">
					
					<h4>Files' label</h4>
					<p>Files must be labeled as follows:
					<br/>
					name.first.01.jpg
					<br/>
					<br/>For instance:
					<br/>
					Name: Frédéric Dupont 
                    <br/>Images submitted: 2
					<br/>
					<br/>Rename as:<br/>
					dupont.frederic.01.jpg
					<br/>
					dupont.frederic.02.jpg
					</p>

					<h4>Usage Rights</h4>
					<p>Selected entrants agree to give La Quatrième Image the right to use their photos, with corresponding credits, and to the usage of your name and likeness for the purposes of advertising, promotion and publicity without receiving additional compensation: including the publication in the catalog of the Fair and display on the website of La Quatrième Image and official Facebook page.  <br />
                    <br/> Winners of the Photo Prizes and of the Young Talents competition will be notified via email.<br/>
                    <br/> All successful applicants (Winners of Photos Prizes and Young Talents) commit to sending via ftp / email high resolution files of their photos, chosen by the Artistic Director of the Fair, to be featured in the catalog La Quatrième Image 2017. <br/>
                    <br/> Submissions that do not comply with the requirements set below in these Terms of Service will be disqualified.
					</p>
					<h4>Copyright</h4>
					<p> Copyright of the photos is retained by the photographer. La Quatrième Image recognizes that the entrant – the author of the photograph – retains full and complete ownership of the copyright in each submission.
					</p>
					<p> Entrant warrants all his/her submissions: <br/>
                    <br/>1) are the Entrant's original work;
                    <br/> 2) do not infringe the intellectual property rights of any person or entity; 
                    <br/>3) are free from any claims, including any claims concerning the intellectual property rights and other proprietary of third parties; 
                    <br/>4) and do not violate any laws or regulations.
					</p>
					<?php endif; ?>
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
