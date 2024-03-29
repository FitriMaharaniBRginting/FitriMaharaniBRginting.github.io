<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Fitri - Homepage</title>
</head>
<body class="bg.dark">   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Olshop Ginting</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/About">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Others
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/Login Form">Login</a></li>
                  <li><a class="dropdown-item" href="/contact">Contact</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/tentang kami">Tentang Kami</a></li>
                </ul>
              </li>
              
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container-fluid bg-dark text-light mb-4" style="height: 100%">

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/caption1.jpeg" class="d-block w-100" alt="tour guide image" style="height: 400px">
                <div class="carousel-caption">
                  <h5>Kaktus Koboi</h5>
                  <p>Kaktus dengan nama latin Cereus peruvianus ini banyak sekali difungsikan sebagai tanaman hias indoor maupun outdoor.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/caption2.jpeg" class="d-block w-100" alt="tour guide image" style="height: 400px">
                <div class="carousel-caption">
                  <h5>Astrophytum</h5>
                  <p>Astrophytum memiliki bentuk dan tampilan yang sangat khas menyerupai buah belimbing dan nyaris tanpa duri-duri seperti kaktus pada umumnya.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/caption3.jpeg" class="d-block w-100" alt="tour guide image" style="height: 400px">
                <div class="carousel-caption">
                  <h5>Kaktus medusa</h5>
                  <p>Jenis tanaman hias kaktus populer selanjutnya adalah kaktus medusa atau Astrophytum caput-medusae.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <div class="row text-center align-items-center mt-4">
          <div class="col-12">
            <img src="assets/profil.png" width="200" height="200"/>
            <h2 class="mt-2">Fitri Maharani BR Ginting</h2>
            <h2>NIM 21.01.53.6001 </h2>
          </div>
        </div>
<!-- ... Bagian HTML Sebelumnya ... -->

<?php
// Koneksi dan pengambilan data produk


// Tutup koneksi
// ...
?>

<section id="catalog" class="container my-5">
    <h2 class="text-center mb-4">Product Catalog</h2>
    <div class="row">
        <?php
        // Tampilkan data produk
        include "koneksi.php";
        ?>
    </div>
</section>

<!-- ... Bagian HTML Setelahnya ... -->

        <div class="row text-dark mt-2">
            <div class="col-sm-4 g-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Dekorasi Kaktus</h5>
                  <p class="card-text">Tanaman kaktus hidup di tempat yang cerah dengan aliran udara yang baik.</p>
                  <a href="/Dekorasi" class="btn btn-dark d-block">Lihat</a>
                </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                      $12
              </div>
            </div>
            <div class="col-sm-4 g-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Souvenir Kaktus</h5>
                  <p class="card-text">Beberapa contoh souvenir kaktus yang menarik dan unik sebagai hiasan.</p>
                  <a href="/Souvenir" class="btn btn-dark d-block">Lihat</a>
                </div>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                    $12
              </div>
            </div>
            <div class="col-sm-4 g-2">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Perawatan Khusus Kaktus</h5>
                    <p class="card-text">Tips sukses merawat dan memelihara tanaman kaktus yang wajib diketahui.</p>
                    <a href="/Perwatan Khusus" class="btn btn-dark d-block">Lihat</a>
                  </div>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                    $12
                </div>
              </div>
          </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>