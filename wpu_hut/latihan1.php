<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);
$menu = $menu['menu'];
function indo_currency($value){
  return 'Rp. ' . number_format($value, 0, ",", ".");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>WPU Hut</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <img src="img/logo.png" alt="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
        <a class="nav-link active" aria-current="page" href="#">Pizza</a>
        <a class="nav-link active" aria-current="page" href="#">Pasta</a>
        <a class="nav-link active" aria-current="page" href="#">Nasi</a>
        <a class="nav-link active" aria-current="page" href="#">Minuman</a>
      </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <h1>All Menu</h1>
      </div>
    </div>
    
    <div class="row">
      <?php foreach($menu as $row): ?>
      <div class="col-md-4" style="margin-bottom: 25px;">
        <div class="card">
          <img src="img/menu/<?=$row['gambar']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$row['nama']?></h5>
            <h6 class="card-title">Kategori : <?=$row['kategori']?></h6>
            <p class="card-text"><?=$row['deskripsi']?></p>
            <h5><?=indo_currency($row['harga'])?>,-</h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang!</a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>