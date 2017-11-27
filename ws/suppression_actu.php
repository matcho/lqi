<?php
include "../lib/bdd.php";
$link = connexion();

$id = $_GET['id_actu'];
if ($id == null) {
	exit;
}

$req = "DELETE FROM lqi_actualites WHERE id='$id';";
$ok = $link->query($req);

// réponse JSON
header("Content-type: application/json; charset=utf-8");
echo $ok === false ? 'false' : 'true';
?>