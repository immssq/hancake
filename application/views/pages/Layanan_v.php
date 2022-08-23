<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hanisun Cake</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_h.png" rel="icon">
  <link href="assets/img/logo_h.png" rel="logo_h">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v4.8.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1><a href="Home">HANISUN CAKE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
          <li>
          <a href="#" class="" data-toggle="dropdown">
            <?php echo get_phrase('Pilih Bahasa'); ?>
            <img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;<img src="<?php echo base_url('assets/') ?>flag/en.png">
            &nbsp;
            <i class="ace-icon fa fa-angle-down bigger-110"></i>
          </a>
          <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
            <?php
            $fields = $this->db->list_fields('language');
            foreach ($fields as $field) {
              if ($field == 'phrase_id' || $field == 'phrase') continue;
            ?>
              <li>
                <a href="<?php echo base_url(); ?>Multilanguage/select_language/<?php echo $field; ?>" style="color:black;">
                  <?php echo $field; ?>
                  <?php //selecting current language
                  if ($this->session->userdata('current_language') == $field) : ?>
                    <i class="icon-ok"></i>
                  <?php endif; ?>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('assets/img/about.jpeg');">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Product</h2>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  
<!-- ======= Services Section ======= -->
<?php foreach ($product as $p) : ?>

<div class="about-area area-padding-3">
  <div class="container">
    <div class="row wow fadeInDown">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-left">
          <?php if ($this->session->userdata('current_language') == 'English') { ?>
            <h3><?php echo $p['nama_kategori_en']; ?></h3>
          <?php } else { ?>
            <h3><?php echo $p['nama_kategori']; ?></h3>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="row awesome-project-content">
      <!-- single-awesome-project start -->
      <?php foreach ($gambar->gambarproduk($p['id_kategori'])->result() as $result) : ?>
        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_layanan ?>" alt="<?php echo $result->nama_layanan . ' - ' . $p['nama_kategori'] . ' - ' . $namaPerusahaan; ?>" />
              <div class="add-actions text-center">
                <div class="project-dec">

                  <?php if ($this->session->userdata('current_language') == 'English') { ?>
                    <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $result->kategori) . '/' . str_replace(' ', '-', $result->nama_layanan_en)) ?>">
                      <h4><?php echo $result->nama_layanan_en ?></h4>
                      <span><?php echo substr($result->deskripsi_layanan_en, 0, 100) . " ... " ?></span>
                    <?php } else { ?>
                      <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $result->kategori) . '/' . str_replace(' ', '-', $result->nama_layanan)) ?>">
                        <h4><?php echo $result->nama_layanan ?></h4>
                        <span><?php echo substr($result->deskripsi_layanan, 0, 100) . " ... " ?></span>
                      <?php } ?>

                      </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="see-more text-center col-12">
        <?php if ($this->session->userdata('current_language') == 'English') { ?>
          <a href="<?php echo site_url('Our-Products/' . str_replace(' ', '-', $p['nama_kategori_en'])) ?>" class="btn btn-danger"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
        <?php } else { ?>
          <a href="<?php echo site_url('Our-Products/' . str_replace(' ', '-', $p['nama_kategori'])) ?>" class="btn btn-danger"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
