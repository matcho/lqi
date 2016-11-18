<?php
	include "entete.php";
	// Connexion BD
	include "../lib/bdd.php";
	$link = connexion();
?>
<body>
    <header>
        <?php
            $choix = isset($_GET['choix']) ? $_GET['choix'] : null;
			$idCommande = isset($_GET['id_commande']) ? $_GET['id_commande'] : null;
        ?>
        <div id="barremenu">
            <div id="logo">
                    <img src="../img/logo/100x100.png" alt="La Quatrième Image" />
            </div>
            <div id="titre-formulaire">
                <?php trad("Formulaire d'inscription", "Application form") ?>
            </div>
            <ul id="lang">
                    <li><a href="inscription.php?id_commande=<?php echo $idCommande ?>&langue=en"<?php echo $langue == 'en' ? ' class="active"' : '' ?>>EN</a></li>
                    <li class="sep">/</li>
                    <li><a href="inscription.php?id_commande=<?php echo $idCommande ?>&langue=fr"<?php echo $langue == 'fr' ? ' class="active"' : '' ?>>FR</a></li>
            </ul>
        </div>
    </header>
    <section class="inscription intro content">
        <div id="content">
			<?php
			// vérification de l'existence de l'identifiant de commande
			$req = "SELECT * FROM lqi_inscrits WHERE id_commande='" . prot($idCommande) . "';";
			$res = requete($req);
			$ligne = mysql_fetch_assoc($res);
			if ((! $ligne) || ($ligne['id_commande'] == "")) {
				trad("Le numéro de commande n'est pas reconnu",
					"Unknown command number");
				exit;
			}
			if ($ligne['inscription_complete'] == 1) {
				trad("Un dossier a déjà été enregistré pour cette commande",
					"A registration has already been completed for this command");
				exit;
			}
			$choix = $ligne['categorie'];
			?>
            <h1><?php trad("Votre<br/>candidature", "Your<br/>application") ?><span id="title_line"></span></h1>
            <ul id="choix-formule">
                <li>
                    <input <?php echo $choix == "exposants" ? 'checked="checked"' : ''; ?>
						type="radio" name="radio-choix" id="radio-choix-exposants" data-choix="exposants" />
                    <label><?php trad("Candidature pour la catégorie Exposants (location d'un stand)",
							"Application for the Exhibitors competition (renting a booth)") ?> - 35 euros</label>
                </li>
                <li>
                    <input <?php echo $choix == "prix_photos" ? 'checked="checked"' : ''; ?>
						type="radio" name="radio-choix" id="radio-choix-prix_photos" data-choix="prix_photos" />
                    <label><?php trad("Candidature pour la catégorie Prix photo",
							"Application for the Photo Prize competition") ?> - 35 euros</label>
                </li>
                <li>
                    <input <?php echo $choix == "jeunes_talents" ? 'checked="checked"' : ''; ?>
						type="radio" name="radio-choix" id="radio-choix-jeunes_talents" data-choix="jeunes_talents" />
                    <label><?php trad("Candidature pour la catégorie Jeunes talents",
							"Application for the Young Talents competition") ?> - 15 euros</label>
                </li>
            </ul>
			<div id="recap-tarif">
				Total <?php trad("payé", "paid") ?>: <span id="montant-euros"><?php echo $choix == "jeunes_talents" ? '15' : '35' ?></span>,00 euros
			</div>
        </div>
    </section>
    <section class="inscription explication content exposants" <?php echo $choix != "exposants" ? 'style="display: none;"' : ''; ?>>
    	<div id="content">
            <div id="explication-candidature">
                <h3><?php trad("Candidature pour la catégorie Exposants (location d'un stand)",
							"Application for the Exhibitors competition (renting a booth)") ?></h3>
				<?php if ($langue == 'fr'): ?>
                <p>
					Candidature pour la location d'un stand d'exposition pendant
					le salon La Quatrième Image, du 27 octobre 2015 au 1er novembre
					2015 (inclus), à Paris.
					<br/>Frais d'inscription non remboursables. 
                </p>
                <p>
					Les candidats retenus s'engagent à fournir des photos haute
					définition à la demande des organisateurs pour l'édition du
					livre photo du salon. Les exposants retenus devront acquitter
					le prix de la location du stand : 900 euros dans les 10 jours
					suivant la réception de l'avis de leur sélection; en l'absence
					de paiement ils seront disqualifiés. Le prix de la location
					inclut la fourniture d'un stand en U d'environ 12m2 éclairé
					par 3 spots, la communication presse et internet du salon,
					et 2 catalogues du salon. Les photographes sélectionnés
					s'engagent à produire les tirages et les encadrements des
					photos qui seront exposées.
                </p>
				<?php endif; ?>
				<?php if ($langue == 'en'): ?>
				<p>
					Application for renting a exhibition booth during La Quatrième
					Image photo fair, from October 27 2015 to November 1st 2015
					(included), in Paris.
					<br/>Registration fees are not refundable.
                </p>
                <p>
					Successful applicants commit to providing high-resolution photos,
					on request of the organizers, for editing the Catalogue of
					the fair. Selected exhibitors will have to pay the price for
					the booth rental: 900 euros, within 10 days from the notification
					of their selection; in the absence of payment, candidates will
					be disqualified. The rental price is including a U-shaped booth
					of about 12 m2, lighted by 3 spots, press release and communication,
					and 2 catalogs of the fair. The selected photographers will
					undertake to produce the prints and frames for photos that
					will be exhibited.
				</p>
				<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="inscription explication content prix_photos" <?php echo $choix != "prix_photos" ? 'style="display: none;"' : ''; ?>>
    	<div id="content">
            <div id="explication-candidature">
                <h3><?php trad("Candidature pour la catégorie Prix photo",
							"Application for the Photo Prize competition") ?></h3>
				<?php if ($langue == 'fr'): ?>
                <p>
					Candidature pour participer au concours en vue de gagner l'un
					des 4 prix photos La Quatrième Image 2015, décerné par notre jury :
					<br/>1er prix: résidence photo de 3 mois à la Cité Internationale
					des Arts de Paris avec une bourse de 1300 euros par mois,
					<br/>2è prix : 3000 euros,
					<br/>3è prix : 1000 euros,
					<br/>4è prix : exposition sur le salon
                </p>
                <p>
					Tous les lauréats exposeront pendant le salon du 27 octobre
					2015 au 1er novembre 2015 (inclus), et la production de leur
					exposition (tirages et encadrements) sera prise en charge par
					l’organisation. Les lauréats seront invités à la remise
					officielle des prix en juin 2015 à Paris. 
					<br/>Frais d'inscription non remboursables. Les candidats
					retenus s'engagent à fournir des photos haute définition à
					la demande des organisateurs pour l'édition du livre photo du salon.
                </p>
				<?php endif; ?>
				<?php if ($langue == 'en'): ?>
				<p>
					Application for the competition for winning one of the 4
					Photo Prizes La Quatrième Image 2015, awarded by our jury. 
					<br/>1st prize : 3 months photography residency at Cité Internationale
					des Arts de Paris, with grant   of 1300 EUR per month
					<br/>2nd prize: 3.000 EUR 
					<br/>3rd prize : 1.000 EUR
					<br/>4th prize: Exhibition at LA QUATRIEME IMAGE Photo fair in Paris
                </p>
                <p>
					The 4 winners will exhibit during La Quatrième Image photo
					fair, from October 27 2015 to November 1st 2015 (included),
					and production of their exhibition (prints and frames) will
					be will be borne by the organization. The winners will be
					invited to the official awards ceremony in June 2015 in Paris.
					<br/>Registration fees are not refundable. The winners commit
					to providing high-resolution photos, on request of the organizers,
					for editing the Catalogue of the fair.
				</p>
				<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="inscription explication content jeunes_talents" <?php echo $choix != "jeunes_talents" ? 'style="display: none;"' : ''; ?>>
    	<div id="content">
            <div id="explication-candidature">
                <h3><?php trad("Candidature pour la catégorie Jeunes talents (moins de 26 ans)",
							"Application for the Young Talents competition (under 26)") ?></h3>
				<?php if ($langue == 'fr'): ?>
                <p>
					Candidature pour être sélectionné par la direction artistique
					du salon et gagner un stand d'exposition pendant le salon La
					Quatrième Image, du 27 octobre 2015 au 1er novembre 2015
					(inclus), à Paris.
					<br/>Frais d'inscription non remboursables. 
                </p>
                <p>
					Les candidats retenus s'engagent à fournir des photos haute
					définition à la demande des organisateurs pour l'édition du
					livre photo du salon. Ils s'engagent à produire les tirages
					et les encadrements des photos qui seront exposées. Les stands
					en U ont une surface d'environ 12m2 et sont éclairés par 3 spots.
                </p>
				<?php endif; ?>
				<?php if ($langue == 'en'): ?>
				<p>
					Application to be selected by the artistic direction of the
					fair and winning an exhibition booth during La Quatrième Image
					photo fair, from October 27 2015 to November 1st 2015 (included),
					in Paris.
					<br/>Registration fees are not refundable.
                </p>
                <p>
					Successful applicants commit to providing high-resolution
					photos, on request of the organizers, for editing the Catalogue
					of the fair. They commit to producing the prints and frames
					for the photos that will be exhibited. The U-shaped exhibition
					booth are about 12m2 and lighted by 3 spots.
				</p>
				<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="inscription formulaire content">
        <div id="content">
			<!-- @TODO ordre des champs avec Tab -->
            <form id="formulaire-inscription" action="enregistrer_dossier.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_commande" value="<?php echo $idCommande ?>" id="fi-id-commande" />
				<h1><?php trad("Votre dossier", "Your application file") ?><span id="title_line"></span></h1>
				<div class="col1">
					<label><?php trad("Nom", "Last name") ?></label>
					<input required type="text" name="nom" id="fi-nom" />
					<label><?php trad("Date de naissance", "Birthdate") ?>
						<span class="form-indication"><?php trad("(AAAA/MM/JJ)", "(YYYY/MM/DD)") ?></span>
					</label>
					<input required type="text" name="dn" id="fi-dn" />
					<label><?php trad("Adresse", "Address") ?></label>
					<input required type="text" name="adresse" id="fi-adresse" />
					<label><?php trad("Code postal", "Zip code") ?></label>
					<input required type="text" name="cp" id="fi-cp" />
				</div>
				<div class="col2">
					<label><?php trad("Prénom", "First name") ?></label>
					<input required type="text" name="prenom" id="fi-prenom" />
					<label><?php trad("Votre email", "Your email") ?></label>
					<input required type="text" name="email" id="fi-email" />
					<label><?php trad("Ville", "City") ?></label>
					<input required type="text" name="ville" id="fi-ville" />
					<label><?php trad("Pays", "Country") ?></label>
					<input required type="text" name="pays" id="fi-pays" />
				</div>
				<div id="separateur-form"></div>
				<h1><?php trad("Les données de<br/>votre projet", "You project's<br/>data") ?><span id="title_line"></span></h1>
				<div class="col1">
					<label><?php trad("Votre biographie", "Your biography") ?></label>
					<textarea required name="biographie" id="fi-biographie"></textarea>
				</div>
				<div class="col2">
					<label><?php trad("Le texte de présentation de votre projet", "Presentation text of your work") ?></label>
					<textarea required name="presentation" id="fi-presentation"></textarea>
				</div>
				<div class="col1">
					<label><?php trad("Vos photographies", "Your photos") ?></label>
					<div class="ajout-photo">
						<span class="chemin-photo"><?php trad("Ajouter une photographie", "Add a picture") ?></span>
						<input required type="file" name="photo[]" id="fi-photo-1" />
					</div>
					<div class="ajout-photo">
						<span class="chemin-photo"><?php trad("Ajouter une photographie", "Add a picture") ?></span>
						<input type="file" name="photo[]" id="fi-photo-2" />
					</div>
					<div class="ajout-photo">
						<span class="chemin-photo"><?php trad("Ajouter une photographie", "Add a picture") ?></span>
						<input type="file" name="photo[]" id="fi-photo-3" />
					</div>
				</div>
				<div class="col2">
					<div class="faux-label"></div>
					<div class="ajout-photo">
						<span class="chemin-photo"><?php trad("Ajouter une photographie", "Add a picture") ?></span>
						<input type="file" name="photo[]" id="fi-photo-4" />
					</div>
					<div class="ajout-photo">
						<span class="chemin-photo"><?php trad("Ajouter une photographie", "Add a picture") ?></span>
						<input type="file" name="photo[]" id="fi-photo-5" />
					</div>
				</div>
				<div id="bloc-validation">
					<input type="submit" value="<?php trad("Envoyer", "Send") ?>" id="fi-envoyer" />
					<span class="notification-formulaire">
						<?php trad("Tous les champs sont obligatoires", "All fields are mandatory") ?>
					</span>
				</div>
            </form>
        </div>
    </section>
    <?php
		include "pied.php";
		deconnexion($link);
	?>
</body>
</html>