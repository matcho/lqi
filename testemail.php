<?php
$notif_from = "From: ipn-tabarnak@laquatriemeimage.com";
$notif_to = "mathias.chouet@gmail.com";
foreach ($_GET as $key => $value) {
	$text.= $key . " = " .$value ."\n\n";
}
mail($notif_to, "Salut Mathias !", $text . "\n\n" . "comment ça va, sinon ?", $notif_from);
?>