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
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- fonts css -->
  <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- W3CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
    <span>CV. SAMUDERA ABADI</span>
  </div>
  <!-- ======= Home End ======= -->

  <!-- ======= About Start ======= -->
  <div class="tentang container" id="tentang">
    <img src="assets/img/tentangkami.png" alt="" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200">
    <div class="area-tentang" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <h1 class="judul">Tentang Kami</h1>
      <p>
        CV. SAMUDERA ABADI didirikan pada tahun 2020 sebagai perusahaan yang bergerak di bidang pengadaan barang dan jasa.
      </p>
      <p>. . .</p>
    </div>
  </div>
  <!-- ======= About End ======= -->

  <!-- ======= visi Start ======= -->
  <div class="visi container">
    <h1 class="judul">Visi & Misi</h1>
    <div class="area-visi">
      <div class="visi-kiri">
        <div class="box-visi" data-aos="fade-up" data-aos-duration="500">
          <!-- <img src="assets/img/pelayanan.png" alt=""> -->
          <h1>Visi</h1>
          <p>Menjadi perusahaan terbaik dalam pengadaan barang dan jasa khususnya alat - alat laboratorium yang dapat memberikan solusi terbaik dalam bidang pengadaan barang dan jasa.
          </p>
        </div>
        <div class="box-visi" data-aos="fade-up" data-aos-duration="500">
          <!-- <img src="assets/img/bahan.png" alt=""> -->
          <h1>Misi</h1>
          <p>Memberikan layanan terbaik dan menjaga kepuasan customer/ client dalam pengembangan bisnis di Indonesia dengan prinsip "We give you perfect service quality."</p>
        </div>
        <!-- <div class="box-visi" data-aos="fade-up" data-aos-duration="500">
          <img src="assets/img/suasana.png" alt="">
          <h1>Good Atmosphere</h1>
          <p>we chose a strategic place. The design of the place is adjusted so that visitors feel at home entering
            our
            shop, chatting with friends, friends and family is very comfortable here.</p>
        </div> -->
      </div>
      <div class="main-carousel">
        <div class="carousel-cell">
          <img src="assets/img/b1.jpg" alt="">
        </div>
        <div class="carousel-cell">
          <img src="assets/img/b2.jpg" alt="">
        </div>
        <div class="carousel-cell">
          <img src="assets/img/b3.jpg" alt="">
        </div>
        <div class="carousel-cell">
          <img src="assets/img/b4.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- ======= visi End ======= -->

  <!-- produk start -->
  <div class="menu container" id="menu">
    <h1 class="judul" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Produk</h1>
    <div class="carousel">
        <?php
        include './assets/koneksi.php';
        $result = mysqli_query($con, "SELECT * FROM tabelproduk");
        while ($row = mysqli_fetch_assoc($result)){
          komponen($row['namaproduk'],$row ['foto'], $row['id'], $row['deskripsi']);
          }
        ?>
    </div>
  </div>
  <!-- produk end -->

  <!-- ======= Review Start ======= -->
  <div class="review container" id="review">
    <h1 class="judul" data-aos="zoom-in-up" data-aos-duration="1000">Kontak</h1>
    <div class="area-review">

      <div class="box-review" data-aos="fade-up" data-aos-duration="1500">
        <img src="assets/img/admin1.png" alt="">
        <h1 data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="500">Melda Ruspita</h1>
        <p data-aos="fade-down" data-aos-duration="500" data-aos-delay="800">Admin 1</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">. . . .</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><a href="https://wa.me/+6285215346074"><button class="w3-button w3-round-large w3-green">Chat Saya <i class="fa fa-whatsapp"></i></button></a>
      </div>
      <div class="box-review" data-aos="fade-up" data-aos-duration="1500">
        <img src="assets/img/admin2.png" alt="">
        <h1 data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="500">Ayu Octaviani</h1>
        <p data-aos="fade-down" data-aos-duration="500" data-aos-delay="800">Admin 2</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">. . .</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><a href="https://wa.me/+6282169421090"><button class="w3-button w3-round-large w3-green">Chat Saya <i class="fa fa-whatsapp"></i></button></a>
      </div>

      <div class="box-review" data-aos="fade-up" data-aos-duration="1500">
        <img src="assets/img/admin3.png" alt="">
        <h1 data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="500">Wulan K</h1>
        <p data-aos="fade-down" data-aos-duration="500" data-aos-delay="800">Marketing</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"> . . .</p>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><a href="https://wa.me/+6282180300992"><button class="w3-button w3-round-large w3-green">Chat Saya <i class="fa fa-whatsapp"></i></button></a>
      </div>

    </div>
  </div>
  <!-- ======= Review End ======= -->

  <!-- ======= Partnership Start ======= -->
  <!-- <div class="partner container" id="partnership">
    <h1 class="judul" data-aos="zoom-in-up" data-aos-duration="500">Partnership</h1>
    <div class="main-carousel">
      <div class="carousel-cell">
        <img src="assets/img/AYANA.png" alt="">
      </div>
      <div class="carousel-cell">
        <img src="assets/img/grand-aston.png" alt="">
      </div>
      <div class="carousel-cell">
        <img src="assets/img/LOGO-GIK.png" alt="">
      </div>
      <div class="carousel-cell">
        <img src="assets/img/padma-legian-logo.png" alt="">
      </div>
      <div class="carousel-cell">
        <img src="assets/img/potato-head.png" alt="">
      </div>
      <div class="carousel-cell">
        <img src="assets/img/hard-rock.png" alt="">
      </div>
    </div>
  </div> -->
  <!-- ======= Partnership End ======= -->

  <!-- ======= Outlet Start ======= -->
  <div class="lokasi container" id="lokasi">
    <h1 class="judul" data-aos="fade-up" data-aos-duration="500">Lokasi</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.0519315409279!2d103.60136686014518!3d-1.628053766540521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258931b24be3af%3A0x982b9ac9c108df44!2sCV.%20Samudera%20Abadi!5e0!3m2!1sid!2sid!4v1693192034747!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
    <!-- <a href="https://www.google.com/maps/dir//CV.+Samudera+Abadi,+Suka+Karya,+Kec.+Kota+Baru,+Kota+Jambi,+Jambi+36129/@-1.6281717,103.599028,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e258931b24be3af:0x982b9ac9c108df44!2m2!1d103.6016029!2d-1.6281771?entry=ttu"><button class="w3-button w3-round-xlarge w3-green">Buka di Maps</button></a> -->
  </div>
  <!-- ======= Outlet End ======= -->

  <!-- ======= Galery Start ======= -->
  <div class="gallery container">
    <h1 class="judul">Galeri</h1>
    <div class="area-gallery" id="content">
      <?php
        include './assets/koneksi.php';
        $result = mysqli_query($con, "SELECT * FROM tabelgaleri");
        while ($row = mysqli_fetch_assoc($result)){
          komponen2($row ['foto']);
          }
        ?>
    </div>
  </div>
  <!-- ======= Galery End ======= -->

  <!-- ======= Footer Start ======= -->
  <div class="footer">
    <div class="footer-1">
      <div class="footer-logo" data-aos="fade-down" data-aos-duration="800">
        <img src="assets/img/logo.png" alt="">
        <h1>CV. SAMUDERA ABADI</h1>
      </div>
      <p data-aos="fade-up" data-aos-duration="800"><br>Kami memberikan <br> kualitas layanan terbaik. </p>
      <div class="sosial-media">
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=jrjtXDzSQxMRlFZdWrvWllKHHHmftnnbHXxDBPGbMKPLVPmcJhpxnwwhClmBzqccpJKsXBKk">
          <img src="assets/img/gmail.png" alt="" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="200">
        </a>
        <a href="https://instagram.com/samuderaabadi12/">
          <img src="assets/img/instagram.png" alt="" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="250">
        </a>
        
      </div>
    </div>

    <div class="footer-2">
      <!-- <h1 data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">Contact</h1>
      <a href="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">+62 821 2566 4554</a>
      <a href="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">info@centurybakery.com</a> -->
    </div>

    <div class="footer-3">
      <h1 data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">Jam Operasional</h1>
      <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">Senin - Jumat 08.30 - 17.00</p>
      <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Sabtu 08.30 - 15.00 </p>
      <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="450">Minggu - Libur</p>
    </div>

    <div class="footer-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
      <h1>Link</h1>
      <a data-scroll data-easing="easeInQuint" href="#beranda">Beranda</a>
      <a data-scroll data-easing="easeInQuint" href="#tentang">Tentang Kami</a>
      <a data-scroll data-easing="easeInQuint" href="#menu">Produk</a>
      <a data-scroll data-easing="easeInQuint" href="#review">Kontak</a>
      <!-- <a data-scroll data-easing="easeInQuint" href="#partnership">Partnership</a> -->
      <a data-scroll data-easing="easeInQuint" href="#lokasi">Lokasi</a>
    </div>
  </div>
  <footer>
    <h1>&copy; Copyright 2023, <a href=""> CV. SAMUDERA ABADI.</a> All Rights Reserved</h1>
  </footer>
  <!-- ======= Footer End ======= -->

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