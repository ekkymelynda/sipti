<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Peminjaman Buku Teknik Informatika</title>
    <meta name="description" content="Great theme for creative people">
    <!-- Responsive helper -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/img/content_256.png" />
    <!-- 152x152 -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/content_256.png">
    <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]-->
    <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/img/content_256.png">
    <!-- 32x32 or 64x64 -->

    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/screen.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert.css">

    <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert-dev.js"></script>
</head>

<body>
    <div id="home" class="boxed-view">
        <header class="main-header clearfix">
            <!-- Header Shorcode Area -->
            <div class="header-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <ul class="inline-list uppercase font-small header-meta">
                                <li><i class="icon-312 font-13x"></i> Teknik Informatika, ITS</li>
                                <li><i class="icon-274 font-13x"></i> sipti@its.ac.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.header-bar -->

            <div class="nav-bar sticky-bar grey">
                <!-- .mega-menu helper class ued as switcher -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-8">
                            <!-- Logo Area -->
                            <figure class="identity">
                                <a href="<?php echo base_url(); ?>sipti_controller/halaman_utama_pengguna">
                                    <h1>SIPTI</h1>
                                </a>
                            </figure>
                        </div>
                        <!-- /.col-md-2 -->
                        <div class="col-md-8 col-xs-4">
                            <!-- Menu Area -->
                            <nav class="main-nav clearfix">
                                <!-- .mega-menu helper class ued as switcher -->
                                <ul class="clean-list to-right">
                                    <!-- .to-right, to-left, .center-me helper class-->
                                    <li ><a href="<?php echo base_url(); ?>sipti_controller/halaman_utama_pengguna">HALAMAN UTAMA</a></li>
                                    <li ><a href="<?php echo base_url(); ?>sipti_controller/daftar_pengguna">DAFTAR</a></li>
                                    <li ><a href="<?php echo base_url(); ?>sipti_controller/masuk_pengguna">MASUK</a></li>
                                </ul>

                            </nav>
                            <!-- /.main-nav -->

                            <a href="#" class="mobile-switch to-right">
                                <i class="icon-467 font-2x text-dark hover-text-grey"></i>
                            </a>
                        </div>
                        <!-- /.col-md-10 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.nav-bar -->
        </header>
        <!-- /.main-nav -->