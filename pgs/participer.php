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
                    Participer à La Quatrième Image, c'est l'occasion unique d'exposer dans un salon international au cœur de Paris qui favorise les échanges interculturels autour de la photographie. Le public d'amateurs avertis, de galeristes et de professionnels de la presse et de la photographie pourra apprécier votre travail dans une ambiance conviviale, entre                                                      invités prestigieux et révélations artistiques. <br />
                   <br /> Chaque stand d'exposition d'une surface de 12m2 est composé de 3 panneaux de 2,5m de hauteur disposé en U permettant la présentation d'œuvre de grand format, et éclairé par 3 spots. <br />
                   <br /> Plusieurs possibilités pour vous d'exposer pendant le salon, en déposant votre candidature pour un ou plusieurs des concours : les Exposants, les Prix Photo et les Jeunes Talents. Vous trouverez ci-dessous en détail, les conditions spécifiques à chaque concours. Les exposants sélectionnés bénéficieront de la communication pendant le salon et sur les sites internet ou facebook, les affiches et les communiqués de presse.         
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
					
					Participating in La Quatrième Image is a unique opportunity for exhibiting in an international fair that promotes cultural exchange in the field of photography in the centre of Paris. In a relaxed atmosphere,  a public of art lovers, gallery owners, the media and photography professionals will have a chance to appreciate your work along with that of other distinguished exhibitors guests and artistic discoveries. 
					<br/><br/>Each exhibitor’s booth provides a surface of 12 square metres, with three 2,5 metres high walls, set up in a U-shape, allowing the presentation of large formats. There are three spotlights.
					<br/><br/>Participation can take place by competing in three categories: Exhibitors, Photo Awards, Young Talents. You can submit your work to more than one category. More detailed information about each category follows below.
					<br/><br/>Selected exhibitors will also be able to take advantage of communication during the photo fair via this  website, as well as the official facebook page, posters and press releases.
				<?php endif; ?>
                </p>
            </div>
        </div>
    </section>
    <section class="concours content">
    	<div id="content">
        	<div class="categories exposants">
            	<h2><?php trad("Les Exposants", "Exhibitors") ?><span id="title_line_h3" class="bg-red"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
                Devenu une référence dans le paysage photographique, le salon est l'occasion de rencontrer des professionnels et d'élargir votre réseau. C'est aussi la possibilité pour les exposants de vendre leur travail qu'ils peuvent présenter lors d'un contact direct avec leurs interlocuteurs. Tous les exposants figureront dans le catalogue du salon; ils bénéficieront de la communication organisée autour du salon et des événements associés, notamment du vernissage officiel. <br />
                <br /> Le prix de la location d'un stand inclut aussi 2 exemplaires du catalogue officiel de La Quatrième Image 2015, véritable livre photo.<br />
                <br /> Les candidatures pour la location d'un stand sont ouvertes aux photographes professionnels ou amateurs, de toutes nationalités, âgés de 18 ans ou plus.<br />
                <br /> Le dépôt des dossiers se fait en ligne uniquement.  <br /> 
                 <br /><strong> Les inscriptions sont ouvertes du  16 février au 20 juillet 2015.</strong>  <br />
                <br /> Le thème est libre, les photos peuvent être en noir et blanc ou en couleur. Chaque candidat doit fournir 1 à 5 clichés pris ou publié au cours des 5 dernières années (2010), une courte biographie et acquitter <strong>les frais d'inscription de 35 euros.</strong>  <br />
                <br />Les exposants seront sélectionnés par la Direction Artistique du salon. Les candidats retenus seront informés individuellement par courriel.  <br />  
                <br /> À réception de ce mail, ils s'engagent à régler, par virement bancaire, <strong> l'intégralité des frais de location du stand : 900 euros (TTC). </strong> Ils devront fournir des clichés de haute définition en vue de l'édition du catalogue. <br />
                <br /> Les candidatures ne seront prises en compte qu'après réception du paiement.
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
				
				La Quatrième Image has become a point of reference in the photographic landscape. It is a unique opportunity to meet up with professionals and to enhance your network. Thanks to  direct contact with visitors, it is also an opportunity to sell your work directly. All exhibitors will be presented in the official catalogue. They will be able take advantage of the communication about the fair and associated events, especially the official opening. Two samples of the official catalogue which is a real photo book are included in the booth rental cost.
				
				<br /><br />Applying for a booth rental is open to all photographers, whether professional or non-professional. It is open to all nationalities. Minimum age required is 18.
				
				<br /><br />Applications can be made only on-line. <strong> Submissions are open from 16 February to 20 July 2015.</strong> There is no specific theme. Both black/white and color photos are accepted. Each candidate must submit one to five shots taken or published during the past five years (2010), plus a short biography and <strong>a registration fee of 35 euros.</strong>
				<br /><br />Exhibitors will be selected by the Artistic Direction of La Quatrième Image. Selected exhibitors will be notified individually by mail. On reception of this mail, those selected commit themselves to pay by bank transfer <strong>the total cost of the stand rental amounting to 900 euros (all taxes included).</strong> They will submit high-definition photos intended for the publication in the catalogue. Exhibitors’ acceptance will be final only after reception of  payment.
				<?php endif; ?>
                </p>
				<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">>-->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<!-- Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée -->
					<input name="amount" type="hidden" value="35" />
					<input name="currency_code" type="hidden" value="EUR" />
					<!-- Indication du montant de la TVA (ou 0.00) -->
					<input name="tax" type="hidden" value="0.00" />
					<!-- Indication de l'URL de retour automatique -->
					<input name="return" type="hidden" value="https://laquatriemeimage.com/pgs/paiement_recu.php?choix=exposants" />
					<!-- Indication de l'URL de retour si annulation du paiement -->
					<input name="cancel_return" type="hidden" value="https://laquatriemeimage.com/pgs/participer.php" />
					<!-- Indication de l'URL de retour pour contrôler le paiement -->
					<input name="notify_url" type="hidden" value="https://laquatriemeimage.com/paypal/ipn.php" />
					<!-- Indication du type d'action -->
					<input name="cmd" type="hidden" value="_xclick" />
					<!-- Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) -->
					<input name="business" type="hidden" value="<?php echo $email_vendeur ?>" />
					<!-- Indication du libellé de la commande qui apparaitra sur Paypal -->
					<input name="item_name" type="hidden" value="Inscription LaQuatriemeImage - Exposants" />
					<!-- Indication permettant à l'acheteur de laisser un message lors du paiement -->
					<input name="no_note" type="hidden" value="0" />
					<!-- Indication de la langue -->
					<input name="lc" type="hidden" value="FR" />
					<!-- Indication du type de paiement -->
					<input name="bn" type="hidden" value="PP-BuyNowBF" />
					<!-- Indication du numéro de la commande (très important) -->
					<input name="custom" type="hidden" value="<?php echo $idCommande ?>||exposants" />
					<!-- Bouton pour valider le paiement -->
					<input class="bouton inscrire red_achat" type="submit" value="<?php trad("Je m'inscris", "I apply")?>" disabled title="Les inscriptions sont closes" />
				</form>
            </div>
            <div class="categories prix_photo">
            	<h2><?php trad("Le Prix Photo", "Photo Prizes") ?><span id="title_line_h3" class="bg-blue"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
				Pour la 3e édition du salon international La Quatrième Image, 4 Prix du salon seront à nouveau décernés par un jury de professionnels du monde de la Photographie. Le travail des lauréats   sera présenté pendant le salon La Quatrième Image à Paris, à l’automne 2015, la production de   leur exposition (tirages et encadrements) étant prise en charge par l’organisation du salon.  <br />
                <br /> <strong>Le 1er prix remportera une résidence photo de 3 mois avec une bourse de 1 300 euros par mois, à la Cité des Arts de Paris, et exposition au salon. <br />
                       2e prix: 3 000 euros et exposition, <br />
                       3e prix: 1 000 euros et exposition, <br />
                       4e prix: exposition au salon. </strong><br />

                <br /> La remise officielle des prix aura lieu au mois de juin 2015, au cours d’une cérémonie à la mairie du IVe arrondissement de Paris, en présence de personnalités parmi lesquelles le Directeur de la Maison Européenne de la Photographie, de collectionneurs et de représentants de la presse généraliste et spécialisée. Les lauréats                            figureront dans une section dédiée du catalogue officiel du Salon, et une communication spécifique est organisée autour des Prix. <br />
                <br /> Le concours est ouvert aux photographes professionnels ou amateurs, de toutes nationalités, âgés de 18 ans ou plus. <br />

                <br />Le dépôt des dossiers se fait en ligne uniquement. <br />
                <br /> <strong>Les inscriptions sont ouvertes du 16 février au 25 avril 2015.</strong>  <br />
                <br /> Le thème est libre, les photos peuvent être en noir et blanc ou en couleur. <br /> 
                <br />Chaque candidat doit fournir 1 à 5 clichés pris ou publié au cours des 5 dernières années (2010), une courte biographie et acquitter <strong>les frais d’inscription de 35 euros. </strong>
                <br />
                <br /> Le jury se réunira la première semaine de mai 2015 et les candidats sélectionnés seront informés individuellement au plus tard fin le 16 mai 2015. Ils devront fournir des fichiers haute définition de leurs photographies. Les candidats ne fournissant pas les informations demandées seront disqualifiés. Pour les photographes                                               remplissant les conditions (âgés de moins de 26 ans), il est possible de s’inscrire à la fois pour le concours «Jeunes Talents» et pour le Prix du Salon La Quatrième Image.
                
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
				
				For this third edition of La Quatrième Image, an international jury composed of photography professionals will again select the works of four photographers. The works of these four will be exhibited during the La Quatrième Image Photo Fair in Paris in autumn 2015. The printing and framing of their photos will be paid for by the organization of the fair.
				<br/><br/><strong>First Prize: a three-month photo residency at the Cité des Arts of Paris, along with a 1,300 euro monthly grant and exhibition for free at the fair.
				<br/>Second Prize: 3,000 euros and exhibition for free at the fair.
				<br/>Third Prize: 1,000 euros and exhibition for free at the fair.
				<br/>Fourth Prize: exhibition for free at the fair.</strong>
				<br/><br/>The prizes will be awarded in June 2015 during an official ceremony at the Paris 4th arrondissement Town Hall  with officials in attendance such as the Director of la Maison Européenne de la Photographie, collectors, general and specialized media.
				<br/><br/>The works of the winners will be presented in a specific section of the official catalogue, and a special announcement will take place.
				
				<br/><br/>The competition is open to all photographers, whether professional or non-professional, and to all nationalities. The minimum age required is 18.
				
				<br/><br/>Applications can be made only on-line. <strong> Applcations can be made from 16 February thru 25 April 2015. </strong> There is no specific theme. Both black/white and color photos are accepted. Each candidate must submit one to five shots taken or published during the past five years (2010), a short biography and <strong>a registration fee of 35 euros.</strong>
				<br/><br/>The jury will meet during the first week of May 2015. The four selected candidates will be informed individually no later than May 16, 2015. They will submit high-definition photos of their works. 
				<br/><br/>Candidates who do not provide the required information will be disqualified.
				<br/><br/>Photographers fulfilling the required conditions (aged below 26 years) may submit both to the Photo Awards competition and to the Young Talents competition. 
				<?php endif; ?>
                </p>
				<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">>-->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
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
					<input name="business" type="hidden" value="<?php echo $email_vendeur ?>" />
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
					<input class="bouton inscrire blue_achat" type="submit" value="<?php trad("Je m'inscris", "I apply")?>" disabled title="Les inscriptions sont closes" />
				</form>
            </div>
            <div class="categories jeunes_talents">
            	<h2><?php trad("Les Jeunes Talents", "Young Talents") ?><span id="title_line_h3" class="bg-yellow"></span></h2>
                <p>
				<?php if($langue == 'fr'): ?>
				Le salon La Quatrième Image, a une démarche forte pour développer la Photographie contemporaine et son lien avec le public, qui vient nombreux découvrir les exposants et pour certains, repartir avec une des œuvres présentées. C’est l’occasion de mettre en lumière de jeunes artistes photographes qui pourront bénéficier, en plein cœur de Paris, de l’espace prestigieux des Blancs Manteaux pour exposer leur travail aux côtés de photographes plus expérimentés, et vivre un événement professionnel significatif au début d’une belle carrière. <br />

              <br /> <strong>Les 4 gagnants «Jeunes Talents» sélectionnés par La Quatrième Image se verront offrir un stand d’exposition pendant le Salon, où une section spécifique les mettra à l’honneur. Ils figureront en bonne place dans le catalogue officiel du Salon, et seront distingués dans toute la communication afférente au salon. </strong><br />

              <br />  Le concours Jeunes Talents s’adresse aux photographes âgés de 18 à 25 ans à la date d’inscription. Amateurs ou professionnels débutant leur carrière, étudiants en école d’art ou de photographie, photographes indépendants, peuvent faire acte de candidature. <br />

              <br />  Le dépôt des dossiers se fait en ligne uniquement. <strong> Les inscriptions sont ouvertes du 16 février au 25 avril 2015.</strong> Le thème est libre. Chaque candidat doit fournir 1 à 5 clichés pris au cours des 5 dernières années (2010), une courte biographie et <strong>acquitter les frais d’inscription de 15 euros. </strong><br />

              <br />  Les dossiers seront sélectionnés par la direction artistique du salon et les candidats retenus   seront informés individuellement au plus tard le 16 mai 2015.  Ils devront fournir des fichiers haute définition de leurs photographies. Les gagnants «Jeunes Talents» resteront responsables de la production de leur exposition et de                          l’organisation de leur déplacement. Pour les photographes remplissant les conditions, il est possible de s’inscrire à la fois pour le concours «Jeunes Talents» et pour le Prix du Salon La Quatrième Image. <br />
                
				<?php endif; ?>
				<?php if($langue == 'en'): ?>
				
				La Quatrième Image has taken an important step in developing contemporary photography and strengthening its ties with the public. The many visitors to the photo fair want to discover the exhibiting photographers, and some of them buy photos. It is a unique opportunity for young photographers to be in the spotlight, to take advantage of the chance to show their work in the prestigious Espace des Blancs Manteaux located in the very center of Paris, next to established names in photography, and to take part in a professional event at the very beginning of their career.
				<br/><br/><strong>The four Young Talents to be selected by the La Quatrième Image will be offered a booth for free, in a reserved section, during the photo fair. Their work will be presented in a special section of the official catalogue, and they will be identified through the fairs’ communication facilities.</strong>
				
				<br/><br/>The Young Talents competition is open to all photographers aged 18-25 on the application date. Submission is open to non-professionals and professionals beginning their career, students at art or photography schools, and independent photographers.
				
				<br/><br/>Applications can be made only on-line. They can be made from 16 February thru 25 April 2015. There is no specific theme. Both black/white and color photos are accepted.
				<br/><br/>Each candidate must submit one to five shots taken or published during the past five years (2010), a short biography and <strong>a registration fee of 15 euros.</strong>
				<br/><br/>The four Young Talents will be selected by the Artistic Direction of La Quatrième Image and will be informed individually no later than May 16, 2015. 
				<br/><br/>They will submit high-definition photos of their works and will be responsible for the cost of production of their exhibits and transportation.
				<br/><br/>Photographers fulfilling the required conditions may apply for both the Photo Awards competition and the Young Talents competition. 
				<?php endif; ?>
                </p>
				<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">>-->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
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
					<input name="business" type="hidden" value="<?php echo $email_vendeur ?>" />
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
					<input class="bouton inscrire yellow_achat" type="submit" value="<?php trad("Je m'inscris", "I apply")?>" disabled title="Les inscriptions sont closes" />
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
					If you need more information, please sen us an email:
					</p>
					<a class="email" href="mailto:contact@laquatriemeimage.com">contact@laquatriemeimage.com</a>
					<br/><br/><br/>
					<a href="../pdf/conditions_en.pdf"><img src="../img/pdf.png" /></a>
					<p>
					Download  terms and conditions.
                    <?php endif; ?>
				</div>
				<div class="condition-col">
                <?php if($langue == 'fr'): ?>
					<h4>Qualification</h4>
					<p>Le concours est ouvert à tous les photographes, professionnels, amateurs et étudiants de tous les pays. Les candidats doivent être âgés de 18 ans ou plus. Pour le concours jeunes talents, les candidats doivent être âgés de moins de 26 ans à la date du concours.  
					</p>
					<h4>Frais d'inscription</h4>
					<p> <strong> Les participants seront facturés 35 euros pour participer au concours pour les «Prix Photo» ou pour un stand d'exposition, 15 euros pour participer au concours Jeunes Talents </strong> <br/> 
                    <br/> Le paiement peut être effectué en ligne par Paypal. Les frais d'inscription ne sont pas remboursables. Ces frais d'inscription sont nécessaires pour couvrir l'infrastructure de l'événement, l'impression des catalogues et l'organisation générale.
					</p>
					<h4>Candidature</h4>
                    <h5>Candidature en ligne uniquement</h5>
					<p>Les candidatures doivent être basées sur un ensemble de travaux composé de la totalité ou d'une partie d'une série d'œuvres photographiques. Les photos peuvent être en noir et blanc ou en couleur dans n'importe quel format. Seuls les dossiers digitaux seront acceptés. 
                    N'envoyez pas de tirages originaux. Toutes les images digitales doivent nous être fournies en format Jpg uniquement, 72 dpi, la largeur des photos ne doit pas excéder 1024 pixels sur le côté le plus long.


					</p>
					<h4>Date limite de candidature</h4>
					<p>Date limite de candidature  Concours Prix Photos et jeunes Talents : <strong> jusqu'au 25 avril 2015.  </strong> <br/>

                    </br> Candidature pour la location d'un stand d'exposition : <strong>jusqu'au 25 mai 2015. </strong> 
					</p>
					<h4>Date de réalisation</h4>
					<p>Les Photos soumises doivent avoir été réalisées ou publiées au cours des 5 dernières années (2010).

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
                    <br/> Les lauréats du Prix Photo et Jeunes Talents seront contactés individuellement par e-mail  au plus  tard le 16 mai 2015. <br/>
                    <br/> Tous les candidats retenus (exposants, lauréats des Prix Photos et Jeunes Talents) s'engagent à envoyer par ftp / email des fichiers en haute résolution de leurs photos, 
                    choisies par la Direction Artistique du Salon pour être présentées dans le catalogue La Quatrième Image 2015.<br/>
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
					<p> <strong>To enter the competitions, the entrant must pay an entry fee of 35 euros for competition for the Photo Prizes or for renting a booth 15 euros for Young Talents competition. </strong> <br/>
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
					<p><strong> Photo Prizes and Young Talents competition: until April 25, 2015. </strong>  <br/>

                    </br><strong> Application for renting an exhibition booth: until May 25, 2015. </strong> 
					</p>
					<h4>Date of creation</h4>
					<p>Photos submitted must have been completed or published over the last 5 years (2010).

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
					<p>Selected entrants agree to give La Quatrième Image the right to use their photos, with corresponding credits, and to the usage of your name and likeness for the purposes of advertising, promotion and publicity without receiving additional compensation: including the publication in the catalog                       of the Fair and display on the website of La Quatrième Image and official Facebook page.  <br />
                    <br/> Winners of the Photo Prizes and of the Young Talents competition will be notified via email by May 16, 2015. <br/>
                    <br/> All successful applicants (Exhibitors, Winners of Photos Prizes and Young Talents) commit to sending via ftp / email high resolution files of their photos, chosen by the Artistic Director of the Fair, to be featured in the catalog La Quatrième Image 2015. <br/>
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
