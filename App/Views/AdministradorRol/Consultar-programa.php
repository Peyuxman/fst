<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tablas/ Consultar Programa</title>
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
      <h1>Consultar Programa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Home</a></li>
          <li class="breadcrumb-item"><a href="./dashboard-administrador">Programación Trimestral</a></li>
          <li class="breadcrumb-item active">Consultar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card tabla-consultar">
            <div class="card-body tabla-consultar">
              <h5 class="card-title">Consultar Programa</h5>
              <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary export-pdf" id="export-pdf">Exportar a PDF</button>
                <button class="btn btn-primary export-excel" id="export-excel">Exportar a Excel</button>
            </div>             
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              <!-- Table with stripped rows -->
              <table class="table datatable ">
                <thead>
                  <tr>
                    <th>
                      <b>C</b>odigo
                    </th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Ambiente</th>
                    <th>Competencia</th>
                    <th>Resultado</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>ADSO</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>ADSO</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>ADSO</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>ADSO</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>ADSO</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>ADSI</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>ADSI</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>ADSI</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>ADSI</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>ADSI</td>
                    <td>activo</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button">Eliminar</button></td>
                  </tr>
                                             
                </tbody>
              </table>

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
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
  <script src="Public/AssetsDashboard/js/main.js"></script>  <!-- script para excel y pdf  -->
  <script>
    // Función para exportar a PDF
    document.getElementById('export-pdf').addEventListener('click', function() {
        // Código para exportar a PDF usando jsPDF
        var doc = new jsPDF();
        doc.autoTable({html: '.datatable'});
        doc.save('consultar-programa.pdf');
    });

    // Función para exportar a Excel
    document.getElementById('export-excel').addEventListener('click', function() {
        // Código para exportar a Excel usando SheetJS
        var wb = XLSX.utils.table_to_book(document.querySelector('.datatable'), {sheet:"Sheet JS"});
        XLSX.writeFile(wb, 'consultar-programa.xlsx');
    });
</script>


<!-- Biblioteca jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script> -->


<!-- Biblioteca SheetJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>

</body>

</html>
