$(document).ready(function() {

	// --------------- Participer -------------------------------

	$('#basculer-conditions').click(function(evt) {
		var texte = $('#text_condition'),
			icone = $('.fleche-conditions');
		if (texte.css('display') != 'none') {
			texte.hide('fast');
			icone.attr('src', '../img/bas_noir.png');
		} else {
			texte.show('fast');
			icone.attr('src', '../img/haut_noir.png');
		}
		evt.preventDefault();
	});

	// patch pour forcer à saisir un email avant de payer - DÉSACTIVÉ
	// écouteurs sur les boutons de la modale
	/*$('.easyModal').easyModal({
		onOpen: function(modale) {
			$('#email-valide').val("");
			$('#acceder-paiement').prop('disabled', false);
			$('#annuler-paiement').prop('disabled', false);
			$('#acceder-paiement').click(function() {
				var emailValide = $('#email-valide').val();
				if (emailValide.match(/^.+@.+\..+$/)) {
					var cible = $('section.concours.content').data('cible'),
						form = $('form[data-cible="' + cible + '"]'),
						custom = form.find('input[name="custom"]');
					custom.val(custom.val() + '||' + emailValide);
					$('#acceder-paiement').prop('disabled', true);
					$('#annuler-paiement').prop('disabled', true);
					form.submit()
				}
			});
			$('#annuler-paiement').click(function() {
				$(modale).trigger('closeModal');
			});
		}
	});*/

	// patch pour forcer à saisir un email avant de payer - DÉSACTIVÉ
	/*$('input.bouton.inscrire').click(function(evt) {
		var cible = $(this).parent().data('cible');
		$('section.concours.content').data('cible', cible);
		$('#modale-email').trigger('openModal');
		evt.preventDefault;
		return false;
	});*/

	$('input[name="radio-choix"]').click(function(evt) {
		evt.preventDefault();
	});
	/*$('input[name="radio-choix"]').change(function() {
		var choix = $(this).data("choix"),
			prix = 35;
		if (choix == 'jeunes_talents') {
			prix = 15;
		}
		$('.inscription.explication').hide();
		$('.inscription.explication.' + choix).show();
		$('#montant-euros').html(prix);
	});*/

	// input file décoré pour les photos
	$(".ajout-photo input").change(function() {
		$(this).parent().find('.chemin-photo').html($(this).val());
	});

	// --------------- Le salon -------------------------------

	// textes intro
	$('section.lesalon.intro #nav_concour a').click(function(evt) {
		var contenu = $(this).data('contenu');
		$('section.lesalon.intro #presentation').hide();
		$('section.lesalon.intro #presentation[data-contenu="' + contenu + '"]').fadeIn("fast");
		$('section.lesalon.intro #nav_concour a.active').removeClass("active");
		$(this).addClass("active");
		evt.preventDefault();
	});

	// défilement citations
	var idxCitation = 0;
	$('section.lesalon.citation .controle a').click(function(evt) {
		idxCitation = $(this).data('idx') - 1;
		chargerCitation();
		evt.preventDefault();
	});
	var defilementCitation = setInterval(citationSuivante, 10000);
	function citationSuivante() {
		idxCitation = (idxCitation + 1) % 3;
		chargerCitation();
	}
	function chargerCitation() {
		$('section.lesalon.citation .citation-centrale').hide();
		var nouvelleCitation = $('section.lesalon.citation .citation-centrale[data-idx="' + (idxCitation + 1) + '"]');
		nouvelleCitation.fadeIn("fast");
		// astuce cracra
		var couleur = nouvelleCitation.data('couleur');
		$('section.lesalon.citation').removeClass('bg-red');
		$('section.lesalon.citation').removeClass('bg-blue');
		$('section.lesalon.citation').removeClass('bg-yellow');
		$('section.lesalon.citation').addClass('bg-' + couleur);
		$('section.lesalon.citation .controle a.active').removeClass("active");
		$('section.lesalon.citation .controle a[data-idx="' + (idxCitation + 1) + '"]').addClass("active");
	}

	// les 3 catégories
	$('section.lesalon.programmes .controle a').click(function(evt) {
		var idx = $(this).data('idx');
		$('section.lesalon.programmes .contenu-programme').hide();
		$('section.lesalon.programmes .contenu-programme[data-idx="' + idx + '"]').fadeIn("fast");
		$('section.lesalon.programmes .controle a.active').removeClass("active");
		$('section.lesalon.programmes .controle a[data-idx="' + idx + '"]').addClass("active");
		evt.preventDefault();
	});

	// vidéos
	$('section.lesalon.videos .defiler-gauche').click(function(evt) {
		// prendre l'index de la plus à gauche
		var idx = $('section.lesalon.videos .video-bloc:visible:first').data('idx');
		if (idx > 1) {
			defilerVideos(idx-1);
		}
		evt.preventDefault();
	});
	$('section.lesalon.videos .defiler-droite').click(function(evt) {
		// prendre l'index de la plus à gauche
		var idx = $('section.lesalon.videos .video-bloc:visible:last').data('idx');
		if (idx < 6) {
			defilerVideos(idx-1);
		}
		evt.preventDefault();
	});
	// affiche 3 vidéos : idxMin, idxMin+1 et idxMin+2
	function defilerVideos(idxMin) {
		$('section.lesalon.videos .video-bloc:visible').removeClass('central');
		$('section.lesalon.videos .video-bloc:visible').hide();
		$('section.lesalon.videos .video-bloc[data-idx="' + idxMin + '"]').fadeIn("fast");
		$('section.lesalon.videos .video-bloc[data-idx="' + (idxMin + 1) + '"]').addClass('central');
		$('section.lesalon.videos .video-bloc[data-idx="' + (idxMin + 1) + '"]').fadeIn("fast");
		$('section.lesalon.videos .video-bloc[data-idx="' + (idxMin + 2) + '"]').fadeIn("fast");
	}

	// défilement actus
	var idxActu = 0;
	$('section.lesalon.actualites .controle a').click(function(evt) {
		idxActu = $(this).data('idx') - 1;
		chargerActu();
		evt.preventDefault();
	});
	var defilementActu = setInterval(actuSuivante, 5000);
	function actuSuivante() {
		var actuMax = $('section.lesalon.actualites .actu-bloc:last').data('idx');
		//alert('actumax: ' + actuMax);
		idxActu = (idxActu + 1) % actuMax;
		chargerActu();
	}
	function chargerActu() {
		$('section.lesalon.actualites .actu-bloc').hide();
		$('section.lesalon.actualites .actu-bloc[data-idx="' + (idxActu + 1) + '"]').fadeIn("fast");
		$('section.lesalon.actualites .controle a.active').removeClass("active");
		$('section.lesalon.actualites .controle a[data-idx="' + (idxActu + 1) + '"]').addClass("active");
	}

	// photos de l'espace Blancs-Manteaux
	var idxEbm = 0;
	$('section.lesalon.espace .controle a').click(function(evt) {
		idxEbm = $(this).data('idx');
		chargerEbm();
		evt.preventDefault();
	});
	var defilementEbm = setInterval(ebmSuivant, 5000);
	function ebmSuivant() {
		var ebmMax = $('section.lesalon.espace .cold:last').data('idx') + 1;
		idxEbm = (idxEbm + 1) % ebmMax;
		chargerEbm();
	}
	function chargerEbm() {
		$('section.lesalon.espace img').hide();
		$('section.lesalon.espace img[data-idx="' + idxEbm + '"]').fadeIn("fast");
		$('section.lesalon.espace .controle a.active').removeClass("active");
		$('section.lesalon.espace .controle a[data-idx="' + idxEbm + '"]').addClass("active");
	};

	// --------------- Les exposants ---------------------

	// diaporamas
	ajusterTotalPhotosEX();
	$('section.exposants.diaporama .fleche-gauche').click(function(evt) {
		defilerDiaporamaEX($(this), -1);
		evt.preventDefault();
	});
	$('section.exposants.diaporama .fleche-droite').click(function(evt) {
		defilerDiaporamaEX($(this), 1);
		evt.preventDefault();
	});
	function defilerDiaporamaEX(fleche, modif) {
		var idxMax = fleche.parent().parent().parent().find('div.image').find('img:last').data('idx'),
			idx = fleche.parent().parent().parent().find('div.image img:visible').data('idx');
		nouvelIdx = idx + modif;
		if (nouvelIdx < 0) {
			nouvelIdx = idxMax;
		}
		if (nouvelIdx > idxMax) {
			nouvelIdx = 0;
		}
		chargerPhotoEX(nouvelIdx);
		// lien plein écran
		/*var lienPE = $('section.exposants.diaporama:visible a.lien-plein-ecran');
		lienPE.attr('href', lienPE.data('base-href') + nouvelIdx);*/
	}
	function chargerPhotoEX(idx) {
		$('section.exposants.diaporama:visible .image img').hide();
		$('section.exposants.diaporama:visible .image img[data-idx="' + idx + '"]').fadeIn("fast");
		$('section.exposants.diaporama:visible .commentaire-diaporama').hide();
		$('section.exposants.diaporama:visible .commentaire-diaporama[data-idx="' + idx + '"]').fadeIn("fast");
		$('section.exposants.diaporama:visible .numero-photo').html(idx + 1);
	}
	function ajusterTotalPhotosEX() {
		var idxMax = $('section.exposants.diaporama:visible .image').find('img:last').data('idx');
		$('section.exposants.diaporama:visible .total-photos').html(idxMax + 1);
	}

	// accès direct photographe
	$('section.exposants.liste ul.liste-exposants li a').click(function(evt) {
		var idx = $(this).data('idx');
		chargerPhotoEX(idx);
		$(window).scrollTop($('.conteneur-diaporama:visible').offset().top - 130);
		evt.preventDefault();
	});

	// Changement d'année
	$('section.exposants.intro ul#nav_concour li a').click(function(evt) {
		var annee = $(this).data("annee");
		$('section.exposants.intro ul#nav_concour li a').removeClass('active');
		$(this).addClass('active');
		$('section.exposants.intro #presentation').hide();
		$('section.exposants.intro #presentation[data-annee="' + annee + '"]').fadeIn('fast');
		$('section.exposants.liste').hide();
		$('section.exposants.liste[data-annee="' + annee + '"]').fadeIn('fast');
		$('section.exposants.diaporama').hide();
		$('section.exposants.diaporama[data-annee="' + annee + '"]').fadeIn('fast');
		ajusterTotalPhotosEX();
		evt.preventDefault();
	});

	// --------------- Les jeunes talents ---------------------

	// changement photographe
	$('section.jeunes_talents.bandeau .entete-photographe ul.controle li a').click(function(evt) {
		var nom = $(this).data('nom');
		$('section.jeunes_talents.bandeau .entete-photographe').hide();
		$('section.jeunes_talents.bandeau .entete-photographe[data-nom="' + nom + '"]').fadeIn('fast');
		$('section.jeunes_talents.diaporama').hide();
		$('section.jeunes_talents.diaporama[data-nom="' + nom + '"]').fadeIn('fast');
		evt.preventDefault();
	});

	// diaporamas
	ajusterTotalPhotosJT();
	$('section.jeunes_talents.diaporama .fleche-gauche').click(function(evt) {
		defilerDiaporamaJT($(this), -1);
		evt.preventDefault();
	});
	$('section.jeunes_talents.diaporama .fleche-droite').click(function(evt) {
		defilerDiaporamaJT($(this), 1);
		evt.preventDefault();
	});
	function defilerDiaporamaJT(fleche, modif) {
		var idxMax = fleche.parent().parent().parent().find('div.image').find('img:last').data('idx'),
			idx = fleche.parent().parent().parent().find('div.image img:visible').data('idx');
		nouvelIdx = idx + modif;
		if (nouvelIdx < 0) {
			nouvelIdx = idxMax;
		}
		if (nouvelIdx > idxMax) {
			nouvelIdx = 0;
		}
		$('section.jeunes_talents.diaporama:visible .image img').hide();
		$('section.jeunes_talents.diaporama:visible .image img[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('section.jeunes_talents.diaporama:visible .commentaire-diaporama').hide();
		$('section.jeunes_talents.diaporama:visible .commentaire-diaporama[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('section.jeunes_talents.diaporama:visible .numero-photo').html(nouvelIdx + 1);
		// lien plein écran
		/*var lienPE = $('section.jeunes_talents.diaporama:visible a.lien-plein-ecran');
		lienPE.attr('href', lienPE.data('base-href') + nouvelIdx);*/
	}

	function ajusterTotalPhotosJT() {
		var idxMax = $('section.jeunes_talents.diaporama .image').find('img:last').data('idx');
		$('section.jeunes_talents.diaporama .total-photos').html(idxMax + 1);
	}

	// --------------- Les prix photos ---------------------

	// changement photographe
	$('section.prix_photos.bandeau .entete-photographe ul.controle li a').click(function(evt) {
		var nom = $(this).data('nom');
		$('section.prix_photos.bandeau .entete-photographe').hide();
		$('section.prix_photos.bandeau .entete-photographe[data-nom="' + nom + '"]').fadeIn('fast');
		$('section.prix_photos.diaporama').hide();
		$('section.prix_photos.diaporama[data-nom="' + nom + '"]').fadeIn('fast');
		evt.preventDefault();
	});

	// diaporamas
	ajusterTotalPhotosPP();
	$('section.prix_photos.diaporama .fleche-gauche').click(function(evt) {
		defilerDiaporamaPP($(this), -1);
		evt.preventDefault();
	});
	$('section.prix_photos.diaporama .fleche-droite').click(function(evt) {
		defilerDiaporamaPP($(this), 1);
		evt.preventDefault();
	});
	function defilerDiaporamaPP(fleche, modif) {
		var idxMax = fleche.parent().parent().parent().find('div.image').find('img:last').data('idx'),
			idx = fleche.parent().parent().parent().find('div.image img:visible').data('idx');
		nouvelIdx = idx + modif;
		if (nouvelIdx < 0) {
			nouvelIdx = idxMax;
		}
		if (nouvelIdx > idxMax) {
			nouvelIdx = 0;
		}
		$('section.prix_photos.diaporama:visible .image img').hide();
		$('section.prix_photos.diaporama:visible .image img[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('section.prix_photos.diaporama:visible .commentaire-diaporama').hide();
		$('section.prix_photos.diaporama:visible .commentaire-diaporama[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('section.prix_photos.diaporama:visible .numero-photo').html(nouvelIdx + 1);
		// lien plein écran
		/*var lienPE = $('section.prix_photos.diaporama:visible a.lien-plein-ecran');
		lienPE.attr('href', lienPE.data('base-href') + nouvelIdx);*/
	}

	function ajusterTotalPhotosPP() {
		var idxMax = $('section.prix_photos.diaporama .image').find('img:last').data('idx');
		$('section.prix_photos.diaporama .total-photos').html(idxMax + 1);
	}

	// --------------- Diaporama plein écran ----------------------------
	
	ajusterTotalPhotosDPE();
	ajusterCopyrightSPE();
	$('#diaporama-plein-ecran .fleche-gauche').click(function(evt) {
		defilerDiaporamaDPE($(this), -1);
		evt.preventDefault();
	});
	$('#diaporama-plein-ecran .fleche-droite').click(function(evt) {
		defilerDiaporamaDPE($(this), 1);
		evt.preventDefault();
	});
	function defilerDiaporamaDPE(fleche, modif) {
		var idxMax = $('#diaporama-plein-ecran .conteneur-image').find('img:last').data('idx'),
			idx =  $('#diaporama-plein-ecran .conteneur-image').find('img:visible').data('idx');
		nouvelIdx = idx + modif;
		if (nouvelIdx < 0) {
			nouvelIdx = idxMax;
		}
		if (nouvelIdx > idxMax) {
			nouvelIdx = 0;
		}
		$('#diaporama-plein-ecran .conteneur-image img').hide();
		$('#diaporama-plein-ecran .conteneur-image img[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('#colonnemenu .bio').hide();
		$('#colonnemenu .bio[data-idx="' + nouvelIdx + '"]').fadeIn("fast");
		$('#diaporama-plein-ecran .numero-photo').html(nouvelIdx + 1);
		ajusterCopyrightSPE();
	}

	function ajusterTotalPhotosDPE() {
		var idxMax = $('#diaporama-plein-ecran .conteneur-image').find('img:last').data('idx');
		$('#diaporama-plein-ecran .total-photos').html(idxMax + 1);
	}

	function ajusterCopyrightSPE() {
		var nom = $('#colonnemenu h2:visible').html();
		$('#diaporama-plein-ecran .copyright-image').html('© ' + nom);
	}

	// --------------- Le jury --------------------------------

	// changement année
	$('section.jury_intro #nav_concour a').click(function(evt) {
		var annee = $(this).data('annee');
		$('section.jury_intro #presentation').hide();
		$('section.jury_intro #presentation[data-annee="' + annee + '"]').fadeIn("fast");
		$('section.jury.equipe #content').hide();
		$('section.jury.equipe #content[data-annee="' + annee + '"]').fadeIn("fast");
		$('section.jury_intro #nav_concour a.active').removeClass("active");
		$(this).addClass("active");
		evt.preventDefault();
	});

	// --------------- Lecture de portfolios -----------------------

	// changement année
	$('section.lecture_portfolios_intro #nav_concour a').click(function(evt) {
		var date = $(this).data('date');
		$('section.lecture_portfolios_programme').hide();
		$('section.lecture_portfolios_programme[data-date="' + date + '"]').fadeIn("fast");
		$('section.lecture_portfolios_intro #nav_concour a.active').removeClass("active");
		$(this).addClass("active");
		// scroll au début du programme
		$(window).scrollTop($('.lecture-debut-programme:visible').offset().top - 130);
		evt.preventDefault();
	});

	// --------------- Backoffice -------------------------------

	$('#envoyer-newsletter').click(function(evt) {
		if (! confirm("Envoyer ce message aux destinataires ci-dessous ?")) {
			evt.preventDefault();
		}
	});

	$('#enregistrer-actu').click(function(evt) {
		var verbe = $(this).val();
		if (! confirm(verbe + " l'actualité ? Elle sera publiée immédiatement sur le site.")) {
			evt.preventDefault();
		}
	});

	$('.suppression-actu').click(function(evt) {
		var id = $(this).data('id-actu');
		if (confirm("Supprimer l'actualité (définitif) ?")) {
			$.getJSON('../ws/suppression_actu.php?id_actu=' + id, function() {
				console.log('OK');
				$('div.bo-actualite[data-id="' + id + '"]').hide();
			}).fail(function() {
				alert("erreur : l'actualité n'a pas été supprimée");
			});
		}
		evt.preventDefault();
	});

	$('.notation-candidat').change(function() {
		var id = $(this).data('id-candidat'),
			note = $(this).val();
		$.getJSON('../ws/notation_candidat.php?note=' + note + '&id_candidat=' + id, function() {
			console.log('OK');
		}).fail(function() {
			alert("erreur : la note n'a pas été enregistrée");
		});
	});

	$('#inscription-newsletter').click(function(evt) {
		var email = $('#nl-email').val(),
			nom = $('#nl-nom').val();
		if (email == '' || nom == '') {
			alert('Saisissez votre nom et votre adresse email');
		} else {
			$.getJSON('../ws/inscription_newsletter.php?nom=' + nom + '&email=' + email, function(data) {
				alert('Vous êtes inscrit à la newsletter, ' + nom);
				$('#nl-email').val('');
				$('#nl-nom').val('');
			}).fail(function() {
				alert('Erreur');
			});
		}
		evt.preventDefault();
	});


	$('#tout-cocher').click(function(evt) {
		$('input[type="checkbox"]').prop('checked', true);
	});
	$('#tout-decocher').click(function(evt) {
		$('input[type="checkbox"]').prop('checked', false);
	});
});
