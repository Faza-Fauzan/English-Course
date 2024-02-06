<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faz English Club - Daftar Akun</title>
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
    <h2>Daftar Akun</h2>
    <form action="proses_akun.php" method="post">
<table>
<tr><td>        <label for="nama_lengkap">Nama Lengkap:</label></td>
<td>        <input type="text" name="nama_lengkap" required>
</td></tr>
<tr><td>
        <label for="nama_pengguna">Nama Pengguna:</label></td>
<td>        <input type="text" name="nama_pengguna" required</td></tr>

<tr><td>
        <label for="alamat">Alamat:</label></td>
<td>        <input type="text" name="alamat" required </td></tr>

<tr><td>
        <label for="email">Email:</label></td>
<td>        <input type="email" name="email" required></td></tr>
<tr><td>
        <label for="tanggal_lahir">Tanggal Lahir:</label></td>
<td>        <input type="date" name="tanggal_lahir" required></td></tr>
<tr><td>
        <label for="password">Password:</label>
<td>        <input type="password" name="password" id="password" required><br>
        <input type="checkbox" onclick="togglePassword('password')"> Lihat Password</td></tr>
<tr><td>
        <label for="konfirmasi_password">Konfirmasi Password:</label></td>
<td>        <input type="password" name="konfirmasi_password" id="konfirmasi_password" required><br>
        <input type="checkbox" onclick="togglePassword('konfirmasi_password')"> Lihat Password</td></tr>
<tr><td>
        <label for="pilihan_kursus">Pilihan Kursus:</label></td>
<td>        <select name="pilihan_kursus" required>
            <option value="Writing">Writing</option>
            <option value="Speaking">Speaking</option>
            <option value="Paket TOEFL">Paket TOEFL</option>
        </select></td>

<tr><td colspan= "2">        <input type="submit" value="Daftar"></td></tr>
</table>
    </form>

    <script>
        function togglePassword(elementId) {
            var x = document.getElementById(elementId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
