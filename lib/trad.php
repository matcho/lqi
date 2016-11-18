<?php
// gestion de la traduction
$langue = 'fr';
if (isset($_GET['langue'])) {
	$langue = $_GET['langue'];
} elseif (isset($_SESSION['langue'])) {
	$langue = $_SESSION['langue'];
}
$_SESSION['langue'] = $langue;

// Si on est en anglais et que la deuxième chaîne ($en) n'est pas vide, on l'affiche;
// dans tous les autres cas on affiche la première chaîne ($fr).
// si $return == true, retourne la chaîne au lieu de l'afficher
function trad($fr, $en, $return = false) {
	if ($_SESSION['langue'] == 'en') {
		if ($en != '') {
			if ($return === true) {
				return $en;
			} else {
				echo $en;
				return;
			}
		}
	}
	if ($return === true) {
		return $fr;
	} else {
		echo $fr;
	}
}
?>