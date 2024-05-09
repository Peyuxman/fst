<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tablas/ Consultar Programa</title>
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
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.css"
        rel="stylesheet">
        <link href="Public/AssetsDashboard/css/style.css" rel="stylesheet">
        <link href="Public/AssetsDashboard/css/styleFicha.css" rel="stylesheet">

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
      <h1>Malla Trimestral Registrada</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="index.html">Malla Trimestral</a></li>
          <li class="breadcrumb-item active">Consultar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card tabla-consultar">
            <div class="card-body tabla-consultar">
              <h5 class="card-title">Consultar Malla Trimestral Registradas</h5>
              <table id="TableSynchronize" class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>F</b>icha
                    </th>
                    <th>Programa</th>
                    <th>Jornada</th>
                    <th>Franja</th>
                    <th>Cantidad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>25254801</td>
                    <td>ADSO</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td> 25</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>25254802</td>
                    <td>ADSO</td>
                     <td>Diurna</td>
                     <td>6 a 12</td>
                     <td>24</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254803</td>
                    <td>ADSO</td>
                       <td>Diurna</td>
                       <td>6 a 12</td>
                       <td>23</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>25254804</td>
                    <td>ADSO</td>
                       <td>Diurna</td>
                       <td>6 a 12</td>
                       <td>24</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button ></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button ></td>
                  </tr>
                  <tr>
                    <td>25254805</td>
                    <td>ADSO</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td>19</td>                    
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254806</td>
                    <td>ADSI</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td>25</td>                    
                      <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254807</td>
                    <td>ADSI</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td>27</td>                    
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254808</td>
                    <td>ADSI</td>
                     <td>Diurna</td>
                     <td>6 a 12</td>
                     <td>24</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254809</td>
                    <td>ADSI</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td>28</td>                    
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>25254810</td>
                    <td>ADSI</td>
                    <td>Diurna</td>
                    <td>6 a 12</td>
                    <td>21</td>                    
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
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
  <script
        src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.js"></script>
  <script src="Vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vendor/chart.js/chart.umd.js"></script>
  <script src="Vendor/echarts/echarts.min.js"></script>
  <script src="Vendor/quill/quill.min.js"></script>
  <script src="Vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Vendor/tinymce/tinymce.min.js"></script>
  <script src="Vendor/php-email-form/validate.js"></script>


  <script>
    $(document).ready(function () {
        // Inicializa DataTables con la configuración necesaria
        $('#TableSynchronize').DataTable({
            buttons: [
                'copy','excel','pdf','print' // Define los botones de descarga
            ],
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todo"]], // Define las opciones de cantidad de entradas por página
            pageLength: 10, // Establece la cantidad de entradas por página predeterminada
            dom: '<"top"fBlS>rt<"bottom"ip>', // Define la disposición de los elementos de DataTables (botones)
            language: {
                lengthMenu: 'Mostrar _MENU_ registros', // Cambia el texto del filtro de cantidad de entradas por página
                search: 'Buscar:', // Cambia el texto del buscador
                info: 'Mostrando _START_ a _END_ de _TOTAL_ entradas', // Cambia el texto de información sobre la paginación
            }
        });
    });
</script>
  
  <!-- Biblioteca jsPDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
  
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script> -->
  
  
  <!-- Biblioteca SheetJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
  
</body>

</html>
