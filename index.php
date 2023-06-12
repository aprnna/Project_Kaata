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
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="pages/kirim.php">Kirim Kata</a>
          <a class="nav-link" href="#about">About</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="content container">
    <?php
      include "koneksi.php";
      $no=1;
      $ambildata = mysqli_query($koneksi,"select * from kata ORDER BY id DESC");
      while ($tampil = mysqli_fetch_array($ambildata)){?>
        <figure data-aos='fade-right' class='content-item text-center p-4'>
          <blockquote class='blockquote'>
            <p>
              <?php echo $tampil['content_kata'] ?>
            </p>
          </blockquote>
          <figcaption class='blockquote-footer'>
            <?php echo $tampil['author_kata'] ?>
          </figcaption>
          <a onclick='return confirm("Yakin Akan Dihapus??")' href='proseshapus.php?id=<?php echo $tampil['id'] ?>'>Hapus</a>
        </figure>
      <?php } ?>
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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 200, 
      duration: 1000,
      easing: 'ease-in-out',
    });
  </script>
</body>
</html>