<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Sistem Informasi Peminjaman Buku Teknik Informatika</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/content_256.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/content_256.png">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/site.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/vendor/flag-icon-css/flag-icon.css">


  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/pages/login.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets1/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="<?php echo base_url(); ?>assets/img/content_256.png" width="50px" hight="50px" alt="...">
        <h2 class="brand-text">Sipti</h2>
      </div>
      <p>Masuk ke halaman akun Anda</p>
      <form method="post" action="<?php echo base_url(); ?>sipti_controller/profil_lihat">
        <div class="form-group">
          <label class="sr-only" for="inputName">NRP</label>
          <input type="text" class="form-control" id="inputName" name="" placeholder="NRP">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name=""
          placeholder="Password">
        </div>
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline pull-left">
            <input type="checkbox" id="inputCheckbox" name="checkbox">
            <label for="inputCheckbox">Ingat saya</label>
          </div>
          <a class="pull-right" href="<?php echo base_url(); ?>sipti_controller/halaman_utama">Halaman Utama</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
      </form>
      

      <footer class="page-copyright">
        <p>WEBSITE oleh Kelompok 9</p>
        <p>© 2016</p>
        <p>Sistem Informasi Peminjaman Buku Teknik Informatika</p>
        
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="<?php echo base_url(); ?>assets1/vendor/jquery/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url(); ?>assets1/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/intro-js/intro.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo base_url(); ?>assets1/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="<?php echo base_url(); ?>assets1/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets1/js/core.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/site.js"></script>

  <script src="<?php echo base_url(); ?>assets1/js/sections/menu.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/sections/menubar.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/sections/sidebar.js"></script>

  <script src="<?php echo base_url(); ?>assets1/js/configs/config-colors.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/configs/config-tour.js"></script>

  <script src="<?php echo base_url(); ?>assets1/js/components/asscrollable.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/components/animsition.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/components/slidepanel.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/components/switchery.js"></script>
  <script src="<?php echo base_url(); ?>assets1/js/components/jquery-placeholder.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>