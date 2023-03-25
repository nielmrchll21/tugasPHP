<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengajian karyawan</title>
</head>
<body>
<form method="POST">
<p>pengajian</p>
<label>nama</label>
<input type="text" name="nama" placeholder="masukan nama"><br>
<label>jabatan</label>
<select name="jabatan">
<option>----pilih jabatan----</option>
<option value="manager">manager</option>
<option value="asisten">asisten</option>
<option value="kabag">kabag</option>
<option value="staff">staff</option>
</select><br>
<label>agama</label>
<select name="agama">
<option value="kristen">kristen</option>
<option value="islam">islam</option>
<option value="hindu">hindu</option>
<option value="katolik">katolik</option>
<option value="buddha">buddha</option>
</select><br>
<label>status</label>
<input type="text" name="status" placeholder="masukan status anda"><br>
<label>jumlah anak</label>
<input type="number" name="keluarga" placeholder="masukkan jumlah anak">
<button name="proses" type="submit">proses</button>
</form>

<?php
$nama = $_POST ['nama'];
$jabatan = $_POST['jabatan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$jumlahank = $_POST['keluarga'];
$tombol = $_POST['proses'];

switch($jabatan){
    case "manager" : $gapok = 20000000; break;
    case "asisten" : $gapok = 15000000; break;
    case "kabag" : $gapok = 10000000; break;
    case "staff" : $gapok = 4000000; break;
    default: $gapok  = 0;
}

$tunjanganjbt = 2.0 * $gapok;

$zakat=($agama == "islam" && $gapok >=6000000) ? 0.25 * $gapok : 0;

if($jumlahank >=2) $tunjanganklg = $gapok + 0.5;
else if($jumlahank >=5) $tunjanganklg = $gapok + 1.0;
else $tunjanganklg = "";

$total = $gapok + $tunjanganjbt + $tunjanganklg + $zakat;

if(isset($tombol)){
?>
nama pegawai : <?= $nama ?>
<br>jabatan : <?= $jabatan ?>
<br>agama : <?= $agama ?>
<br>status : <?= $status ?>
<br>jumlah anak : <?= $jumlahank ?>
<br>tunjangan jabatan : <?= $tunjanganjbt ?>
<br>tunjangan keluarga : <?= $tunjanganklg ?>
<br>zakat : <?= $zakat ?>
<br>total gaji : <?= $total ?>

<?php } ?>
 
</body>
</html>