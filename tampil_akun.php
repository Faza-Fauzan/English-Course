<!doctype html>
<html>
<head>
<meta charset=:UT-8F">
<title>
Faz English Club | All Students
</title>
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
echo "<h2>Data pengguna akun</h2>
<table>
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Alamat</th>
<th>Email</th>
<th>Tanggal Lahir</th>
<th>Pilihan kursus</th>
<th>Aksi</th>
<th>Pilihan kursus</th>
</tr>";
include "connection.php";
$tampil=mysqli_query($link,"SELECT * FROM daftar_akun ORDER BY id_akun");
$no=1;
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr>";
echo "<td>";
echo $no;
echo "</td>";
echo "<td>";
echo $r['nama_akun'];
echo "</td>";
echo "<td>";
echo $r['alamat'];
echo "</td>";
echo "<td>";
echo $r['email'];
echo "</td>";
echo "<td>";
echo $r['tanggal_lahir'];
echo "</td>";
echo "<td>";
echo $r['pilihan_kursus'];
echo "</td>";

echo "<td>";
echo "<a href=edit.php?id=$r[id_akun]>Edit</a>";
echo "<br>";
echo "<a href='delete.php?id=$r[id_akun]'>Hapus data</a>";
echo "</td>";
echo "</tr>";
  $no++;
}
echo "</table>";
?>
</body>
</html> 
