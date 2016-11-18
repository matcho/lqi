<?php
/**
 * Bibliothèque de fonctions PHP - dépasse maintenant le cadre de la base de
 * données - penser à changer de nom
 */

// à cause du "deprecated" de mysql_connect @TODO remplacer par PDO un jour
ini_set("error_reporting", E_ALL ^ E_DEPRECATED);

// Connexion à la BD
function connexion() {
	$hostname = "";
	$username = "";
	$password = "";
	$database = "";
	$link = mysql_connect($hostname, $username, $password);
	mysql_select_db($database);
	mysql_query("SET NAMES utf8");

	return $link;
}

function requete($req) {
	return mysql_query($req);
}

function prot($str) {
	return mysql_real_escape_string($str);
}

function deconnexion($link) {
	mysql_close($link);
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
?>