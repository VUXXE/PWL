<?php
// Membuat konstanta PHI
define("PHI", 3.14);

// Variabel input (Anda bisa mengubah nilai ini)
$r = 10; // Jari-jari
$t = 20; // Tinggi

// Menghitung volume tabung: PHI * r^2 * t
$volume = PHI * pow($r, 2) * $t;

// Mencetak hasil ke layar
echo "## Perhitungan Volume Tabung\n";
echo "--- \n";
echo "Jari-jari (r) : $r \n";
echo "Tinggi (t)    : $t \n";
echo "Volume Tabung : " . $volume . "\n";
?>