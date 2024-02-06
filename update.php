<!doctype html>
<html>
<head>
<meta charset="UTF">
<title>Faz English Club | update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app-bar">
  <h1>Faz English</h1>
  <nav>
    <ul class="nav-buttons">
      <li><a href="index.php">Home</a></li>
</ul>
</nav>
</div>
<?php
include 'koneksi.php';
$_POST['submit'];
$noid = $_POST['noid'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kursus= $_POST['pilihan_kursus'];
mysqli_query($konek,"UPDATE daftar_akun SET nama_akun ='$nama',alamat='$alamat', pilihan_kursus ='$kursus' WHERE id_akun ='$noid'");
echo "<script> alert ('Update data berhasil tersimpan'); 
location.href = 'tampil_akun.php'; </script>";
?>
</body>
</html>
