<?php include_once 'header.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <h1>All Menu</h1>
      </div>
    </div>
    
    <div class="row">
      <?php foreach($menu as $row) { ?>
      <?php include 'data.php'; ?>
      <?php } ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>



    