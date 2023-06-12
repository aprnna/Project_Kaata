<?php
  include "koneksi.php";
  $id = $_POST['id'];
  $content = ucfirst($_POST['content']);
  $author = ucfirst($_POST['author']);
  if(isset($_POST['kirim'])){
    mysqli_query($koneksi,"insert into kata value ('$id','$content','$author')");
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }
?>