<?php
define("PHI", 3.14);
$r = 10; // Jari-jari
$t = 20; // Tinggi
$volume = PHI * pow($r, 2) * $t;
echo "<b>Perhitungan Volume Tabung</b><br>";
echo "Jari-jari (r) : $r<br>";
echo "Tinggi (t)    : $t<br>";
echo "Volume Tabung : " . $volume . "<br>";
?>