$(document).ready(function() {
	var ids = ['01', '02', '03', '04', '05'],
		idxCourant = 0;

	$('#controle a').click(function() {
		idxCourant = $(this).data('idx') - 1;
		chargerDiapo();
		return false;
	});

	var diaporama = setInterval(diapoSuivante, 7500);

	function diapoSuivante() {
		idxCourant = (idxCourant + 1) % 5; // @TODO paramétrer
		chargerDiapo();
	}

	function chargerDiapo() {
		id = ids[idxCourant];
		changerTexte(id);
		changerFond(id);
		//changerLienBody(id);
		activerControle();
	}

	function changerTexte(id) {
		var idTexte = 'texte_home_' + id,
			textes = $('#slide div.box_slide'),
			nouveauTexte = $('#' + idTexte);
		textes.hide();
		nouveauTexte.fadeIn();
	}

	function changerFond(id) {
		var urlImage = 'url(img/bghome_' + id + '.jpg)',
			body = $('body'),
			page = $('#global');
		page.css('background-color', 'rgba(0,0,0,1)');
		body.css('background-image', urlImage);
		fonduPage();
	}

	/*function changerLienBody(id) {
		// cracra !
		var page = "le_salon.php";
		switch(id) {
			case "01":
			case "02":
				page = "le_salon.php";
			break;
			case "03":
				page = "les_jeunes_talents.php";
			break;
			case "04":
				page = "le_prix_photo.php";
			break;
			case "05":
				page = "exposants.php";
			break;
			default:
				page = "le_salon.php";
		}
		var lien = "window.location.href='pgs/" + page + "';";
		$('body').attr('onclick', lien);
	}*/

	function fonduPage() {
		var page = $('#global'),
			op = 1;
		var fondu;
		fondu = setInterval(function() {
			if (op <= 0) {
				clearInterval(fondu);
			}
			op = op - 0.01;
			page.css('background-color', 'rgba(0,0,0,' + op + ')');
		}, 5);
	}

	function activerControle() {
		var controleActif = $('#controle a.active'),
			idx = idxCourant + 1,
			nouveauControle = $('#controle a[data-idx="' + idx + '"]');
		controleActif.removeClass('active');
		nouveauControle.addClass('active');
	}

});
