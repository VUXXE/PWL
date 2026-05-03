<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tiket Bola SEA GAMES 2018</title>
</head>
<body>

<h2>FORM TIKET BOLA SEAGEMES 2018</h2>
<h3>INDONESIA VS MALAYSIA</h3>
PUKUL 15.00 WIB
<br><br>

<form method="POST" action="">
    NAMA PEMESAN = <input type="text" name="nama"><br><br>
    TELP = <input type="text" name="telp"><br><br>
    JENIS TIKET = 
    <select name="jenis_tiket">
        <option value="VIP">VIP</option>
        <option value="BIASA">BIASA</option>
    </select><br><br>
    JUMLAH TIKET = <input type="number" name="jumlah"><br><br>
    <button type="submit" name="simpan">SIMPAN</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jenis_tiket = $_POST['jenis_tiket'];
    $jumlah = $_POST['jumlah'];

    // Harga tiket berdasarkan jenis
    if ($jenis_tiket == "VIP") {
        $harga = 500000;
    } else {
        $harga = 250000;
    }

    $total_bayar = $harga * $jumlah;
?>

<br><hr><br>

<h3>DATA PEMESANAN TIKET BOLA SEAGEMES 2018</h3>
<h3>INDONESIA VS MALAYSIA</h3>
PUKUL 15.00 WIB
<br><br>

Nama : <?php echo $nama; ?><br>
Telp : <?php echo $telp; ?><br>
Jenis Tiket : <?php echo $jenis_tiket; ?><br>
Harga Tiket : <?php echo $harga; ?><br>
Banyaknya Tiket : <?php echo $jumlah; ?><br>
Total Bayar : <?php echo $total_bayar; ?>

<?php
}
?>

</body>
</html>