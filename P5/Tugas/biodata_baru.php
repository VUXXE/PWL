<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Modern</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --bg: #f8fafc;
            --text: #1e293b;
            --card-bg: #ffffff;
        }
        body { 
            font-family: 'Inter', system-ui, -apple-system, sans-serif; 
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .box { 
            width: 100%;
            max-width: 450px; 
            padding: 2.5rem; 
            background: var(--card-bg);
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
        h2 { margin-top: 0; color: var(--primary); text-align: center; margin-bottom: 1.5rem; }
        
        .form-group { margin-bottom: 1rem; }
        label { display: block; font-weight: 600; margin-bottom: 0.5rem; font-size: 0.9rem; }
        
        input[type="text"], input[type="password"], select, textarea { 
            width: 100%; 
            padding: 0.75rem; 
            border: 1px solid #e2e8f0; 
            border-radius: 0.5rem;
            box-sizing: border-box;
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
        
        .radio-group, .checkbox-group { 
            display: flex; 
            gap: 1rem; 
            flex-wrap: wrap;
            margin-top: 0.5rem;
        }
        .option-item { display: flex; align-items: center; gap: 0.4rem; font-size: 0.95rem; }
        
        button { 
            margin-top: 1.5rem;
            padding: 0.8rem; 
            width: 100%; 
            background: var(--primary); 
            color: white; 
            border: none; 
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover { background: var(--primary-hover); }
        textarea { height: 80px; resize: vertical; }
    </style>
</head>
<body>
<div class="box">
    <h2>Form Biodata</h2>
    <form method="POST" action="hasil_baru.php">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama Anda" required>
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••" required>
        </div>
        
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label class="option-item"><input type="radio" name="gender" value="Laki-Laki" checked> Laki-Laki</label>
                <label class="option-item"><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>Hobi</label>
            <div class="checkbox-group">
                <label class="option-item"><input type="checkbox" name="hobby[]" value="Mancing"> Mancing</label>
                <label class="option-item"><input type="checkbox" name="hobby[]" value="Game"> Game</label>
                <label class="option-item"><input type="checkbox" name="hobby[]" value="Ngoding"> Ngoding</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>Pendidikan Terakhir</label>
            <select name="pendidikan" required>
                <option value="">Pilih Pendidikan --</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Alamat Lengkap</label>
            <textarea name="alamat" placeholder="Tulis alamat lengkap..."></textarea>
        </div>
        
        <button type="submit">Kirim Data</button>
    </form>
</div>
</body>
</html>