<?php include_once 'header.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <h1>Nasi</h1>
      </div>
    </div>
    
    <div class="row">
      <?php foreach($menu as $row) { ?>
      <?php if($row['kategori'] === 'nasi'){ ?>
      <?php include 'data.php'; ?>
      <?php } } ?>
    </div>
  </div>


  <?php include 'footer.php'; ?>
