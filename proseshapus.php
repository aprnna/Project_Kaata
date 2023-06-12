<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM kata where id='$id'");

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>