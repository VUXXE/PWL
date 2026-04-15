<?php
echo "<h2>Contoh Gabungan Operator PHP</h2>";

// 1. Operator Aritmatika
$x = 10;
$y = 3;
echo "<b>1. Aritmatika:</b><br>";
echo "$x + $y = " . ($x + $y) . "<br>"; // Penjumlahan
echo "$x % $y = " . ($x % $y) . "<br>"; // Sisa Bagi (Modulus)
echo "<hr>";

// 2. Operator Penugasan
$score = 100;
echo "<b>2. Penugasan:</b><br>";
$score += 50; // Sama dengan $score = $score + 50
echo "Score baru (+50): $score <br>";
echo "<hr>";

// 3. Operator Perbandingan (Relasi)
$user_age = 18;
$min_age = 17;
echo "<b>3. Perbandingan:</b><br>";
echo "Apakah 18 >= 17? ";
var_dump($user_age >= $min_age); // var_dump menampilkan tipe data (bool)
echo "<br><hr>";

// 4. Operator Logika
$has_token = true;
$is_admin = false;
echo "<b>4. Logika:</b><br>";
echo "Bisa akses? (Token AND Admin): ";
var_dump($has_token && $is_admin);
echo "<br><hr>";

// 5. Operator Bitwise (Operasi pada level Bit/Biner)
// Angka 6 dalam biner: 110
// Angka 3 dalam biner: 011
$a = 6; 
$b = 3;
echo "<b>5. Bitwise:</b><br>";
echo "6 & 3 (AND bitwise) = " . ($a & $b) . "<br>"; // Hasilnya 2 (biner: 010)
echo "6 | 3 (OR bitwise) = " . ($a | $b) . "<br>";  // Hasilnya 7 (biner: 111)
?>