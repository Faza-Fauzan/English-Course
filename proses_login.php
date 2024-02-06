<?php
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
        // Login berhasil, arahkan ke sukses_login.php
        session_start();
        $_SESSION['nama_lengkap'] = $row['nama_akun'];
        header("Location: sukses_login.php");
        exit;
    } else {
        // Pesan error jika password salah
        echo "Login gagal. Password salah. Silakan coba lagi.";
    }
} else {
    // Pesan error jika pengguna tidak ditemukan
    echo "Login gagal. Pengguna tidak ditemukan. Silakan coba lagi.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
