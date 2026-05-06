<?php
$luas_dinding  = 3 * 4;
$luas_pintu    = 1 * 2;
$luas_jendela  = 1 * 1;
$luas_dicat    = $luas_dinding - $luas_pintu - $luas_jendela;

// Asumsi: biaya cat Rp25.000/m² Karena tidak tertera di Soal
$hargaCat      = 25_000; 
$total_biaya   = $luas_dicat * $hargaCat;

echo "Luas Dicat  : $luas_dicat m²<br>";
echo "Total Biaya : Rp " . number_format($total_biaya, 0, ',', '.') . "<br>";
?>