<?php
// Logika simpel
$hasil = null;
if (isset($_POST['hitung'])) {
    $tugas = $_POST['tugas'] ?? 0;
    $uts   = $_POST['uts'] ?? 0;
    $uas   = $_POST['uas'] ?? 0;
    
    $hasil = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
    $grade = ($hasil >= 80) ? 'A' : (($hasil >= 60) ? 'B' : 'C');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator KHS</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f4; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 350px; }
        h2 { margin-bottom: 20px; text-align: center; color: #333; }
        label { display: block; margin-bottom: 5px; font-size: 14px; color: #666; }
        input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #0056b3; }
        .result { margin-top: 25px; padding: 15px; background: #e9f5ff; border-radius: 5px; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h2>Nilai KHS</h2>
    
    <form method="POST">
        <label>Nilai Tugas</label>
        <input type="number" name="tugas" required placeholder="Contoh: 80">
        
        <label>Nilai UTS</label>
        <input type="number" name="uts" required placeholder="Contoh: 75">
        
        <label>Nilai UAS</label>
        <input type="number" name="uas" required placeholder="Contoh: 90">
        
        <button type="submit" name="hitung">Hitung Sekarang</button>
    </form>

    <?php if ($hasil !== null): ?>
        <div class="result">
            <small>Nilai Akhir:</small>
            <h1 style="margin: 5px 0;"><?php echo $hasil; ?></h1>
            <strong>Grade: <?php echo $grade; ?></strong>
        </div>
    <?php endif; ?>
</div>

</body>
</html>