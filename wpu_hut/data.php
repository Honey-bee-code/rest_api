<div class="col-md-3" style="margin-bottom: 25px;">
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