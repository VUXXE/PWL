<?php
function Jumlahkan($x, $y) {
    $hasil = $x + $y;
    return $hasil;
}

$bil = 0;
echo "Nilai bil mula-mula adalah ". $bil . "<br>";

$bil = Jumlahkan(3, 4);
echo "Nilai bil setelah memanggil function adalah " . $bil . "<br>";
?>