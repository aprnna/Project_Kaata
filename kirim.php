<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.Kata</title>
  <link rel="website icon" type="png" href="assets/Untitled-4.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-weight: bolder;" href="#">.KATA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link active"  aria-current="page" href="#">Kirim Kata</a>
          <a class="nav-link" href="#about">About</a>
        </div>
      </div>
    </div>
  </nav>
  <?php 
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM kata");
    $data = mysqli_fetch_array($query);
    $kodeBarang = $data['kodeTerbesar'];
    $urutan = $kodeBarang;
    $urutan++;
    ?>
  <div class="content container">
    <form action="" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ID</span>
        <input type="text" name="id" id="id" class="form-control" aria-describedby="basic-addon1" 
        value="<?php echo $urutan ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label h4">Content</label>
        <textarea require name="content" class="form-control" id="content" rows="5"></textarea>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Author</span>
        <input require type="text" name="author" id="author" class="form-control" aria-describedby="basic-addon1">
      </div>
      <div class="mb-3">
        <button class="btn btn-dark" name="kirim" type="submit">KIRIM</button>
      </div>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['kirim'])){
      mysqli_query($koneksi,"insert into kata set
      id='$_POST[id]',
      content_kata='$_POST[content]',
      author_kata='$_POST[author]'");
      
      echo "Berhasil terkirim";
    }
    ?>
  </div>
  <footer class="bg-dark" id="about">
    <div class="row text-center">
      <div class="col-sm text-md-start">
        <p>Design By: Apriana Cahya Bowo Setiadi</p>
        <p>Universitas Komputer Indonesia</p>
      </div>
      <div class="col-sm text-md-end">
        <img class="img-fluid mx-2" style="width: 80px;" src="assets/unikom.png" alt="">
        <img class="img-fluid mx-2" style="width: 80px;" src="assets/Untitled-4.png" alt="">
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>