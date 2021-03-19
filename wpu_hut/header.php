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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <img src="img/logo.png" alt="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " href="index.php">All Menu</a>
        <a class="nav-link " href="pizza.php">Pizza</a>
        <a class="nav-link " href="pasta.php">Pasta</a>
        <a class="nav-link " href="nasi.php">Nasi</a>
        <a class="nav-link " href="minuman.php">Minuman</a>
      </div>
      </div>
    </div>
  </nav>
