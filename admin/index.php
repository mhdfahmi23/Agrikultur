<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "agri");


if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Anfa harus login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>

﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator Agrikultur.id</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <link href="assets/css/tambahan.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>
.navbar-cls-top .navbar-brand {
  color: #fff;
background: #169420;
width: 260px;
text-align: center;
height: 60px;
font-size: 30px;
font-weight: 700;
}

</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php ">Agrikultur.id</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp;

<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=inovator"><i class="fa fa-dashboard fa-3x"></i> Inovator</a></li>
                    <li><a href="index.php?halaman=wawasan"><i class="fa fa-dashboard fa-3x"></i> Wawasan</a></li>
                    <li><a href="index.php?halaman=acara"><i class="fa fa-dashboard fa-3x"></i> Acara</a></li>
                    <li><a href="index.php?halaman=ebook"><i class="fa fa-dashboard fa-3x"></i> Ebook</a></li>
                    <li><a href="index.php?halaman=konsultasi"><i class="fa fa-dashboard fa-3x"></i> Konsultasi</a></li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <?php
              if (isset($_GET['halaman']))
              {
                  if($_GET['halaman']=="inovator")
                  {
                    include 'inovator.php';
                  }
                  elseif($_GET['halaman']=="wawasan")
                  {
                    include 'wawasan.php';
                  }
                  elseif($_GET['halaman']=="acara")
                  {
                    include 'acara.php';
                  }
                  elseif($_GET['halaman']=="ebook")
                  {
                    include 'ebook.php';
                  }
                  elseif($_GET['halaman']=="konsultasi")
                  {
                    include 'konsultasi.php';
                  }
                  elseif ($_GET['halaman']=="tambahinovator")
                  {
                    include 'tambahinovator.php';
                  }
                  elseif ($_GET['halaman']=="tambahwawasan")
                  {
                    include 'tambahwawasan.php';
                  }
                  elseif ($_GET['halaman']=="tambahacara")
                  {
                    include 'tambahacara.php';
                  }
                  elseif ($_GET['halaman']=="tambahebook")
                  {
                    include 'tambahebook.php';
                  }
                  elseif ($_GET['halaman']=="tambahkonsultasi")
                  {
                    include 'tambahkonsultasi.php';
                  }
                  elseif ($_GET['halaman']=="hapusinovator")
                  {
                    include 'hapusinovator.php';
                  }
                  elseif ($_GET['halaman']=="hapuswawasan")
                  {
                    include 'hapuswawasan.php';
                  }
                  elseif ($_GET['halaman']=="hapusacara")
                  {
                    include 'hapusacara.php';
                  }
                  elseif ($_GET['halaman']=="hapusebook")
                  {
                    include 'hapusebook.php';
                  }
                  elseif ($_GET['halaman']=="hapuskonsultasi")
                  {
                    include 'hapuskonsultasi.php';
                  }
              }
              else
              {
              	include 'home.php';
              }
              ?>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
