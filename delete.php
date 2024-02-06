	<!doctype html>
<html>
<head>
<meta charset="UTF">
<title>Faz English Club | Delete</title>
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
mysqli_query($konek,"DELETE FROM daftar_akun WHERE id_akun ='$_GET[id]'");
echo "Hapus data berhasil!";
?>
<a href="tampil_akun.php">Tampilkan semua data</a>
</body>
</html>
