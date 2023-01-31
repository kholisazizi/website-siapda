<!DOCTYPE html>
<html lang="en">
<?php
include_once('koneksi.php');
?>

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Website Perangkat Daerah</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/logo-madiun.png" rel="icon" />
  <link href="assets/img/logo-madiun.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />



  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo d-flex align-items-center">
        <img src="assets/img/logo-madiun.png" width="40" height="50" />
      </div>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="login" href="login.php">Login</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">
            SELAMAT DATANG DI SIAPDA KABUPATEN MADIUN
          </h2>
          <p data-aos="fade-up" data-aos-delay="100">
            Website Untuk Memudahkan Pencarian Aplikasi Perangkat Daerah di
            Kabupaten Madiun
          </p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Ketik Untuk Mencari" />
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p>Total Aplikasi</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></span>
                <p>APlikasi Aktif</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                <p>Aplikasi Non Aktif</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/logo-madiun.png" class="img-fluid mb-3 mb-lg-0" alt="" height="500" width="400" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-4 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <img src="assets/img/logo-madiun.png" alt="Kabupaten Madiun" class="img-fluid-siapda" />
          </div>
          <div class="col-xl-8 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>SIAPDA Kabupaten Madiun</h3>
            <p class="teks-deskripsi-about">
              <span>SIAPDA</span> adalah website yang digunakan untuk
              memberikan informasi aplikasi-aplikasi Perangkat Daerah yang
              berada di Kabupaten Madiun. Website ini bisa diakses melalui
              perangkat gawai atau komputer.
            </p>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Portal Section ======= -->
    <section id="portal" class="portal pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Portal Peranggkat Daerah Kabupaten Madiun</span>
          <h2>PORTAL PERANGKAT DAERAH KABUPATEN MADIUN</h2>
        </div>

        <div class="about_card-container layout_padding2-top">
          <div class="row justify-content-center">
            <?php
            $no = 1;
            $result = $conn->query("SELECT * FROM dataperangkat order by namainstansi asc");
            while ($data = $result->fetch_array()) :
            ?>
              <div class="col-md-2">
                <div class="about_card" data-aos="fade-up">
                  <div class="about-detail">
                    <div class="about_img-container">
                      <div class="about_img-box">
                        <div class="dropdown">
                          <img src="assets/upload/<?= $data['logo'] ?>" alt="" />
                          <?php
                          $ambil = $conn->query("SELECT * FROM link where iddataperangkat='$data[iddataperangkat]' order by idlink asc");
                          $cek = $ambil->num_rows;
                          if ($cek >= 1) {
                          ?>
                            <div class="dropdown-content">
                              <br>
                              <?php
                              while ($datalink = $ambil->fetch_array()) : ?>
                                <ol><a href="<?= $datalink['link'] ?>" target="_blank"><?= $datalink['namalink'] ?></a></ol>
                              <?php endwhile; ?>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="card_detail-ox">
                      <h4><?= $data['namainstansi'] ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <!-- End Deskripsi OPD-->


          <!-- End Deskripsi OPD-->

        </div>
        <!--End Container Portal-->
      </div>
      <!--End Portal -->
    </section>
    <!-- End Portal Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SIAPDA</span>
          </a>
          <p>
            SIAPDA merupakan website yang menampilkan informasi-informasi
            aplikasi perangkat daerah yang berada di Kabupaten Madiun, Jawa
            Timur
          </p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan Lainnya</h4>
          <ul>
            <li><a href="https://madiunkab.go.id">Kabupaten Madiun</a></li>
            <li>
              <a href="https://lapor.go.id/">Layanan Aspirasi dan Pengaduan Online Rakyat</a>
            </li>
            <li>
              <a href="https://lpse.madiunkab.go.id/eproc4">Layanan Pengantar Surat Elektronik</a>
            </li>
            <li>
              <a href="https://lpplpuroboyofmcaruban.blogspot.com/">Puroboyo FM Kabupaten Madiun</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact US</h4>
          <p>
            Jl.Mastrip No.23 Kel.Klegen <br />
            Kec.Kartoharjo Kota Madiun<br />
            Jawa Timur<br /><br />
            <strong>Phone:</strong> +0351-462927<br />
            <strong>Email:</strong> diskominfo@madiunkab.go.id<br />
          </p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Follow US</h4>
          <div class="social-links d-flex mt-4">
            <a href="https://mobile.twitter.com/PuroboyofmRadio" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://free.facebook.com/rkpdcrbn?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/kominfokabmadiun?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://youtube.com/channel/UCFims01MWsr33bhpAXBIcpQ" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        © Copyright <strong><span>Diskominfo Kab.Madiun</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by
        <a href="https://diskominfo.madiunkab.go.id/">Dinas Komunikasi dan Informatika Kabupaten Madiun</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Read more-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>