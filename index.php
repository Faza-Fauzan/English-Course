<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Faz English Club</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app-bar">
  <h1>Faz English</h1>
  <nav>
    <ul class="nav-buttons">
      <li><a href="index.php">Home</a></li>
      <li><a href="login_admin.php">Log In (Admin)</a></li>
    </ul>
  </nav>
</div>
<h2>Selamat Datang di Faz English !</h2>
<h2>Media kursus Bahasa Inggris yang menyenangkan dan melekat!</h2>
    <p>Silakan klik tombol di bawah ini untuk login :</p>
    <a href="login_akun.php">
        <button type="button">Login</button>
    </a>
    <p>Atau, jika Anda belum memiliki akun, silakan klik "Daftar" di bawah ini:</p>
    <a href="daftar.php">
        <button type="button">Daftar</button>
    </a>
<?php 
  $koneksi = mysqli_connect("localhost","root","","tugas");
  $tampil_data = "SELECT * FROM daftar_akun";
  $hitung_data = mysqli_query($koneksi, $tampil_data);

  // cek jumlah record (baris)
  $jumlah_data = mysqli_num_rows($hitung_data);


echo "<p>Total yang telah mendaftar:"; 
echo   $jumlah_data;
echo "</p>"; 
?>


<div class="container">   
<h1>Faz English Students</h1>
<p>
Berikut adalah data murid yang telah medaftar.
</p>
</div>
<?php
// get db connection
include "koneksi.php";
//init for pagination
$page=isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 1;
$cari_semua=mysqli_query($konek,"select * from daftar_akun"); 
$jml_data=mysqli_num_rows($cari_semua);
$batas=10;
$jmlpage=ceil($jml_data/$batas);
if($page>$jmlpage){
$page=$jmlpage;
}
if($page<1){
$page=1;
}
$posisi=($page-1) * $batas;
// view data
if($jml_data>0){
// menampilkan data
	echo "<table class='container_table'>";
	echo "<tr><th>No ID</th><th>Nama Lengkap</th><th>Alamat</th><th>Pilihan kursus</th></tr>";
	$cari_sebagian=mysqli_query($konek,"select * from daftar_akun limit $posisi, $batas"); 
	while($data=mysqli_fetch_array($cari_sebagian)){
		echo "<tr>".
"<td>".$data['id_akun']."</td>".
"<td>".$data['nama_akun']."</td>".
"<td>".$data['alamat']."</td>".
"<td>".$data['pilihan_kursus']."</td>".

"</tr>";
		}
	echo "</table>";
}
// pagination
$sebelumnya = $page - 1;
$berikutnya = $page + 1;
echo "<div class='container_pagination'>";
echo "<ul class='pagination'>";
	if ($page > 2){
		$back=$page-1;
		echo "<li><a title='prev' href='".$_SERVER['PHP_SELF']."?page=$back'>back</a></li>";
	}
	
	if($page==1){
		for($i=$page-1;
$i<=$page+3;
$i++){
		if($i<1){continue;}
		if($i>$jmlpage){break;}
		if($i == $page){
			echo "<li><span title='$i' class='active'>$i</span></li>";
		}
else{
			echo "<li><a title='$i' href='".$_SERVER['PHP_SELF']."?page=$i'>$i</a></li>";
			}
		}
	}
else if($page==$jmlpage){
		for($i=$page-3; 
$i<=$page; 
$i++){
		if($i<1){continue;}
		if($i>$jmlpage){break;}
		if($i == $page){
			echo "<li><span title='$i' class='active'>$i</span></li>";
		}
else{
			echo "<li><a title='$i' href='".$_SERVER['PHP_SELF']."?page=$i'>$i</a></li>";
			}
		}
	}else if($page==$jmlpage-1){
		for($i=$page-2; 
$i<=$page+1; 
$i++){
		if($i<1){continue;}
		if($i>$jmlpage){break;}
		if($i == $page){
			echo "<li><span title='$i' class='active'>$i</span></li>";
		}
else{
			echo "<li><a title='$i' href='".$_SERVER['PHP_SELF']."?page=$i'>$i</a></li>";
			}
		}
	}
else{
		for($i=$page-1; 
$i<=$page+2; 
$i++){
			if($i<1){continue;}
			if($i>$jmlpage){break;}
			if($i == $page){
				echo "<li><span title='$i' class='active'>$i</span></li>";
			}
else{
				echo "<li><a title='$i' href='".$_SERVER['PHP_SELF']."?page=$i'>$i</a></li>";
			}
		}
	}
	if($page < $jmlpage-1){
		$next=$page+1;
		echo "<li><a title='next' href='".$_SERVER['PHP_SELF']."?page=$next'>next</span></a></li>";
	}
	echo "</ul>";
	echo "</div>";
?>


</body>
</html>