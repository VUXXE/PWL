<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Form Biodata</title>
    <style>
        body { font-family: sans-serif; display: flex; gap: 50px; padding: 20px; }
        .form-container { border-right: 1px solid #ccc; padding-right: 50px; }
        table tr td { padding: 5px; vertical-align: top; }
        h2 { text-transform: uppercase; }
    </style>
</head>
<body>

    <!-- Sisi Kiri: Form Input -->
    <div class="form-container">
        <h2>FORM BIODATA</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki <br>
                        <input type="radio" name="gender" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="Korespondensi"> Korespondensi <br>
                        <input type="checkbox" name="hobby[]" value="Traveling"> Traveling <br>
                        <input type="checkbox" name="hobby[]" value="Shopping"> Shopping
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="simpan">Simpan</button></td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Sisi Kanan: Hasil Output -->
    <div class="output-container">
        <h3>Hasil Outputnya :</h3>
        <?php
        if (isset($_POST['simpan'])) {
            echo "<h1>Biodata Anda</h1>";
            
            $nama = $_POST['nama'];
            $gender = isset($_POST['gender']) ? $_POST['gender'] : "-";
            $pendidikan = $_POST['pendidikan'];
            $alamat = $_POST['alamat'];
            
            // Mengolah Hobby (karena berbentuk array/banyak pilihan)
            $hobi_list = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "-";

            echo "<table>";
            echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
            echo "<tr><td>Gender</td><td>:</td><td>$gender</td></tr>";
            echo "<tr><td>Hobby</td><td>:</td><td>$hobi_list</td></tr>";
            echo "<tr><td>Pendidikan</td><td>:</td><td>$pendidikan</td></tr>";
            echo "<tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>";
            echo "</table>";
        }
        ?>
    </div>

</body>
</html>