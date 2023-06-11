<?php
# $mysqli = new mysqli("localhost","username","password","nama_database");
$koneksi = mysqli_connect("localhost", "root","","kata");
if (mysqli_connect_errno()){
  echo "koneksi gagal" .mysqli_connect_errno(); 
}

?>