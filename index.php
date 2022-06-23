<?php
ob_start();
require_once('config/+koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PELABUHAN NTT</title>

    <!-- core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="icon" href="_assets/icon/MaferLogo.png">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->


<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            
                        </div>
                    </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><p class="text-muted"><font color="#FFFFF">PELABUHAN NUSA TENGGARA TIMUR</font></p></h2>
                    </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="?page=home"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="?page=pelabuhan"><i class="fa fa-anchor"></i> Pelabuhan</a></li>
                        <li><a href="?page=berita"><i class="fa fa-newspaper-o"></i> Berita</a></li>
                        <li><a href="?page=peta"><i class="fa fa-map-signs"></i> Peta</a></li>
                        <li><a href="?page=route"><i class="fa fa-level-up"></i> Rute</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="operator/login.php">Sebagai Operator</a></li>
                                <li><a target="_blank" href="admin/login.php">Sebagai Administrator</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->


    <div id="page-wrapper">

      <?php
      if(@$_GET['page'] == 'home' || @$_GET['page'] == '') {
      include "views/home.php";
      } else if(@$_GET['page'] == 'pelabuhan') {
      include "views/pelabuhan.php";
      } else if(@$_GET['page'] == 'peta') {
      include "views/peta.php";
      } else if(@$_GET['page'] == 'detailpelabuhan') {
      include "views/detail.php";
      } else if(@$_GET['page'] == 'jadwalpelabuhan') {
      include "views/jadwal.php";
      } else if(@$_GET['page'] == 'jadwalpelayaran') {
      include "views/jadwal_pelayaran.php";
      } else if(@$_GET['page'] == 'jadwaldatang') {
      include "views/jadwal_datang.php";
      } else if(@$_GET['page'] == 'jadwalbatal') {
      include "views/jadwal_batal.php";
      } else if(@$_GET['page'] == 'rute') {
      include "views/rute.php";
      } else if(@$_GET['page'] == 'route') {
      include "views/route.php";
      } else if(@$_GET['page'] == 'berita') {
      include "views/berita.php";
      } else if(@$_GET['page'] == 'detail_berita') {
      include "views/detail_berita.php";
      } 
        ?>        
      </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="login/js.js"></script>
</body>

</html>

