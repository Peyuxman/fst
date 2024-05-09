<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Public/AssetsDashboard/img/favicon.png" rel="icon">
  <link href="Public/AssetsDashboard/img/apple-touch-icon.png" rel="apple-touch-icon">
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="Public/AssetsDashboard/css/style.css" rel="stylesheet">

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
  include ("sidebar.php")
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard-administrador">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      
            <!-- Realizar Programación -->
            <div class="col-12">
              <div class="card">

                <div class="card-body  ">
                  <h5 class="card-title">Realizar Programación <span>/Today</span></h5>

                  <!-- cards -->
                  <div class="row clasesPro">

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>

                    <div class="col-md-3 card1">
                      <div>
                        <i class="fa-solid fa-code"></i>
                        <h2 class="titulo">ADSO</h2>
                      </div>                      
                      <h5>Análisis y Desarrollo de Software</h5>
                    </div>


                    

                    

                    
                    
                    
              
                  </div>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
      <div class="col-12">
        <div class="card recent-sales overflow-auto">

          <div class="card-body">
            <h5 class="card-title">Consultar Programación <span>| Today</span></h5>

            <div class="row cont-cards">
              <div class="col-md-4 card2">
                <i class="fa-solid fa-layer-group"></i>
                <h2 class="titulo">FICHAS</h2>
              </div>

              <div class="col-md-4 card2">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h2 class="titulo">INSTRUCTORES</h2>
              </div>
              
              <div class="col-md-4 card2">
              <i class="fa-solid fa-school"></i>
                <h2 class="titulo">AMBIENTES</h2>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      <!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        

      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Centro de Diseño y Metrología - Regional Distrito Capital</span></strong>. <br>All Rights Reserved
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
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="Vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vendor/chart.js/chart.umd.js"></script>
  <script src="Vendor/echarts/echarts.min.js"></script>
  <script src="Vendor/quill/quill.min.js"></script>
  <script src="Vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Vendor/tinymce/tinymce.min.js"></script>
  <script src="Vendor/php-email-form/validate.js"></script>

  <script>

          $(document).ready(function(){
            $('.clasesPro').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      infinite: true,
                      dots: false
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
                ]
              });
      });

  </script>

  <!-- Template Main JS File -->
  <script src="Public/AssetsDashboard/js/main.js"></script>
  

</body>

</html>
