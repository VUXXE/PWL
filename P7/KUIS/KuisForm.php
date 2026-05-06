<!DOCTYPE html>
<html>

<head>
    <title>Kuis Form - Two Containers</title>
</head>

<body>

    <?php
    // Ambil data dari POST
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $aksi = isset($_POST['aksi']) ? $_POST['aksi'] : '';
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $submitted = isset($_POST['submit']);
    ?>

    <div style="border: 1px solid black; display: flex; width: 1000px; min-height: 500px;">

        <div style="flex: 1; border-right: 1px solid black; padding: 10px;">
            <form method="POST">
                Nama : <input type="text" name="nama"><br>
                Aksi :
                <input type="radio" name="aksi" value="Melangkah"> Melangkah
                <input type="radio" name="aksi" value="Melompat"> Melompat<br>
                Jumlah : <input type="text" name="jumlah"><br>
                <input type="submit" name="submit" value="Go">
            </form>
        </div>

        <div style="flex: 1; padding: 10px;">
            <?php if ($submitted): ?>
                Nama : <input type="text" value="<?php echo $nama; ?>" readonly><br>
                Aksi :
                <input type="radio" <?php echo ($aksi == 'Melangkah') ? 'checked' : ''; ?> disabled> Melangkah
                <input type="radio" <?php echo ($aksi == 'Melompat') ? 'checked' : ''; ?> disabled> Melompat<br>
                Jumlah : <input type="text" value="<?php echo $jumlah; ?>" readonly><br>
                <input type="button" value="Go" disabled>

                <div style="margin-top: 20px;">
                    <?php
                    $nama_val = $nama;
                    $aksi_val = $aksi;
                    $jumlah_val = intval($jumlah);

                    if ($nama_val && $aksi_val && $jumlah_val > 0) {
                        for ($i = 1; $i <= $jumlah_val; $i++) {
                            echo "$nama_val $aksi_val $i kali<br>";
                        }
                        echo "$nama_val berhenti $aksi_val<br>";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>

    </div>

</body>

</html>