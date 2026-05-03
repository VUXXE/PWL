<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Determinan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* Agar padding tidak merusak lebar */
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
        }
        .positive { background-color: #d4edda; color: #155724; }
        .zero { background-color: #fff3cd; color: #856404; }
        .negative { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Determinan</h2>
    
    <form method="POST">
        <div class="form-group">
            <label>Nilai a</label>
            <input type="number" name="a" required value="<?= $_POST['a'] ?? '' ?>">
        </div>
        <div class="form-group">
            <label>Nilai b</label>
            <input type="number" name="b" required value="<?= $_POST['b'] ?? '' ?>">
        </div>
        <div class="form-group">
            <label>Nilai c</label>
            <input type="number" name="c" required value="<?= $_POST['c'] ?? '' ?>">
        </div>
        <button type="submit" name="hitung">Hitung Sekarang</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        function hitungDeterminan($a, $b, $c) {
            $D = ($b * $b) - (4 * $a * $c);
            
            if ($D > 0) {
                $class = "positive";
                $ket = "Kurva Memotong Sumbu X (D > 0)";
            } elseif ($D == 0) {
                $class = "zero";
                $ket = "Kurva Menyinggung Sumbu X (D = 0)";
            } else {
                $class = "negative";
                $ket = "Kurva Tidak Memotong Sumbu X (D < 0)";
            }
            
            return ['nilai' => $D, 'ket' => $ket, 'class' => $class];
        }

        $hasil = hitungDeterminan($a, $b, $c);
        
        echo "<div class='result {$hasil['class']}'>";
        echo "Nilai D: " . $hasil['nilai'] . "<br>";
        echo $hasil['ket'];
        echo "</div>";
    }
    ?>
</div>

</body>
</html>