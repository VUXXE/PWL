<?php
$nama = $_POST['nama'] ?? '';
$password = $_POST['password'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobby = $_POST['hobby'] ?? [];
$pendidikan = $_POST['pendidikan'] ?? '';
$alamat = $_POST['alamat'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
    <style>
        :root {
            --primary: #4f46e5;
            --bg: #f8fafc;
            --text: #1e293b;
            --card-bg: #ffffff;
        }
        body { 
            font-family: 'Inter', system-ui, sans-serif; 
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .box { 
            width: 100%;
            max-width: 500px; 
            background: var(--card-bg);
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header { background: var(--primary); color: white; padding: 1.5rem; text-align: center; }
        .header h2 { margin: 0; font-size: 1.25rem; }
        
        .content { padding: 1.5rem; }
        .row { 
            display: flex; 
            padding: 0.75rem 0; 
            border-bottom: 1px solid #f1f5f9; 
        }
        .row:last-child { border-bottom: none; }
        .label { font-weight: 600; width: 120px; color: #64748b; font-size: 0.9rem; }
        .value { flex: 1; color: var(--text); }
        
        .actions { 
            margin-top: 2rem; 
            display: flex; 
            gap: 1rem; 
            width: 100%; 
            max-width: 500px; 
        }
        .btn {
            flex: 1;
            padding: 0.75rem;
            text-align: center;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-print { background: var(--primary); color: white; border: none; }
        .btn-back { background: #e2e8f0; color: #475569; }
        .btn:hover { opacity: 0.9; transform: translateY(-1px); }

        @media print {
            .actions { display: none; }
            body { background: white; }
            .box { box-shadow: none; border: 1px solid #eee; }
        }
    </style>
</head>
<body>

<div class="box" id="printArea">
    <div class="header">
        <h2>Ringkasan Biodata</h2>
    </div>
    <div class="content">
        <div class="row">
            <div class="label">Nama</div>
            <div class="value"><?php echo htmlspecialchars($nama); ?></div>
        </div>
        <div class="row">
            <div class="label">Password</div>
            <div class="value"><?php echo str_repeat("•", strlen($password)); ?> <small style="color:#94a3b8">(Terproteksi)</small></div>
        </div>
        <div class="row">
            <div class="label">Gender</div>
            <div class="value"><?php echo htmlspecialchars($gender ?: '-'); ?></div>
        </div>
        <div class="row">
            <div class="label">Hobi</div>
            <div class="value">
                <?php echo !empty($hobby) ? htmlspecialchars(implode(", ", $hobby)) : "-"; ?>
            </div>
        </div>
        <div class="row">
            <div class="label">Pendidikan</div>
            <div class="value"><?php echo htmlspecialchars($pendidikan ?: '-'); ?></div>
        </div>
        <div class="row">
            <div class="label">Alamat</div>
            <div class="value"><?php echo nl2br(htmlspecialchars($alamat ?: '-')); ?></div>
        </div>
    </div>
</div>

<div class="actions">
    <a href="biodata_baru.php" class="btn btn-back">Kembali</a>
    <button onclick="window.print()" class="btn btn-print">Cetak PDF</button>
</div>

</body>
</html>