<?php
// Dimensi Dinding
$panjang_dinding = 4;
$lebar_dinding = 3;
$luas_dinding = $panjang_dinding * $lebar_dinding;

// Dimensi Pintu
$panjang_pintu = 1;
$lebar_pintu = 2;
$luas_pintu = $panjang_pintu * $lebar_pintu;

// Dimensi Jendela
$panjang_jendela = 1;
$lebar_jendela = 1;
$luas_jendela = $panjang_jendela * $lebar_jendela;

// Perhitungan Luas Cat dan Biaya
$luas_cat = $luas_dinding - ($luas_pintu + $luas_jendela);
$biaya_per_meter = 25000;
$total_biaya = $luas_cat * $biaya_per_meter;

echo "Luas dinding yang dicat: " . $luas_cat . " m2 <br>";
echo "Total biaya pengecatan: Rp. " . number_format($total_biaya, 0, ',', '.');
?>