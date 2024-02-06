<?php
session_start(); // Mulai sesi untuk mengakses informasi login

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php"); // Jika belum login, arahkan ke halaman utama
    exit;
}

// Ambil nama lengkap pengguna dari sesi
$nama_lengkap = $_SESSION['nama_lengkap'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sukses Login Faz Chat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body,*{font-family: 'Roboto', sans-serif;}
        body {background:#fdffbc;}
        .container {width: 500px; margin: auto; margin-top: 100px; text-align: center;}


</style>
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

    
<div class="container">
<h2>Selamat datang <?php echo $nama_lengkap; ?>!</h2>
    <p>Anda telah berhasil login di Faz English Club.</p>
</div>

</body>
</html>
