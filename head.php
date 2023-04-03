<?php
include 'config/config.php';
require_once './vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="image/logo.png" rel="icon">
  <title>R&J Motosport - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
  <link href="css/image-uploader.min.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="css/jquery.yzhanimageviewer.min.css" />
  <link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="css/fontello.css">
<!-- Blue-Slider JS -->
<script src="js/blue-slider.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <style>
 

@media (min-width: 480px) {
  div.form {
    display: table;
  }
  div.form .checkbox {
    width: 50%;
    display: inline-table;
    margin: 5px 0;
  }
  /* spacing between checkboxes and label*/
  div.form .checkbox + input {
    margin-left: 2px;
  }

}
    .content{
  padding: 40px 0;
}
.fade2 {
    transform: scale(0.9);
    opacity: 0;
    transition: all .2s linear;
    display: block !important;
}

.fade2.show {
    opacity: 1;
    transform: scale(1);
}
/*
.filter-wrapper{
  padding: 30px 0;
}*/

.filter-checkbox{
  margin-left: 30px
}
.filter-checkbox:first-child{
  margin-left:0
}
.logged-in {
  color: #00ff00;
}

.logged-out {
  color: #ff0000;
}
</style>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   <?php include('partials/dashboard_nav.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include './partials/dashboard_top.php'; ?>
        <!-- Topbar -->
