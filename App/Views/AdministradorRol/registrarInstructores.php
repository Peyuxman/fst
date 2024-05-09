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
  <link href="Public/assetsDashboard/css/styleInstructores.css" rel="stylesheet">

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
      <h1>Registrar Instructores</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Home</a></li>
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Instructores</a></li>
          <li class="breadcrumb-item active">Registrar</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <form action="./registro-instructor" class="form" method="POST">
        <!-- progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <div class="progress-step" >
                <i class="fa-solid fa-pen-to-square"></i>
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
                  <h5>Paso 1: Información Personal</h5>

                  <div class="col-md-6 campo">

                    <!-- Tipo De Documento del instructor -->
                    <label for="tipo_Doc">Tipo Documento:</label> <br>
                      <select id="tipo_Doc" name="instruTipoDoc" class="select" required>
                        <option value="">Seleccione...</option>
                        <option value="CC">Cédula</option>
                        <option value="CE">Cédula Extranjería</option>
                      </select>
                  </div>
                  <!-- Documento del instructor -->
                  <div class="col-md-6 campo">
                    <label for="instructor_Doc">Documento Del Instructor:</label> <br>
                    <input type="number" placeholder="Ej:20564543" id="instructor_Doc" class="input" name="instruDoc">
                  </div> 
                  <!-- Nombre del Instructor -->
                  <div class="col-md-6 campo">
                    <label for="instructor_Nom">Nombre Del Instructor:</label> <br>
                    <input type="text" placeholder="Ej: Daniel Alexander" id="instructor_Nom" class="input" name="instruNom">
                  </div>
                  <!-- Apellido del instructor  -->
                  <div class="col-md-6 campo">
                    <label for="instructor_Ape">Nombre Del Instructor:</label><br>
                    <input type="text" placeholder="Ej: Rodriguez Rojas" id="instructor_Ape" class="input" name="instruApell">
                  </div>
                  <!-- Telefono del Instructor -->
                  <div class="col-md-6 campo">
                    <label for="instructor_Telefono">Telefono Del Instructor:</label> <br>
                    <input type="number" placeholder="Ej:3214565342"  id="instructor_Telefono" class="input" name="instruTel">
                  </div>
                  <!-- Email del Instructor -->
                  <div class="col-md-6 campo">
                    <label for="instructor_Email">Email Del Instructor:</label> <br>
                    <input type="email" placeholder="Ej:daniel@gmail.com"  id="instructor_Email" class="input" name="instruCor">
                  </div>
                  <div class="col-md-12 campo">
                    <label for="Programa">Programa</label> <br>
                    <select name="programa" id="Programa" class="select" required>
                      <option value="">Seleccione...</option>
                    <?php
                      programasSelect();
                    ?>
                    </select>
                  </div>
                  <!-- Botón  -->
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
                  <h5>Paso 2: Información De Tipo De Formación </h5>
                  <!-- Tipo De Formación -->
                  <div class="col-md-6 campo">
                    <label for="tipo_Form">Tipo Formación:</label> <br>
                    <select id="tipo_Form" name="instruTFo" class="select" required>
                      <option value="">Seleccione...</option>
                      <option value="tecnica">Tecnica</option>
                      <option value="transversal">Transversal</option>
                    </select>
                  </div>
                  <!-- Tipo De Contrato -->
                  <div class="col-md-6 campo">
                    <label for="tipo_Contra">Tipo Contracto:</label> <br>
                    <select id="tipo_Contra" name="instruTCo" class="select" required>
                      <option value="">Seleccione...</option>
                      <option value="tipo_Contra 1">Planta</option>
                      <option value="tipo_Contra 2">Contratista</option>
                    </select>
                  </div>
                  <!-- franja de la ficha -->
                  <div class="col-md-12 campo">
                    <label for="franja">Franja Horaria:</label> <br>
                      <select id="franja" name="instruFra" class="select" required>
                        <option value="">Seleccione...</option>
                        <option value="1">6:00am - 12:00pm</option>
                        <option value="2">12:00pm - 6:00pm</option>
                        <option value="3">6:00pm - 10:00pm</option>
                      </select>
                  </div>
                  <!-- Botones -->
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
                <div>Ha completado todos los pasos correctamente.</div>
                <button type="button" class="form-button-sec btn-prev">Anterior</button>
                <button type="submit" class="form-button" name="action" value="registroInstructor">Enviar</button>
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
