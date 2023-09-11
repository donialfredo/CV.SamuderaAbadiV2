<?php
require_once ('./assets/component.php');
require_once ('./assets/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CV. Samudera Abadi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="assets/vendor/aos.css/aos.css" />
  <link rel="stylesheet" href="assets/vendor/flickity.css/flickity.css" />

  <!-- Template Main CSS File -->
  <!-- fonts css -->
  <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- W3CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="assets/css/style.css" />



</head>

<body>
  <!-- ======= Header ======= -->
  <div class="nav">
    <img src="assets/img/logo.png" alt="" data-aos="fade-down" data-aos-duration="1500">
    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="50">Beranda</a>
    <a data-scroll data-easing="easeInQuint" href="#tentang" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="100">Tentang Kami</a>
    <a data-scroll data-easing="easeInQuint" href="#menu" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="150">Produk</a>
    <a data-scroll data-easing="easeInQuint" href="#review" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="150">Kontak</a>
    <!-- <a data-scroll data-easing="easeInQuint" href="#partnership" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="100">Partnership</a> -->
    <a data-scroll data-easing="easeInQuint" href="#lokasi" data-aos="fade-down" data-aos-duration="400"
      data-aos-delay="50">Lokasi</a>
    <img src="assets/img/menu.png" alt="" id="btn-nav" data-aos="fade-down" data-aos-duration="700" data-aos-delay="50">
  </div>


  <!-- ======= Navbar ======= -->
  <div class="nav-menu">
    <div class="btn-menu">
      <img src="assets/img/close.png" alt="" id="btn-menu">
    </div>
    <a id="nav-link" data-scroll data-easing="easeInQuint" href="#beranda">Beranda</a>
    <a id="nav-link1" data-scroll data-easing="easeInQuint" href="#tentang">About Us</a>
    <a id="nav-link2" data-scroll data-easing="easeInQuint" href="#menu">Menu</a>
    <a id="nav-link3" data-scroll data-easing="easeInQuint" href="#review">Kontak</a>
    <!-- <a id="nav-link4" data-scroll data-easing="easeInQuint" href="#partnership">Partnership</a> -->
    <a id="nav-link5" data-scroll data-easing="easeInQuint" href="#lokasi">Lokasi</a>
  </div> <!-- End Header -->

  <!-- ======= Home Start ======= -->
  <div class="beranda" id="beranda">
    <!-- <span id="typed" data-aos="fade-up" data-aos-duration="500"></span> -->
    <a href="uploadproduk.php"><button class="w3-btn w3-blue w3-xlarge">Upload Produk</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="uploadgaleri.php"><button class="w3-btn w3-blue w3-xlarge">Upload Galery</button></a>
  </div>
  <!-- ======= Home End ======= -->


  <!-- Vendor JS Files --> 
  <script src="assets/vendor/jquery.js/jquery.js"></script>
  <script src="assets/vendor/type.js/type.js"></script>
  <script src="assets/vendor/aos.js/aos.js"></script>
  <script src="assets/vendor/flickity.js/flickity.pkgd.min.js"></script>
  <script src="assets/vendor/smoth-scroll.js/smoth-scroll.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>