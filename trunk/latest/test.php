<?php

$mt = micromy_microtime();
$mta = explode(" ",$mt);
$mt = $mta[1].$mta[0];
$mt = str_replace("0.", "", $mt);

echo $mt."<br>";

?>