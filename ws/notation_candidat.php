<?php
include "../lib/bdd.php";
$link = connexion();

$id = $_GET['id_candidat'];
$note = $_GET['note'];
if ($note == '') {
	$note = 'NULL';
}

$req = "UPDATE lqi_inscrits SET note=$note WHERE id_commande='$id';";
$ok = requete($req);

deconnexion($link);

// réponse JSON
header("Content-type: application/json; charset=utf-8");
echo $ok === false ? 'false' : 'true';
?>