<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex">
    <div class="logo mr-auto">
      <h1><a href="<?php echo site_url('Home') ?>"><img src="<?php echo base_url('assets/'); ?>img/logo_h.png" style="margin: -10px -0px 0px 0px;" alt="Logo <?php echo $namaPerusahaan; ?>"></a></h1>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"> <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
        <li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
        <li> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
        <li> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
        <li> <a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
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
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->
<!-- ======= Slider Section ======= -->
<div id="home" class="slider-area">
  <div class="bend niceties preview-2">
    <div id="ensign-nivoslider" class="slides">
      <?php foreach ($slider->result() as $result) : ?>
        <img src="<?php echo base_url('assets/') ?>img/<?php echo $result->foto_slider ?>" alt="<?php echo $namaPerusahaan; ?>" title="#slider-direction-1" style="width=1280px; height=720px;" />
      <?php endforeach; ?>
    </div>
    <!-- direction 1 -->
    <div id="slider-direction-1" class="slider-direction slider-one">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 -->
              <div class="layer-1-2 hidden-xs wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
              </div>
              <!-- layer 2 -->
              <div class="layer-1-1 hidden-xs wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
              </div>
              <!-- layer 3 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Slider -->
<main id="main">
  <!-- ======= About ======= -->
  <div id="about" class="about-area area-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo get_phrase('Tentang Kami') ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <?php foreach ($tentang->result() as $result) : ?>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head"><span><?php echo $result->nama_tentang ?></span></h2><br><br>
                </a>
                <p>
                  <?php if ($this->session->userdata('current_language') == 'English') { ?>
                    <?php echo substr($result->deskripsi_tentang_en, 0, 1000) . '...' ?>
                  <?php } else { ?>
                    <?php echo substr($result->deskripsi_tentang, 0, 1000) . '...' ?>
                  <?php } ?>
                </p>
              </div>
              <a href="<?php echo site_url('About-us') ?>" class="btn btn-danger"><?php echo get_phrase('selengkapnya') ?></a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="width: 500px; margin-top:100px;" alt="<?php echo $namaPerusahaan; ?>">
                </a>
              </div>
            </div>
          </div>
          <!-- End col-->
      </div>
    <?php endforeach; ?>
    </div>
  </div><!-- End About Section -->

  <!-- ======= Property Section ======= -->
  <!-- <div class="our-skill-area fix hidden-sm wow fadeIn"> -->
  <div style="background-image: url('assetsuser/img/background/beranda.jpeg'); position: relative;">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <div class="row wow fadeInDown">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h4><span><?php echo get_phrase('Galeri Foto') ?></span></h4>
            </div>
          </div>
        </div>
        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <?php $a = 0;
          $b = 3;
          foreach ($galeri->result() as $result) {
            $a++;
            if ($a <= $b) { ?>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img-2 wow fadeInUp">
                    <a href="#" class="fancybox"><img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $namaPerusahaan; ?>" /></a>
                    <div class="add-actions-2 text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Skills Section -->
</main><!-- End #main -->