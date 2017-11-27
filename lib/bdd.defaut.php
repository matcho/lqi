<?php
/**
 * Bibliothèque de fonctions PHP - dépasse maintenant le cadre de la base de
 * données - penser à changer de nom
 */

// Connexion à la BD
function connexion() {
	$hostname = "laquatribddwp.mysql.db";
	$username = "laquatribddwp";
	$password = "";
	$database = "laquatribddwp";
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, $options);

	return $link;
}

function prot($str) {
	return PDO::quote($str);
}

// Template minimal
function renduTemplate($template, $vars = array()) {
	extract($vars);
	ob_start();
	require($template);
	$templateRendu = ob_get_contents();
	ob_end_clean();
	return $templateRendu;
}
