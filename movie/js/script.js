function searchMovie() {
  // $.getJSON('http://omdbapi.com/?apikey=a1e37a18') ==> kita akan pakai versi asli ajax
  $("#ml").html(""); // mengosongkan terlebih dahulu
  $.ajax({
    url: "http://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "a1e37a18",
      s: $("#si").val(),
    },
    success: function (hasil) {
      console.log(hasil);
      if (hasil.Response == "True") {
        let movies = hasil.Search;
        console.log(movies);
        $.each(movies, function (i, d) {
          $("#ml").append(`
            <div class="col-md-3" style="margin-bottom: 25px">
                <div class="card">
                    <img src="` +d.Poster +`" class="card-img-top" alt="poster">
                    <div class="card-body">
                        <h5 class="card-title">` +d.Title +`</h5>
                        <p class="card-text">` +d.Year +`</p>
                        <a href="#" class="card-link sd" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="` +d.imdbID +`">See Details</a>
                    </div>
                </div>
            </div>
          `);
        });
      } else {
        $("#ml").html(
          `
        <div class="col">
        <h2 class="text-center" style="color: red">` +
            hasil.Error +
            `</h2></div>
        `
        );
      }

      $("#si").val("");
    },
  });
}

$("#sb").on("click", function () {
  searchMovie();
});
$("#si").on("keyup", function (event) {
  if (event.keyCode === 13) {
    // 13 adalah kode enter
    searchMovie();
  }
});

$("#ml").on("click", ".sd", function () {
  // karena element sd(see-detail) ada di dalam ml(movie-list)
  $.ajax({
    url: "http://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apikey: "a1e37a18",
      i: $(this).data("id"),
    },
    success: function (movie) {
      if (movie.Response === "True") {
        $(".modal-body").html(`
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img src="`+movie.Poster+`" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item"><h3>`+movie.Title+`</h3></li>
                        <li class="list-group-item">Released : `+movie.Released+`</li>
                        <li class="list-group-item">Genre : `+movie.Genre+`</li>
                        <li class="list-group-item">Director : `+movie.Director+`</li>
                        <li class="list-group-item">Writer : `+movie.Writer+`</li>
                        <li class="list-group-item">Actors : `+movie.Actors+`</li>
                        <li class="list-group-item">IMDB Rating : `+movie.imdbRating+`</li>
                    </ul>
                </div>
            </div>
        </div>
        `);
      }
    },
  });
});
