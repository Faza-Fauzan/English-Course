<?php
session_start(); // Mulai sesi untuk menyimpan informasi login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "tugas");

    // Periksa apakah koneksi berhasil
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Ambil data dari formulir login
    $nama_pengguna = $_POST['nama_pengguna'];
    $password = $_POST['password'];

    // Query untuk mencari data pengguna berdasarkan nama pengguna
    $query = "SELECT * FROM daftar_akun WHERE username='$nama_pengguna'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        // Periksa apakah password yang dimasukkan cocok dengan yang disimpan di database
        if (password_verify($password, $stored_password)) {
            // Login berhasil, simpan informasi login ke sesi
            $_SESSION['nama_lengkap'] = $row['nama_akun'];
            header("Location: sukses_login.php");
            exit;
        } else {
            // Pesan error jika password salah
            $error_message = "Login gagal. Password salah. Silakan coba lagi.";
        }
    } else {
        // Pesan error jika pengguna tidak ditemukan
        $error_message = "Login gagal. Pengguna tidak ditemukan. Silakan coba lagi.";
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Faz Chat</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>


        .container {width: 300px; margin: auto; margin-top: 100px;}
        .form-group {margin-bottom: 20px;}
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
    <h2>Login Faz English</h2>
    <?php
    // Tampilkan pesan error jika ada
    if (isset($error_message)) {
        echo '<div class="alert alert-danger">'.$error_message.'</div>';
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="nama_pengguna">Nama Pengguna:</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

</body>
</html>
