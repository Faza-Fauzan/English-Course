<?php
include "koneksi.php";
  // cek apakah tabel admin sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS admin";
  $hasil_query = mysqli_query($konek, $query);

  if(!$hasil_query){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil dihapus... <br>";
  }

  // buat query untuk CREATE tabel admin
  $query  = "CREATE TABLE admin (username VARCHAR(50), password CHAR(40))";
  $hasil_query = mysqli_query($konek, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil dibuat... <br>";
  }

  // buat username dan password untuk admin
  $username = "admin123";
  $password = sha1("rahasia");

  // buat query untuk INSERT data ke tabel admin
  $query  = "INSERT INTO admin VALUES ('$username','$password')";

  $hasil_query = mysqli_query($konek, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'admin'</b> berhasil diisi... <br>";
  }

  // tutup koneksi dengan database mysql

?>