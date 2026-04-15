<?php
// ==========================
// NILAI AWAL
// ==========================

$nama = "";
$umur = "";
$hasil = "";

// ==========================
// CEK & AMBIL DATA FORM
// ==========================

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
}

if(isset($_POST['umur'])){
    $umur = $_POST['umur'];
}

// ==========================
// PROSES LOGIKA
// ==========================

if($nama != "" && $umur != ""){

    $hasil = "Halo $nama, umur Anda $umur tahun <br>";

    if($umur < 17){
        $hasil .= "Status: Belum dewasa <br>";
    }else{
        $hasil .= "Status: Sudah dewasa <br>";
    }

    if($nama == "admin"){
        $hasil .= "<b>Halo Admin!</b>";
    }
}

// ==========================
// CONTOH LOGIKA DARI PPT
// ==========================

$a = 5;
$b = 4;

$perbandingan = "";
$perbandingan .= "$a > $b : ".($a > $b)."<br>";
$perbandingan .= "$a == $b : ".($a == $b)."<br>";
$perbandingan .= "$a != $b : ".($a != $b)."<br>";
?>

<!DOCTYPE html>
<html>
<head>
<title>Lab PHP Dasar</title>

<style>
body{
    font-family: Arial;
    text-align:center;
    background:#f2f2f2;
}

.box{
    width:350px;
    margin:auto;
    margin-top:40px;
    padding:20px;
    background:white;
    border:1px solid #ccc;
}

input{
    width:90%;
    padding:10px;
    margin:5px;
}

button{
    padding:10px;
    width:95%;
    background:blue;
    color:white;
    border:none;
}

.hasil{
    margin-top:10px;
    font-weight:bold;
}

.latihan{
    margin-top:20px;
    text-align:left;
    font-size:14px;
    background:#eef;
    padding:10px;
}
</style>

</head>

<body>

<div class="box">

<h2>Form Input Data</h2>

<form method="POST">

<input type="text" name="nama" placeholder="Masukkan Nama">

<input type="number" name="umur" placeholder="Masukkan Umur">

<button type="submit">Kirim</button>

</form>

<div class="hasil">
<?php echo $hasil; ?>
</div>

<hr>

<h3>Contoh Logika PHP</h3>
<div>
<?php echo $perbandingan; ?>
</div>

<hr>

<div class="latihan">
<b>TUGAS MAHASISWA:</b><br><br>

1. Ubah kata "Halo" menjadi "Selamat datang"<br>
2. Tambahkan input ALAMAT<br>
3. Tampilkan alamat di hasil<br>
4. Tambahkan kondisi:<br>
   Jika umur > 50 → tampilkan "Senior"<br>
5. Ubah nilai $a dan $b lalu lihat hasilnya<br>
6. Tambahkan perbandingan:<br>
   ($a >= $b) dan ($a <= $b)
</div>

</div>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>