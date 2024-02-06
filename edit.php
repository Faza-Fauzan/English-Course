<!doctype html>
<html>
<head>
<meta charset="UTF">
<title>Faz English Club | Edit  Data</title>
</head>
<body>
<?php
include 'koneksi.php';
$noid = $_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM daftar_akun WHERE id_akun ='$noid'");
$r = mysqli_fetch_array($query);
?>
<h2>Edit Peserta Kursus</h2>
<form method="POST" action="update.php">
<input type="hidden" name="noid" value="<?php echo $r['id_akun'];?>">
<table>
<tr>
<td>Nama Lengkap</td> 
<td>:</td>
<td>
<input type="text" name="nama" value="<?php echo $r['nama_akun'];?>">
</td>
</tr>
<tr>
<td>Alamat</td> 
<td>:</td>
<td>
<input type="text" name="alamat" value="<?php echo $r['alamat'];?>">
</td>
</tr>
<tr>
<td>Pilihan kursus</td> 
<td>:</td>
<td>
<input type="text" name="pilihan_kursus" value="<?php echo $r['pilihan_kursus'];?>">
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type="submit" name="submit" value="Update">
<input type="button" value="Batal" onclick="self.history.back()">
</td>
</tr>
</table>
</form>
</body>
</html>
