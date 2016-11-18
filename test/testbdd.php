<?php
include "lib/bdd.php";
$link = connexion();
if (!$link) {
	echo "<p><strong>Impossible de se connecter au serveur MySQL " . $hostname . ".</strong></p>";
	echo "<pre style='border: 1px dotted #666666;padding:10px;'><code>";
	echo mysql_error();
	echo "</code></pre>\r\n";
} else {
	echo "<p>Connexion réussie au serveur MySQL </strong>" . $hostname . "</strong> :</p>";
	echo "<pre style='border: 1px dotted #666666;padding:10px;'><code>";
	printf("Version du client MySQL : %s\r\n", mysql_get_client_info());
	printf("Hôte MySQL : %s\r\n", mysql_get_host_info());
	printf("Version du serveur MySQL : %s\r\n", mysql_get_server_info());
	printf("Version du protocole : %s\r\n", mysql_get_proto_info());
	echo "</code></pre>\r\n";
	$res = mysql_query("SELECT * FROM lqi_inscrits;");
	while ($ligne = mysql_fetch_assoc($res)) {
		print_r($ligne);
		echo "<br/><br/>";
	}
	echo "<h3>TEST INSERTION</h3>";
	$texte = "Ça a été à deux doigts d'être bô !";
	$req = "UPDATE lqi_inscrits SET biographie='" . prot($texte) . "' WHERE id_commande='413aef158f5af6a9fb01bf20efd6e620f6947cc9';";
	requete($req);
}
deconnexion($link);
?>