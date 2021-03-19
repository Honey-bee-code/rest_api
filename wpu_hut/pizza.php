<?php include_once 'header.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <h1>Pizza</h1>
      </div>
    </div>
    
    <div class="row">
      <?php foreach($menu as $row) { ?>
      <?php if($row['kategori'] === 'pizza'){ ?>
      <?php include 'data.php'; ?>
      <?php } } ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>
