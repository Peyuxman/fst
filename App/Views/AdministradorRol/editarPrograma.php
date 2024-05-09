<?php
require_once ROOT_PATH.'/App/Config/ConexionDb.php';
require_once ROOT_PATH.'/App/Controllers/programaController.php';
require_once ROOT_PATH.'/App/Models/programaModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="Vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="Vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Public/assetsDashboard/css/style.css" rel="stylesheet">
  <link href="Public/assetsDashboard/css/stylePrograma.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include("header.php");
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  include ("sidebar.php");
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Registrar Programa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Home</a></li>
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Programas De Formación</a></li>
          <li class="breadcrumb-item active">Registrar</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
        <div class="card-body">
      <h5>Información del Programa</h5>

      <?php
      mostrarProgramasEdit();
      ?>


      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vendor/chart.js/chart.umd.js"></script>
  <script src="Vendor/echarts/echarts.min.js"></script>
  <script src="Vendor/quill/quill.min.js"></script>
  <script src="Vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Vendor/tinymce/tinymce.min.js"></script>
  <script src="Vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Public/AssetsDashboard/js/main.js"></script>

</body>

</html>
