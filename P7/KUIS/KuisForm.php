<?php
$output = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = htmlspecialchars(trim($_POST['nama'] ?? ''));
    $aksi   = $_POST['aksi'] ?? '';
    $jumlah = (int)($_POST['jumlah'] ?? 0);

    if ($nama !== '' && in_array($aksi, ['Melangkah', 'Melompat']) && $jumlah > 0) {
        for ($i = 1; $i <= $jumlah; $i++) {
            $output[] = "$nama $aksi $i kali";
        }
        $output[] = "$nama berhenti $aksi";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Aksi</title>
</head>
<body>

<form method="POST">
    Nama :  <input type="text" name="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>"><br>
    Aksi :  <input type="radio" name="aksi" value="Melangkah" <?= (($_POST['aksi'] ?? '') === 'Melangkah') ? 'checked' : '' ?>> Melangkah
            <input type="radio" name="aksi" value="Melompat" <?= (($_POST['aksi'] ?? 'Melompat') === 'Melompat') ? 'checked' : '' ?>> Melompat<br>
    Jumlah : <input type="text" name="jumlah" value="<?= isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : '' ?>"><br>
    <input type="submit" value="Go">
</form> 

<?php if (!empty($output)): ?>
    <br>
    <?php foreach ($output as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>