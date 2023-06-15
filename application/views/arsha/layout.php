<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PinjamKuy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/assets/Arsha/');?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">PinjamKuy!</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Peminjaman Sarana dan Prasarana Fakultas Teknik</h1>
          <Layanan>Terbaru! 
            Layanan peminjaman sarana dan prasarana online<h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
          <a class="btn-get-started scrollto" href="<?php echo base_url('admin') ?>"><?php echo $logged_petugas ?></a>
            <a class="btn-get-started scrollto" href="<?php echo base_url('member') ?>"><?php echo $logged_peminjam ?></a>
           
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url('/assets/Arsha/');?>assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Apa Itu PinjamKuy?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 mx-auto text-center">
            <p>
            Hi, PINJAMKUY adalah layanan aplikasi website yang berisi berbagai sarana dan prasarana yang tersedia untuk berbagai kegiatan di Fakultas Teknik Unsoed. Dengan ini kamu bisa memenuhi kebutuhan untuk kegiatan kamu dengan mudah. Apa saja sarana dan prasaranan yang kamu butuhkan, bisa kamu pinjam sekarang!
            </p>
            <a href="#" class="btn-learn-more">Pinjam</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Kamu bisa memanfaatkan layanan kami di sini untuk memenuhi kebutuhanmu!</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-1"></i>
            </div>
              <h4><a href="">Pinjam</a></h4>
              <p>Meminjam sarana dan prasara yang kamu butuhkan untuk memudahkan kegiatanmu</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-1"></i>
            </div>
              <h4><a href="">Ambil</a></h4>
              <p>Ambil alat yang kamu butuhkan</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-1"></i>
            </div>
              <h4><a href="">Kembalikan</a></h4>
              <p>Jangan lupa kembalikan alat yang kamu pinjam dengan baik</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-1"></i>
            </div>
              <h4><a href="">History</a></h4>
              <p>Lihat riwayat peminjaman kamu</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PINJAMKUY!</h2>
          <p></p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-alat">Alat</li>
          <li data-filter=".filter-ruang">Ruangan</li>

        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat">
            <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Kamera</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Proyektor</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ruang">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/ruang 1.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ruang 1</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Speaker</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ruang">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/ruang 2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ruang 2</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-alat">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Microphone</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ruang">
          <div class="portfolio-img"><img src="<?php echo base_url('/assets/Arsha/');?>assets/img/sarpras/ruang 3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ruang 3</h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi kami jika kamu menemukan masalah</p>
          <p> Kritik dan Saran yang membangun sangat berguna bagi peningkatan fasilitas dan pelayanan kami</p>
        </div>

        <div class="row">
          <div class="col-lg-5 mx-auto row-center">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Fakultas Teknik Unsoed, Jalan Raya Mayjen Sungkono, Purbalingga</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>pinjemkuy@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy;  <strong><span>PinjamKuy</span></strong>. 
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/assets/Arsha/');?>assets/js/main.js"></script>

</body>

</html>