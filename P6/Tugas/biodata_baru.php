<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata - Refactored</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h2>Form Biodata</h2>
            <p>Sistem Informasi Data Mahasiswa</p>
        </div>
        <form method="POST" action="hasil_baru.php" class="card-body">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Nama lengkap">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="options">
                    <label><input type="radio" name="gender" value="Laki-Laki" checked> Laki-Laki</label>
                    <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label>Hobi</label>
                <div class="options grid">
                    <?php foreach ($list_hobby as $h): ?>
                        <label><input type="checkbox" name="hobby[]" value="<?= $h ?>"> <?= $h ?></label>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <select name="pendidikan" required>
                    <option value="">-- Pilih Pendidikan --</option>
                    <?php foreach ($list_pendidikan as $p): ?>
                        <option value="<?= $p ?>"><?= $p ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea name="alamat" rows="3" placeholder="Jl. Raya No. 123..."></textarea>
            </div>

            <button type="submit" class="btn-primary">Kirim Biodata</button>
        </form>
    </div>
</body>

</html>