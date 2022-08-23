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

<!-- ======= Page Property  ======= -->
<div class="our-skill-area fix hidden-sm">
  <div class="overlay"></div>
  <div class="area-padding-2" style="background-size: cover; background-position: 0 -700px; background-image: url(<?php echo base_url('assets/') ?>img/82fa28179db1f8b30c60786d1418f120.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="slide-head-text text-center">
            <h3 class="wow fadeInDown"><span><?php echo get_phrase('Produk Detail') ?></span></h3>
            <ul class="short-bread wow fadeInUp">
              <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
              <li><a href="<?php echo site_url('Layanan_c') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
              <li><?php echo get_phrase('Produk Detail') ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->

<main id="main">
  <!-- ======= About Section ======= -->
  <div id="about" class="about-area area-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h2 class="sec-head-d"><span><?php echo str_replace('-', ' ', $nama) ?></span></h2>
              </a>
              <p align="justify">
                <?php if ($this->session->userdata('current_language') == 'English') { ?>
                  <?php echo $detail->deskripsi_layanan_en ?>
                <?php } else { ?>
                  <?php echo $detail->deskripsi_layanan ?>
                <?php } ?>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
          <div class="well-left">
            <div class="single-well">
              <div class="single-awesome-project">
                <div class="awesome-img-2 wow fadeInUp">
                  <a href="#">
                    <img src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>" alt="<?php echo $detail->nama_layanan . ' - ' . $kategori->nama_kategori . ' - ' . $namaPerusahaan; ?>">
                  </a>
                  <div class="add-actions-2 text-center">
                    <div class="project-dec">
                      <a class="venobox" data-gall="myGallery" href="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div><!-- End About Section -->
</main><!-- End #main -->