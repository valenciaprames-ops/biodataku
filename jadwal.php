<?php
$nama_kamu = "Valencia Grisenda Maheswari";

/* JADWAL PIKET */
$piket = [
    "Senin" => ["Andi", $nama_kamu, "Himma"],
    "Selasa" => ["Siti", "Rina", $nama_kamu],
    "Rabu" => [$nama_kamu, "Yoonly"],
    "Kamis" => ["Tono", $nama_kamu],
    "Jumat" => ["Ayu", "Bayu", "Chanleya"],
];

/* JADWAL PELAJARAN PER JAM */
$jadwal = [
    "Senin"  => ["MTK","MTK","IPA","IPA","PJOK","PJOK","PJOK","B. INDO","B. INDO","SEJARAH"],
    "Selasa" => ["PPKn","IPS","IPS","SENBUD","SENBUD","AGAMA","AGAMA","AGAMA","B. JAWA","B. JAWA"],
    "Rabu"   => ["MTK","B. Inggris","IPA","IPA","IPA","MTK","MTK","BIOLOGI","FISIKA","FISIKA"],
    "Kamis"  => ["IPS","Informatika","PJOK","SEJARAH","SEJARAH","PGD","PGD","INFOR","INFOR","INFOR"],
    "Jumat"  => ["PAI","B. Indo","SENBUD","PJOK","PJOK","MTK","","","",""]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal</title>
<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f7fb;
    padding:20px;
}

h2{
    margin-top:30px;
    color:#333;
}

table{
    border-collapse:collapse;
    width:100%;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 4px 10px rgba(0,0,0,.1);
}

th{
    background:#6c63ff;
    color:white;
    padding:10px;
}

td{
    border:1px solid #ddd;
    padding:8px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

.highlight{
    background:#ffe066;
    padding:4px 8px;
    border-radius:6px;
    font-weight:bold;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    color:#6c63ff;
    font-weight:bold;
}
</style>
</head>

<body>

<h2>📚 Jadwal Pelajaran</h2>
<table>
<tr>
<th>Hari</th>
<?php for($i=1;$i<=10;$i++) echo "<th>Jam $i</th>"; ?>
</tr>

<?php foreach($jadwal as $hari => $mapel){ ?>
<tr>
<td><b><?= $hari ?></b></td>
<?php
for($i=0;$i<10;$i++){
    echo "<td>".($mapel[$i] ?? "")."</td>";
}
?>
</tr>
<?php } ?>
</table>

<h2>🧹 Jadwal Piket</h2>
<table>
<tr>
<th>Hari</th>
<th>Petugas</th>
</tr>

<?php foreach($piket as $hari=>$petugas){ ?>
<tr>
<td><b><?= $hari ?></b></td>
<td>
<?php
foreach($petugas as $p){
    if($p == $nama_kamu){
        echo "<span class='highlight'>$p</span> ";
    }else{
        echo "$p ";
    }
}
?>
</td>
</tr>
<?php } ?>
</table>

<a href="biodata.php">⬅️ Kembali ke Biodata</a>

</body>
</html>
