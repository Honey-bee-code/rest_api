<?php
function get_curl($url){
  $curl = curl_init();
  // $part = 'snippet,statistics';
  // $id = 'UCT7692E2GX2XjRHjPd7kvTw';
  // $key = 'AIzaSyDMAoVo3KOqqh-tx-QDqbD6vsy1MGVMGYk';
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // true jika ingin data kembalian berbentuk teks
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}
$details = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCT7692E2GX2XjRHjPd7kvTw&key=AIzaSyDMAoVo3KOqqh-tx-QDqbD6vsy1MGVMGYk';

$result = get_curl($details);
$ytprofilepic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$namaChanel = $result['items'][0]['snippet']['title'];
$subscribers = $result['items'][0]['statistics']['subscriberCount'];
$views = $result['items'][0]['statistics']['viewCount'];
$videos = $result['items'][0]['statistics']['videoCount'];

//latest video url
$lvideo1 = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDMAoVo3KOqqh-tx-QDqbD6vsy1MGVMGYk&channelId=UCT7692E2GX2XjRHjPd7kvTw&maxResults=1&order=viewCount';
$lvideo2 = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDMAoVo3KOqqh-tx-QDqbD6vsy1MGVMGYk&channelId=UCT7692E2GX2XjRHjPd7kvTw&maxResults=1&order=date';
$result1 = get_curl($lvideo1);
$result2 = get_curl($lvideo2);
$vid1 = $result1['items'][0]['id']['videoId'];
$vid2 = $result2['items'][0]['id']['videoId'];

