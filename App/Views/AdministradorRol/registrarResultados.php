<?php
require_once ROOT_PATH.'/App/Controllers/programaController.php';
require_once ROOT_PATH.'/App/Config/ConexionDb.php';
require_once ROOT_PATH.'/App/Controllers/competenciaController.php';

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
  <link href="Public/assetsDashboard/css/styleCompetencias.css" rel="stylesheet">

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
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard-administrador" class="logo d-flex align-items-center">
        <img src="assets/img/logoSena.png" alt="">
        <span class="d-none d-lg-block">SENA TIME</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  include ("sidebar.php");
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Registrar Resultados Según Programa y Competencia</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Programas De Formación</a></li>
      
      <li class="breadcrumb-item active">Registrar Resultados</li>

    </ol>
  </nav>
</div>

<section class="section dashboard">

  <div class="card card-form">
    <h3>Formulario de Registro</h3>
    <p>Completa el formulario para registrar todos los resultados del programa por competencia.</p>
    <hr>
    <form id="myForm" action="registro-resultados" method="POST">
      <div class="row inicial">
        <div class="col-md-3 despliegue">
          <label for="programas"> Programa de formación:</label> <br>
          <select id="programas" name="programa" class="select" required>
            <option value="seleccione" >Seleccione...</option>
                <?PHP
                      programasSelect();
                ?>
          </select>
        </div>
        <div class="col-md-3 despliegue">
          <label for="competencia"> Competencia:</label> <br>
          <select id="competencia" name="competencia" class="select" required>
            <option value="seleccione" data-referencia="0">Seleccione...</option>
              <?PHP
                cargarCompetencias();
              ?>     
          </select>
        
        </div>
        <div class="col-md-6">
          <div class="count-competencias">
            <H2>Número de resultados por competencia: </H2>
            <p id="repeticiones">0</p>
          </div>
        </div>
      </div>
      
        <div class="row" id="originalRowResultados">
        <div class="col-md-2">
            <label >Orden resultado:</label> <br>
            <input type="number" name="orden[]" placeholder="Ej: 231 " class="input" required>
          </div>
          <div class="col-md-6 campo">
            <label>Nombre:</label> <br>
            <input type="text"  placeholder="Ej: Analizar ..." name="nombre[]" class="input" required><br><br>
          </div>
          <div class="col-md-2">
            <label >Horas presenciales:</label> <br>
            <input type="number" name="horasPresenciales[]" placeholder="Ej: 231 " class="input" required>
          </div>
          <div class="col-md-2">
            <label >Horas autónomas:</label> <br>
            <input type="number" name="horasAutonoma[]" placeholder="Ej: 231 " class="input" required>
          </div>

        </div>

        <!-- <div class="btn-uno"> -->
            <button type="submit" class="form-button" id="botonEnviar">Registrar</button>
        <!-- </div> -->
         
        
    </form>
  </div>




</main>
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

  <section>
  <script>
    // Función para agregar un valor aleatorio de 1 a 10 al elemento #repeticiones
    function agregarValorAleatorio() {
        const repeticionesElement = document.getElementById('repeticiones');
        const valorActual = parseInt(repeticionesElement.textContent);
        var selectPrograma = document.getElementById("competencia");

        // Obtener la opción seleccionada
        var selectedOption = selectPrograma.options[selectPrograma.selectedIndex];

        // Obtener el valor del atributo data-numeroCompetencias usando getAttribute()
        var numeroCompetencias = parseInt(selectedOption.getAttribute("data-referencia"));
        const contenedorInput = document.getElementById('originalRowResultados');
        const botonEnviar =document.getElementById('botonEnviar');

        if (numeroCompetencias >= 1) {
            contenedorInput.style.display ="flex"
            botonEnviar.style.display ="flex";
            repeticionesElement.textContent = numeroCompetencias;
        }  else if(selectPrograma.value == "seleccione"){ 
            contenedorInput.style.display ="none";
            botonEnviar.style.display="none";
            repeticionesElement.textContent = 0;
        }
      }
    function limpiarFormulario() {
      const form = document.getElementById("myForm");
      const inputs = form.querySelectorAll('input[type="number"], input[type="text"]');
      const selects = form.querySelectorAll('select');

      // inputs.forEach(input => {
      //     if(input.name !== '') 
      //         input.value = '';
      // });

      // selects.forEach(select => {
      //     if(select.id !== 'competencia') // No limpiar el select de programas
      //         select.selectedIndex = 0; // Reiniciar el select a su opción por defecto
      // });
    }
    // Ejecutar la función cada 3 segundos de forma infinita
    setInterval(agregarValorAleatorio, 1000);
  </script>

  <script>
      // Define una función para duplicar las filas según el valor en #repeticiones
      function duplicarFilas() {
          const repeticiones = parseInt(document.getElementById('repeticiones').textContent);
          const form = document.getElementById('myForm');
          const originalRowResultados = document.getElementById('originalRowResultados');

          limpiarFormulario();


          // Eliminar las filas duplicadas existentes
          const duplicatedRows = form.querySelectorAll('.duplicated-row');
          duplicatedRows.forEach(row => row.remove());

          // Duplicar las filas según el valor en #repeticiones
          for (let i = 1; i < repeticiones; i++) {
              const newRow = originalRowResultados.cloneNode(true);
              newRow.classList.add('duplicated-row'); // Agregar una clase para identificar las filas duplicadas
              form.insertBefore(newRow, form.querySelector('button[type="submit"]')); // Seleccionar el botón dentro del formulario
          }
      }

          // Ejecutar la función inicialmente cuando se carga la página
          document.addEventListener('DOMContentLoaded', duplicarFilas);

          // Observar cambios en el elemento #repeticiones
          const repeticionesObserver = new MutationObserver(duplicarFilas);
          const repeticionesElement = document.getElementById('repeticiones');
          repeticionesObserver.observe(repeticionesElement, { subtree: true, childList: true });
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const repeticiones = parseInt(document.getElementById('repeticiones').textContent);
          const form = document.getElementById('myForm');
          const originalRowResultados = document.getElementById('originalRowResultados');

          for (let i = 1; i < repeticiones; i++) {
              const newRow = originalRowResultados.cloneNode(true);
              form.insertBefore(newRow, form.querySelector('button'));
          }
      });
  </script> 
<script>
 const programa = document.getElementById('programas');
 const queryString = window.location.search;


  const urlParams = new URLSearchParams(queryString);

  //Acá obtenemos el valor de programa que se envia por la url
  const programaValue = urlParams.get('programa');

  function obtenerPrograma() {
      var valor = programa.value;
      window.location.href = `resultadosAprendizaje?programa=${valor}`;
  }


  programa.addEventListener('change', () => {
    localStorage.setItem('selectedProgram', programa.value);
      obtenerPrograma();
  });

  // Verificar si hay un valor almacenado en localStorage y establecerlo en el select
  document.addEventListener("DOMContentLoaded", function() {
      if(localStorage.getItem('selectedProgram') && programaValue!="programas") {
          programa.value = localStorage.getItem('selectedProgram');
      }
  });

</script>
</section>

  <!-- Template Main JS File -->
  <script src="Public/AssetsDashboard/js/main.js"></script>

</body>

</html>




