<?php
$notif_from = "From: ";
$notif_to = "";
foreach ($_GET as $key => $value) {
	$text.= $key . " = " .$value ."\n\n";
}
mail($notif_to, "Salut !", $text . "\n\n" . "comment ça va, sinon ?", $notif_from);
?>