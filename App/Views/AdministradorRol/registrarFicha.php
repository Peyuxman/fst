<?php
require_once ROOT_PATH.'/App/Controllers/programaController.php';
require_once ROOT_PATH.'/App/Config/ConexionDb.php';
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
  <link href="Public/assetsDashboard/css/styleFicha.css" rel="stylesheet">

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
      <h1>Registrar Fichas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Home</a></li>
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Fichas</a></li>
          <li class="breadcrumb-item active">Registrar</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section dashboard">

      <form action="registro-ficha" class="form" method ="POST">
        <!-- progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <div class="progress-step" >
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="progress-step" >
                <i class="fa-solid fa-image"></i>
            </div>
            <div class="progress-step">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
    
        <!-- Formulario 1 -->
        <div class="card form-step form-step-active">
            <div class="card-body">
              
                <!-- Multi Columns Form -->
                <div class="row g-3 formulario">
                  <h5>Paso 1: Información de la Ficha</h5>

                  <!-- progrma de la ficha  -->
                  <div class="col-md-12 campo">
                    <label for="Ficha">Nombre del Programa:</label><br>
                    <select name="programa" id="" class="select" required>
                      <option value="">Seleccione...</option>
                      <?php
                          programasSelect();
                        ?>
                    </select>
                  </div>

                  <div class="col-md-6 campo">
                    <label for="numFicha">Número de Ficha:</label> <br>
                    <input type="number" placeholder="Ej: 2693245" id="numFicha" class="input" name="numFicha">
                  </div>

                  <div class="col-md-6 campo">
                    <!-- franja de la ficha -->
                    <label for="franja">Franja Horaria:</label> <br>
                      <select id="franja" name="franja" class="select" required>
                        <option value="">Seleccione...</option>
                        <option value="1">6:00am - 12:00pm</option>
                        <option value="2">12:00pm - 6:00pm</option>
                        <option value="3">6:00pm - 10:00pm</option>
                      </select>
                  </div>
                  
                  <!-- horas semanales de la ficha  -->
                  <div class="col-md-6 campo">
                    <label for="horas_Semanales">Horas Semanales:</label> <br>
                    <input type="number" placeholder="Ej: 36" id="horas_Semanales" class="input" name="horasSeman">
                  </div>
                  <!-- Timestre actual de la ficha -->
                  <div class="col-md-6 campo">
                    <label for="trimestre">Trimestre Actual:</label> <br>
                    <input type="number" placeholder="Ej: 7"  id="trimestre" class="input" name="trimActual">
                  </div>
                  <!-- Inicio de etapa electiva de la ficha -->
                  <div class="col-md-6 campo">
                    <label for="lectiva">Inicio De Etapa Lectiva:</label> <br>
                    <input type="date" id="lectiva" class="input" name="inicioLec">
                  </div>
                  <!-- Fin de la etapa lectiva de la ficha -->
                  <div class="col-md-6 campo">
                    <label for="fin_Lectiva">Fin De Etapa Lectiva:</label> <br>
                    <input type="date" id="fin_Lectiva" class="input" name="finLec" required>
                  </div>
                  <!-- Cantidad de aprendices -->
                  <div class="col-md-12 campo">
                    <label for="aprendices">Cantidad De Aprendices:</label> <br>
                    <input type="number" placeholder=" Ej: 20"  id="aprendices" class="input" name="aprenActual">
                  </div>
                  <div class="text-center">
                    <button type="button" class="form-button btn-next">Siguiente</button>
                </div>
                </div>
            </div>
        </div>
    
        <!-- Formulario 2 -->
        <div class="card form-step">
            <div class="card-body">
                <!-- Multi Columns Form -->
                <div class="row g-3 formulario">
                  <h5>Paso 2: Información Del Vocero </h5>
                  <!-- Documento del vocero -->
                  <div class="col-md-6 campo">
                    <label for="vocero_Doc">Documento Del Vocero:</label> <br>
                    <input type="number" placeholder="Ej:20564543" id="vocero_Doc" class="input" name="docVoc">
                  </div>
                  <!-- Nombre del Vocero -->
                  <div class="col-md-6 campo">
                    <label for="vocero_Nom">Nombre Del Vocero:</label> <br>
                    <input type="text" placeholder="Ej: Daniel Rodriguez" id="vocero_Nom" class="input" name="nomVoc">
                  </div>
                  <!-- Email del Vocero -->
                  <div class="col-md-6 campo">
                    <label for="vocero_Email">Email Del Vocero:</label> <br>
                    <input type="email" placeholder="Ej:daniel@gmail.com"  id="vocero_Email" class="input" name="emailVoc">
                  </div>
                  <!-- Telefono del Vocero -->
                  <div class="col-md-6 campo">
                    <label for="vocero_Telefono">Telefono Del Vocero:</label> <br>
                    <input type="number" placeholder="Ej:3214565342"  id="vocero_Telefono" class="input" name="telVoc">
                  </div>
                    <div class="text-center">
                        <button type="button" class="form-button-sec btn-prev">Anterior</button>
                        <button type="button" class="form-button btn-next">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Formulario 3 -->
        <div class="card form-step">
            <div class="card-body">
                <!-- Multi Columns Form -->
                <div class="row g-3 formulario ">
                  <h5>Paso 3: Información Del Subvocero </h5>
                  <!-- Documento del Subvocero -->
                  <div class="col-md-6 campo">
                    <label for="subvocero_Doc">Documento Del Subvocero:</label> <br>
                    <input type="number" placeholder="Ej:1014543243" id="subvocero_Doc"  class="input" name="docSub">
                  </div>
                  <!-- Nombre del Subvocero -->
                  <div class="col-md-6 campo"> 
                    <label for="subvocero_Nom">Nombre Del Subvocero:</label> <br>
                    <input type="text"  placeholder="Ej:Daniel Rodriguez" id="subvocero_Nom" class="input" name="nomSub">
                  </div>
                  <!-- Email del Subvocero -->
                  <div class="col-md-6 campo">
                    <label for="subvocero_Email">Email Del Subvocero:</label> <br>
                    <input type="email" placeholder="Ej:daniel@gmail.com" id="subvocero_Email" class="input" name="emailSub">
                  </div>
                  <!-- Telefono del Subvocero -->
                  <div class="col-md-6 campo">
                    <label for="subvocero_Telefono">Telefono Del Subvocero:</label> <br>
                    <input type="number" placeholder="Ej: 314654987" id="subvocero_Telefono" class="input" name="telSub">
                  </div>

                    <div class="text-center">
                        <button type="button" class="form-button-sec btn-prev">Anterior</button>
                        <button type="button" class="form-button btn-next">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Paso Final -->
        <div class="card form-step">
            <div class="card-body">
              <div class="final">
              <img src="Public/assetsDashboard/img/finalizar.svg" alt="finalizar" class="Wcompletado">
                <div>
              <h5 class="card-title">Completado!!</h5>
              <button type="button" class="form-button-sec btn-prev">Anterior</button>
              <button type="submit" class="form-button" name="action" value="guardar">Enviar </button>
              </div>
              
            </div>
        </div>
    </form>
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
