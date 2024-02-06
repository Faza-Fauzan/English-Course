<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faz Chat Web | All Users</title>
  <link rel="stylesheet" href="bootstrap.css">
	<style>
		body,*{font-family: 'Roboto', sans-serif;}
		body {background:#fdffbc;}
		/*data */
		.container_table th,td {width:120px;height:28px;padding:5px;}
		.container_table tr th:nth-child(1), .container_table tr td:nth-child(1) {width:66px;}
		.container_table tr:nth-child(odd){background-color:#96bb7c;}
		.container_table tr:nth-child(even){background-color:#184d47;color:#fff;}
		/*pagination*/
		.container_pagination{text-align:left;}
		ul.pagination{list-style-type:none;}
		ul.pagination li{display:inline;}
		ul.pagination li a{margin:5px;padding:5px 10px;background-color:#726a95;color:#fff;text-decoration:none;}
		span.active{margin:5px;padding:5px 10px;background-color:#62959c;color:#fff;}
	</style>
</head>
<body>

<div class="container">   
<h1>Pengguna Faz Chat</h1>
<p>
Berikut adalah nama pengguna yang telah medaftar.
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
	echo "<tr><th>No ID</th><th>Nama Lengkap</th><th>Alamat</th></tr>";
	$cari_sebagian=mysqli_query($konek,"select * from daftar_akun limit $posisi, $batas"); 
	while($data=mysqli_fetch_array($cari_sebagian)){
		echo "<tr>".
"<td>".$data['id_akun']."</td>".
"<td>".$data['nama_akun']."</td>".
"<td>".$data['alamat']."</td>".


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
