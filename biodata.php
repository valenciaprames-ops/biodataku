<?php
// ================= VARIABEL =================
$nama_lengkap = "Valencia Grisenda Maheswari";
$nama_panggilan = "Alen";
$agama = "Islam";
$tempat_lahir = "Kab.kota semarang";
$tgl_lahir = 24;
$bln_lahir = 6;
$thn_lahir = 2009;
$alamat = "Jalan Borobudur Selatan No55 RT08/RW11";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";

$hobi = ["Mendengarkan Musik", "Membaca", "Membuat Novel"];

$skills = [
    "Editing foto/video" => 90,
    "Membuat cerita" => 95,
    "Kerja tim" => 85,
    "Ngoding" => 83
];

$pendidikan = [
    ["SD", "SDN Kembangarum 01", 2015, 2021],
    ["SMP", "SMPN 19 Semarang", 2022, 2024],
   
];

$no_wa = "089697366900";
$email = "valenciaprames@gmail.com";
$makanan_favorit = ["Ayam Goreng", "Nasi", "Mie"];
$minuman_favorit = ["Matcha", "Air Bening", "Susu"];
$motto = "Jika hidupmu lelah, bukan berarti kamu lemah";

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $thn_lahir;
$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#667eea,#764ba2);
    padding:30px;
}

.card{
    max-width:900px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

img{
    display:block;
    margin:auto;
    border-radius:50%;
    border:4px solid #c5a024;
}

.section{
    margin-top:25px;
}

.progress-box{
    margin-bottom:15px;
}

.progress-title{
    display:flex;
    justify-content:space-between;
    font-weight:bold;
}

.progress{
    height:22px;
    background:#eee;
    border-radius:20px;
    overflow:hidden;
}

.progress-bar{
    height:100%;
    background: linear-gradient(90deg,#667eea,#764ba2);
    text-align:right;
    padding-right:10px;
    color:white;
    font-weight:bold;
    line-height:22px;
    border-radius:20px;
    animation: load 1.5s ease;
}

@keyframes load{
    from{width:0}
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#692b18;
    color:white;
}

th,td{
    padding:10px;
    border:1px solid #d42525;
    text-align:center;
}

marquee{
    margin-top:20px;
    color:#764ba2;
    font-weight:bold;
}

a{
    display:block;
    margin-top:20px;
    text-align:center;
    text-decoration:none;
    font-weight:bold;
    color:#667eea;
}
</style>
</head>

<body>

<div class="card">
<h2><i class="fa fa-user"></i> BIODATA</h2>

<img src="foto.jpg" width="150">

<p><b>Nama:</b> <?= $nama_lengkap ?></p>
<p><b>Panggilan:</b> <?= $nama_panggilan ?></p>
<p><b>Agama:</b> <?= $agama ?></p>
<p><b>Lahir:</b> <?= "$tempat_lahir, $tgl_lahir-$bln_lahir-$thn_lahir" ?></p>
<p><b>Umur:</b> <?= $umur ?> tahun</p>
<p><b>Alamat:</b> <?= $alamat ?></p>
<p><b>Gender:</b> <?= $gender ?></p>
<p><b>WA:</b> <?= $no_wa ?></p>
<p><b>Email:</b> <?= $email ?></p>

<div class="section">
<h3>🎯 Skills</h3>
<?php foreach($skills as $skill=>$nilai){ ?>
<div class="progress-box">
    <div class="progress-title">
        <span><?= $skill ?></span>
        <span><?= $nilai ?>%</span>
    </div>
    <div class="progress">
        <div class="progress-bar" style="width:<?= $nilai ?>%"></div>
    </div>
</div>
<?php } ?>
</div>

<div class="section">
<h3>🎓 Riwayat Pendidikan</h3>
<table>
<tr><th>Tingkat</th><th>Sekolah</th><th>Mulai</th><th>Lulus</th></tr>
<?php foreach($pendidikan as $p){ ?>
<tr>
<td><?= $p[0] ?></td>
<td><?= $p[1] ?></td>
<td><?= $p[2] ?></td>
<td><?= $p[3] ?></td>
</tr>
<?php } ?>
</table>
</div>

<div class="section">
<h3>🚀 10 Tahun Lagi</h3>
<p>
Hai namaku <?= $nama_panggilan ?>, saat ini aku berumur <?= $umur ?> tahun.
10 tahun lagi di umur <?= $umur_10 ?> aku ingin menjadi orang sukses
dan membanggakan orang tua dengan kerja keras.
</p>
</div>

<marquee><?= $motto ?></marquee>

<a href="jadwal.php">➡️ Lihat Jadwal</a>
</div>

</body>
</html>
