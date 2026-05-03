<?php
/**
 * Fungsi untuk menghitung nilai akhir KHS berdasarkan bobot:
 * Tugas: 20%, UTS: 30%, UAS: 50%
 */
function hitungHasilKHS($tugas, $uts, $uas) {
    // Menghitung nilai berdasarkan rumus yang diberikan
    $nilaiAkhir = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
    return $nilaiAkhir;
}

/**
 * Fungsi untuk menentukan Grade (A, B, C, atau D)
 * berdasarkan nilai KHS yang sudah dihitung.
 */
function tentukanGrade($nilai) {
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}

//--- CONTOH PENGGUNAAN
$nilaiTugas = 85;
$nilaiUTS = 75;
$nilaiUAS = 95;

// 1. Hitung angka nilai akhir
$hasilAngka = hitungHasilKHS($nilaiTugas, $nilaiUTS, $nilaiUAS);

// 2. Tentukan huruf grade berdasarkan angka tersebut
$grade = tentukanGrade($hasilAngka);

// 3. Tampilkan hasil
echo "--- Laporan KHS Mahasiswa --- <br>";
echo "Nilai Tugas: $nilaiTugas <br>";
echo "Nilai UTS: $nilaiUTS <br>";
echo "Nilai UAS: $nilaiUAS <br>";
echo "--- <br>";
echo "Total Nilai KHS: <b>$hasilAngka</b> <br>";
echo "Grade Anda: <b>$grade</b>";
?>