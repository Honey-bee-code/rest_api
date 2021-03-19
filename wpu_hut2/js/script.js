function allMenu() {
  $.getJSON("data/pizza.json", function (hasil) {
    let menu = hasil.menu;
    $.each(menu, function (index, data) {
      // append untuk menambahkan diakhir
      $("#daftar-menu").append(
        '<div class="col-md-3" style="margin-bottom: 25px;"><div class="card"><img src="img/menu/' +
          data.gambar +
          '" ="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><h6 class="card-title">Kategori : ' +
          data.kategori +
          '</h6><p class="card-text">' +
          data.deskripsi +
          '</p><h5 id="rupiah"> Rp. ' +
          data.harga +
          '</h5><a href="#" class="btn btn-primary">Pesan Sekarang!</a></div></div></div>'
      );
    });
  });
}

allMenu();

$(".nav-link").on("click", function () {
  $(".nav-link").removeClass("active");
  $(this).addClass("active");
  $("#daftar-menu").html(''); // harus dikosongkan dulu

  let kategori = $(this).html();
  //   console.log(kategori);
  $("h1").html(kategori);
  if (kategori == "All Menu") {
    
    allMenu();
    return;
  }

  $.getJSON("data/pizza.json", function (hasil) {
    let menu = hasil.menu;
    let content = "";
    $.each(menu, function (index, data) {
      if (data.kategori == kategori.toLowerCase()) {
        content +=
          '<div class="col-md-3" style="margin-bottom: 25px;"><div class="card"><img src="img/menu/' +
          data.gambar +
          '" ="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><h6 class="card-title">Kategori : ' +
          data.kategori +
          '</h6><p class="card-text">' +
          data.deskripsi +
          '</p><h5 id="rupiah"> Rp. ' +
          data.harga +
          '</h5><a href="#" class="btn btn-primary">Pesan Sekarang!</a></div></div></div>';
      }
    });
    $("#daftar-menu").html(content);
  });
});

// function rupiah(bilangan) {
//   var numberString = bilangan.toString(),
//     sisa = numberString.length % 3,
//     rupiah = numberString.substr(0, sisa),
//     ribuan = numberString.substr(sisa).match(/\d{3}/g);

//   if (ribuan) {
//     separator = sisa ? "." : "";
//     rupiah += separator + ribuan.join(".");
//   }
//   document.write("Rp " + rupiah);
// }