$url = 'https://www.instagram.com/p/CEEtDvtFMV0/';
$ig ='https://graph.facebook.com/v10.0/instagram_oembed?access_token=EAAQgfhjNZCOIBAKpNXgZCpyhDJvFRSSLhJucP0xCUzPzsCfqyUUrVqNi7OhUZCeePsNpgxOlHFyM30y2bLIf6NoeAkf0jj92T8PQnUw9npOdoRu5tKGxjBNN3ga0EfyqQ6RU0P1lOnL2JIiMqUKdD2m1fuJ3HfXPW9pGoExlO3d4GSOsXikcSZAIRwi74sui5f57gJofZB6GfauKMx58AnQBZBO6GxgAxHyscfaAcFRUulGfz72eY2&url='.$url;
$result3 = get_curl($ig);
$igpost = $result3['html'];



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/bee.png">

    <!-- My CSS -->
    <link rel="stylesheet" href="style2.css" />
    <title>HoneyBeeCode</title>
  </head>
  <body id="home" style="background-image: url(img/begrond2.png)">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">HoneyBeeCode</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#social">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center" style="color: aliceblue; text-shadow: 0 3px 20px rgba(0, 0, 0, 0.7)">
      <div class="container">
        <img src="img/me.jpg" alt="me" width="200" class="rounded-circle img-thumbnail shadow" />
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1 class="display-4" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 20px">Muhammad Aulia Hanifi</h1>
            <p class="lead" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 20px">Calligrapher | Programmer</p>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-lg-4 text-end">
            <p>
              As a <b>Calligrapher</b>, I started my professional carrier from 2013. I learn and teach calligraphy in schols and sometimes making mural calligraphy in several mosques in Lombok-West Nusa Tenggara. I won several calligraphy
              competitions at MTQ (The Quranic Competition in Indonesia), and for the last time in year 2019 I won 1st place in MTQ of West Nusa Tenggara Province.
            </p>
          </div>
          <div class="col-lg-4">
            <p>As a <b>Programmer</b>, I just started it from mid Desember 2020. And now I am still learning more to improve my programming skill.</p>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Akhir About -->

    <!-- Youtube & Instagram -->
    <section class="social" id="social">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row align-items-center">
              <div class="col-md-4">
                <img src="<?=$ytprofilepic?>" style="height: 150px; width: 150px; object-fit: cover; " class="rounded-circle" alt="">
              </div>
              <div class="col-md-8">
                <h5><?=$namaChanel?></h5>
                <span><b><?=$subscribers?></b> Subscribers</span><br>
                <span><b><?=$views?></b> Views</span><br>
                <span><b><?=$videos?></b> Videos</span><br>
                <script src="https://apis.google.com/js/platform.js"></script>
                <div class="g-ytsubscribe" data-channelid="UCT7692E2GX2XjRHjPd7kvTw" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <span>Most Popular Videos </span>
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/<?=$vid1?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <span>Latest Videos</span>
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/<?=$vid2?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row mt-3 pb-3">
              <div class="col">
                <?=$igpost?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Youtube & Instagram -->

    <!-- gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <h2>My Gallery</h2>
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gallery/1.jpg" class="card-img-top" alt="gallery 1" />
              <div class="card-body">
                <h5 class="card-title">Masjid Nurul Hikmah</h5>
                <p class="card-text">Pengerjaan Kaligrafi Kubah Masjid di Lingkungan Karang Baru, Kelurahan Kebon Sari, Kecamatan Ampenan, Kota Mataram, Provinsi Nusa Tenggara Barat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gallery/2.jpg" class="card-img-top" alt="gallery 2" />
              <div class="card-body">
                <h5 class="card-title">Masjid Baiturrahman</h5>
                <p class="card-text">Pengerjaan Kaligrafi Mimbar Masjid di Lingkungan Suradadi Timur, Kelurahan Karang Baru, Kecamatan Mataram, Kota Mataram, Provinsi Nusa Tenggara Barat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gallery/3.jpg" class="card-img-top" alt="gallery 3" />
              <div class="card-body">
                <h5 class="card-title">Masjid Nurul Huda</h5>
                <p class="card-text">Pengerjaan Kaligrafi Kubah Masjid di Lingkungan Oloh, Kelurahan Karang Kelok, Kecamatan Mataram, Kota Mataram, Provinsi Nusa Tenggara Barat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gallery/4.jpg" class="card-img-top" alt="gallery 4" />
              <div class="card-body">
                <h5 class="card-title">Masjid Kantor PLN Ampenan</h5>
                <p class="card-text">Pengerjaan Kaligrafi Dinding Masjid di Kantor PLN Ampenan, Kota Mataram, Provinsi Nusa Tenggara Barat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gallery/5.jpg" class="card-img-top" alt="gallery 5" />
              <div class="card-body">
                <h5 class="card-title">Kaligrafi Nama Digital</h5>
                <p class="card-text">Contoh hasil kaligrafi nama hasil olahan digital menggunakan aplikasi android Ana Mukhtarif Alkhat dan Pixel Lab.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Akhir gallery -->

    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <h2>My Project</h2>
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/pos.png" class="card-img-top" alt="pos" />
              <div class="card-body">
                <h5 class="card-title">Aplikasi Kasir (Point of Sale)</h5>
                <p class="card-text">Merupakan aplikasi pengolah data transaksi kasir, dimulai dari barang masuk, barang keluar, hingga penjualan. Untuk demo silahkan gunakan <br />Username: Kasir <br />Password: Kasir</p>
              </div>
              <a href="http://honeybeepos.byethost33.com/pos" class="btn btn-primary">Check it out!</a>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/quran.png" class="card-img-top" alt="quran" />
              <div class="card-body">
                <h5 class="card-title">Aplikasi Tafsir Quran Digital</h5>
                <p class="card-text">Merupakan aplikasi pencarian tafsir Al-Quran denga berbagai bahasa, saat ini tersedia Bahasa Indonesia, Bahasa Arab, dan Bahasa Inggris.</p>
              </div>
              <a href="http://honeybeepos.byethost33.com/quran" class="btn btn-primary">Check it out!</a>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/ngobrol.png" class="card-img-top" alt="retur" />
              <div class="card-body">
                <h5 class="card-title">Ngobrol App</h5>
                <p class="card-text">Merupakan aplikasi messenger sejenis Whatsapp atau FB Mesengger berbasis web. Aplikasi ini masih dalam tahap pengembangan.</p>
              </div>
              <a href="http://honeybeepos.byethost33.com/pesan" class="btn btn-primary">Check it out!</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/al-azhar.png" class="card-img-top" alt="pos" />
              <div class="card-body">
                <h5 class="card-title">Pesantren Tahfiz Al-Azhar</h5>
                <p class="card-text">Website Portofolio untuk Pesantren Tahfidz Al-Azhar Sadah, Desa Janapria, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat</p>
              </div>
              <a href="https://honey-bee-code.github.io/pesantren-alazhar/" class="btn btn-primary">Check it out!</a>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <hr>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show d-none contact-alert" role="alert">
              <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="submit-to-google-sheet">
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" name="nama" id="name" aria-describedby="name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">The Message</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Send</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Wait, your message will be sent immediately...
              </button>
            </form>
            <br />
            <p>
              <strong
                >Or just whatsapp me to
                <a href="https://api.whatsapp.com/send?phone=6285237585803&text=Assalamualaikum,%20Haloo%20honeybeecode.com,%20Saya%20butuh%20bantuan,.." style="color: white; text-decoration: none">+6285237585803</a></strong
              >
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="rgb(0,0,0)"
          fill-opacity="1"
          d="M0,256L26.7,266.7C53.3,277,107,299,160,298.7C213.3,299,267,277,320,250.7C373.3,224,427,192,480,192C533.3,192,587,224,640,245.3C693.3,267,747,277,800,282.7C853.3,288,907,288,960,261.3C1013.3,235,1067,181,1120,181.3C1173.3,181,1227,235,1280,261.3C1333.3,288,1387,288,1413,288L1440,288L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="text-white text-center pb-3" style="background-color: black">
      <p>
        <strong
          >Created with <i class="bi bi-suit-heart-fill text-danger"></i> by
          <a
            href="https://api.whatsapp.com/send?phone=6285237585803&text=Assalamualaikum,%20Haloo%20honeybeecode.com,%20Saya%20butuh%20bantuan,.."
            style="color: white; text-decoration: none"
            class="text-white"
            style="text-decoration: none"
          >
            Kaligrafi Lombok</a
          ></strong
        >
      </p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("ul li a").click(function () {
          $("li a").removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>
    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbw4UrAXipdrk7IEbxMXuk6FxPjSGkc-943mVU6Tkt8hu6iURimx_FCFdvcZOHmZtewG6g/exec";
      const form = document.forms["submit-to-google-sheet"];
      const btnKirim = document.querySelector(".btn-kirim"),
        btnLoading = document.querySelector(".btn-loading"),
        contactAlert = document.querySelector(".contact-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit di klik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            // tampilkan alert
            contactAlert.classList.toggle("d-none");
            // kosongkan inputan form
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
