<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "tugas");

// Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$nama_lengkap = $_POST['nama_lengkap'];
$nama_pengguna = $_POST['nama_pengguna'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pilihan_kursus = $_POST['pilihan_kursus'];

// Periksa apakah password dan konfirmasi password sama
if ($password != $konfirmasi_password) {
    echo "Password dan konfirmasi password tidak cocok. Silakan coba lagi.";
} else {
    // Enkripsi password (gunakan password_hash)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Masukkan data ke database
    $query = "INSERT INTO daftar_akun (nama_akun, username, alamat, email, password, tanggal_lahir, pilihan_kursus) VALUES ('$nama_lengkap', '$nama_pengguna', '$alamat', '$email', '$hashed_password', '$tanggal_lahir', '$pilihan_kursus')";

    if (mysqli_query($koneksi, $query)) {
        // Tampilkan pesan sukses dengan link menuju halaman login_akun.php
        echo "Selamat, $nama_lengkap! Anda telah terdaftar di Faz English. Silakan <a href='login_akun.php'>login disini</a> atau kembali ke <a href='index.php'>beranda</a>.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
