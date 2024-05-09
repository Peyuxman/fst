<?php
require_once ROOT_PATH.'/App/Controllers/programaController.php';
require_once ROOT_PATH.'/App/Controllers/competenciaController.php';
require_once ROOT_PATH.'/App/Controllers/resultadoController.php';
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
  <link href="Public/assetsDashboard/img/favicon.png" rel="icon">
  <link href="Public/assetsDashboard/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
      <h1>Registrar Malla Trimestral</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="index.html">Malla Trimestral</a></li>
          <li class="breadcrumb-item active">Registrar</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <form id="myForm" action="#" class="form">
        <!-- progress bar -->
        <div class="progressbar">
          <div class="progress" id="progress"></div>
          <div class="progress-step progress-step-active">
            <i class="fa-solid fa-1"></i>
          </div>
          <div class="progress-step">
            <i class="fa-solid fa-2"></i>
          </div>
          <div class="progress-step">
            <i class="fa-solid fa-3"></i>
          </div>
        </div>

        <!-- Formulario 1 -->
        <div class="card form-step" id="wizard">
          <div class="card-body">

            <!-- Multi Columns Form -->
            <div class="row g-3 formulario">
              <h5>Paso 1: Información Programa</h5>

              <!-- programa de la ficha  -->
              <div class="col-md-6 campo">
                <label for="Ficha">Nombre del programa:</label> <br>
                <select id="programas" name="programa" class="select" required>
                  <option value="" data-referencia="0">Seleccione...</option>
                  <?php
                          programasSelectTrim();
                        ?>
                </select>
              </div>
              <!-- Numero de trimestre-->
              <div class="col-md-6">
                <div class="count-trimestres">
                  <H2>Número de trimestres del programa: </H2>
                  <p id="repeticiones">0</p>
                </div>
              </div>

              <!-- Botón  -->
              <div class="text-center">
                <button type="button" class="form-button btn-next">Siguiente</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Formulario 2 -->
        <div class="card form-step " id="wizard2">
          <div class="card-body">
            <!-- Multi Columns Form -->
            <div class="row g-3 formulario" id="form-dup">

              <div class="row" id="formularioRegistro">
                <div class="row" id="form-si">
                  <div  class="row" id="formularioregistroComp">
                  <h5 class="encabezado" id="trimestre"></h5>
                  <div class="col-md-4">
                    <label for="competencia"> Competencia:</label> <br>
                    <select id="competencias" name="competencia[]" class="select" required>
                      <option value="seleccione" data-referencia="0">Seleccione...</option>
                      <?php
                        cargarCMallas();
                      ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="resultados">Resultado:</label><br>
                    <select name="resultados" id="resultados" class="select" required>
                      <option value="" data-referencia="0">Seleccione...</option>
                      <?php
                        cargarResultados();
                      ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="horas">Horas resultado:</label><br>
                    <input type="text" placeholder="Ej:20" id="horas" class="input" name="">
                  </div>
                  <div class="col-md-6">
                    <label class="malla" for="tematicas">Tematica resultado:</label><br>
                    <textarea name="" placeholder="Ej:Base de Datos" id="tematicas" rows="3" class="input"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label class="malla" for="entregables">Entregables resultado:</label><br>
                    <textarea name="" placeholder="Ej:Documento diagrama entidad relación" id="entregables" rows="3"
                      class="input"></textarea>
                  </div>
                  <hr class="hr">
                  </div>
                </div>
                <button type="button" class="adicionar" id="click" onclick="duplicarFormulario()"> <i class="fa-solid fa-plus"></i> Adicionar</button>

              </div>

              <!-- Botones -->
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="form-button-sec btn-prev">Anterior</button>
            <button type="button" class="form-button btn-next" id="botonEnviar">Siguiente</button>
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
                <!-- <button type="submit" class="form-button btn-next" id="botonEnviar">Enviar</button> -->
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vendor/chart.js/chart.umd.js"></script>
  <script src="Vendor/echarts/echarts.min.js"></script>
  <script src="Vendor/quill/quill.min.js"></script>
  <script src="Vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Vendor/tinymce/tinymce.min.js"></script>
  <script src="Vendor/php-email-form/validate.js"></script>
  <script>
    // Función para agregar un valor aleatorio de 1 a 10 al elemento #repeticiones
    function agregarValorAleatorio() {
      const repeticionesElement = document.getElementById('repeticiones');
      const valorActual = parseInt(repeticionesElement.textContent);
      var selectPrograma = document.getElementById("programas");

      // Obtener la opción seleccionada
      var selectedOption = selectPrograma.options[selectPrograma.selectedIndex];

      // Obtener el valor del atributo data-numeroTrimestres usando getAttribute()
      var numeroTrimestres = parseInt(selectedOption.getAttribute("data-referencia"));
      const contenedorInput = document.getElementById('formularioRegistro');
      const botonEnviar = document.getElementById('botonEnviar');

      if (numeroTrimestres >= 1) {
        contenedorInput.style.display = "flex"
        botonEnviar.style.display = "flex";
        repeticionesElement.textContent = numeroTrimestres;
      } else if (selectPrograma.value == "seleccione") {
        contenedorInput.style.display = "none";
        botonEnviar.style.display = "none";
        repeticionesElement.textContent = 0;
      }
    }

    function limpiarFormulario() {
      const form = document.getElementById("form-dup");
      const inputs = form.querySelectorAll('input[type="number"], input[type="text"]');
      const selects = form.querySelectorAll('select');

      inputs.forEach(input => {
        if (input.name !== 'programa')
          input.value = '';
      });

      selects.forEach(select => {
        if (select.id !== 'programas') // No limpiar el select de programas
          select.selectedIndex = 0; // Reiniciar el select a su opción por defecto
      });
    }
    // Ejecutar la función cada 3 segundos de forma infinita
    setInterval(agregarValorAleatorio, 1000);
  </script>
  <script>
    // Define una función para duplicar las filas según el valor en #repeticiones
    function duplicarFilas() {
      const repeticiones = parseInt(document.getElementById('repeticiones').textContent);
      const form = document.getElementById('form-dup');
      const formularioRegistro = document.getElementById('formularioRegistro');
      limpiarFormulario();
      // Eliminar las filas duplicadas existentes
      const duplicatedRows = form.querySelectorAll('row');
      duplicatedRows.forEach(row => row.remove());

      // Duplicar las filas según el valor en #repeticiones
      for (let i = 1; i < repeticiones; i++) {
        const newRow = formularioRegistro.cloneNode(true);
        newRow.classList.add('row'); // Agregar una clase para identificar las filas duplicadas
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
    document.addEventListener('DOMContentLoaded', function () {

      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const competenciaValue = urlParams.get('competencia');
      if(competenciaValue == "competencias"){
        document.getElementById('wizard').classList.add("form-step-active");
      }else{
        document.getElementById('wizard').classList.remove("form-step-active");
        document.getElementById('wizard2').classList.add("form-step-active");
      }
      const repeticiones = parseInt(document.getElementById('repeticiones').textContent);
      const form = document.getElementById('form-dup');
      const formularioRegistro = document.getElementById('formularioRegistro');
      for (let i = 1; i < repeticiones; i++) {
        const newRow = formularioRegistro.cloneNode(true);
        form.insertBefore(newRow, form.querySelector('button'));
      }
    });
  </script>
  <script>
    const programa = document.getElementById('programas');
    const competencia = document.getElementById('competencias');

    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const programaValue = urlParams.get('programa');
    const competenciaValue = urlParams.get('competencia');

    function obtenerPrograma() {
      var valor = programa.value;
      var valorC = competencia.value;
      window.location.href = `registrar-malla?programa=${valor}&competencia=${valorC}`;
    }

    programa.addEventListener('change', () => {
      localStorage.setItem('selectedProgram', programa.value);
      obtenerPrograma();
    });

    competencia.addEventListener('change', () => {
      localStorage.setItem('selectedCompetencia', competencia.value);
      obtenerPrograma();
    });

    document.addEventListener("DOMContentLoaded", function() {
      if(localStorage.getItem('selectedProgram') && programaValue!="programas") {
        programa.value = localStorage.getItem('selectedProgram');
      }
    });
  </script>
  <!-- Template Main JS File -->
  <script src="Public/assetsDashboard/js/main.js"></script>

</body>

</html>