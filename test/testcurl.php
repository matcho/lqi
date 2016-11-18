<?php
$fp = curl_init('https://www.sandbox.paypal.com/cgi-bin/webscr');
curl_setopt($fp, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_RETURNTRANSFER,1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($fp, CURLOPT_FORBID_REUSE, 1);
curl_setopt($fp, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_setopt($fp, CURLOPT_VERBOSE, true);
curl_setopt($fp, CURLOPT_FOLLOWLOCATION, 1);
$verbose = fopen('logmoisi.txt', 'rw+');
curl_setopt($fp, CURLOPT_STDERR, $verbose);
echo "10b<br/>";

if( !($res = curl_exec($fp)) ) {
	echo "11<br/>";
	echo "12<br/>";
	printf("cUrl error (#%d): %s<br>\n", curl_errno($fp),
           htmlspecialchars(curl_error($fp)));
	echo "<br/>";
	echo "12b<br/>";
	rewind($verbose);
	$verboseLog = stream_get_contents($verbose);
	echo "Verbose information:\n<pre>", htmlspecialchars($verboseLog), "</pre><br/>";
	echo "12t<br/>";
    curl_close($fp);
    exit;
}
echo "13<br/>";
echo "Résultat:\n\n";
print_r($res);
echo "<br/><br/>--fini";
curl_close($fp);
echo "14<br/>";
?>