<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Kurva Kuadrat</title>
    <!-- Library Chart.js untuk visualisasi -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #4f46e5;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wrapper {
            width: 100%;
            max-width: 800px;
        }

        .card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .grid-inputs {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .input-group label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        input[type="number"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        button:hover { opacity: 0.9; }

        .result-box {
            margin-top: 1.5rem;
            padding: 1rem;
            border-radius: 0.5rem;
            border-left: 4px solid var(--primary-color);
            background: #f1f5f9;
        }

        canvas {
            margin-top: 2rem;
            max-height: 400px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="card">
        <h2 style="margin-top: 0;">Kalkulator Persamaan Kuadrat</h2>
        <p style="color: #64748b; font-size: 0.9rem;">Masukkan nilai koefisien untuk menghitung determinan dan menggambar kurva.</p>
        
        <form method="POST">
            <div class="grid-inputs">
                <div class="input-group">
                    <label>Nilai a</label>
                    <input type="number" step="any" name="a" value="<?= $_POST['a'] ?? 1 ?>" required>
                </div>
                <div class="input-group">
                    <label>Nilai b</label>
                    <input type="number" step="any" name="b" value="<?= $_POST['b'] ?? 4 ?>" required>
                </div>
                <div class="input-group">
                    <label>Nilai c</label>
                    <input type="number" step="any" name="c" value="<?= $_POST['c'] ?? 2 ?>" required>
                </div>
            </div>
            <button type="submit" name="hitung">Hitung & Visualisasikan</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $a = (float)$_POST['a'];
            $b = (float)$_POST['b'];
            $c = (float)$_POST['c'];

            // Logika perhitungan berdasarkan materi
            $D = ($b * $b) - (4 * $a * $c);
            
            if ($D > 0) {
                $status = "Kurva Memotong Sumbu X di Dua Titik";
            } elseif ($D == 0) {
                $status = "Kurva Menyinggung Sumbu X";
            } else {
                $status = "Kurva Tidak Memotong Sumbu X";
            }

            echo "<div class='result-box'>";
            echo "<strong>Determinan (D): $D</strong><br>";
            echo "<span>Keterangan: $status</span>";
            echo "</div>";
        }
        ?>
    </div>

    <?php if (isset($_POST['hitung'])): ?>
    <div class="card">
        <canvas id="curveChart"></canvas>
    </div>
    <?php endif; ?>
</div>

<script>
<?php if (isset($_POST['hitung'])): ?>
    (function() {
        const a = <?= $a ?>;
        const b = <?= $b ?>;
        const c = <?= $c ?>;

        const xValues = [];
        const yValues = [];

        // Kalkulasi titik puncak untuk fokus grafik
        const xPuncak = -b / (2 * a);
        
        // Generate data titik kurva
        for (let x = xPuncak - 10; x <= xPuncak + 10; x += 0.5) {
            xValues.push(x.toFixed(1));
            yValues.push((a * Math.pow(x, 2)) + (b * x) + c);
        }

        const ctx = document.getElementById('curveChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: xValues,
                datasets: [{
                    label: `Grafik f(x) = ${a}x² + ${b}x + ${c}`,
                    data: yValues,
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    x: { grid: { display: false } },
                    y: { border: { dash: [5, 5] } }
                }
            }
        });
    })();
<?php endif; ?>
</script>

</body>
</html>