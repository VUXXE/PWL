<?php 
require_once 'config.php';

// Validasi akses langsung
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: biodata_baru.php");
    exit;
}

// Sanitasi data dari POST
$nama       = input_safe($_POST['nama']);
$password   = $_POST['password'];
$gender     = input_safe($_POST['gender']);
$hobbies    = isset($_POST['hobby']) ? input_safe($_POST['hobby']) : [];
$pendidikan = input_safe($_POST['pendidikan']);
$alamat     = input_safe($_POST['alamat']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata - Refactored</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="card-header bg-primary">
            <h2 style="color: white">Ringkasan Biodata</h2>
        </div>
        <div class="card-body">
            <table class="result-table">
                <tr>
                    <td>Nama</td>
                    <td>: <strong><?= $nama ?></strong></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <span class="badge success">Data Tersimpan</span></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>: <?= $gender ?></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>: <?= !empty($hobbies) ? implode(", ", $hobbies) : "-" ?></td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>: <?= $pendidikan ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="address-cell">: <?= nl2br($alamat) ?></td>
                </tr>
            </table>
            
            <div class="actions">
                <a href="biodata_baru.php" class="btn-outline">Kembali</a>
                <button onclick="window.print()" class="btn-primary">Cetak PDF</button>
            </div>
        </div>
    </div>
</body>
</html>