<?php
include "../lib/bdd.php";
$link = connexion();

$email = $_GET['email'];
$nom = $_GET['nom'];

$req = "INSERT INTO lqi_newsletter VALUES ('$email', '$nom', 1);";
$ok = requete($req);

deconnexion($link);

// réponse JSON
header("Content-type: application/json; charset=utf-8");
echo $ok === false ? 'false' : 'true';
?>