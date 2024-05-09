<html>
    <header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css" rel="stylesheet">

    </header>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap');

        :root {
            --primary-color: #46b04a;
            /* #12d06c */
            /* #63b72b */
            /* #46b04a */
            --secondary-color: #086735;
            /* #0f7404 */
            /* --font-titles: 'Thasadith', sans-serif; */
            --font-titles: 'Poppins', sans-serif;
            --font-textos: 'Raleway', sans-serif;
            --font-complement: 'Poppins', sans-serif;
            --bg-degrade: linear-gradient(to right, #086735, #46b04a);

            --font-general: 'Poppins', sans-serif;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--font-general);
        }

        a,
        p,
        label,
        input,
        select,
        textarea,
        li,
        button,div,
        .swal2-html-container {
            font-family: var(--font-textos);
        }

        .swal2-confirm.swal2-styled{
            padding: 12px 60px;
            background: var(--primary-color);
            border-radius: 20px;
            border: transparent;
            color: #fff;
            transition: .4s;
            box-shadow: 0 0 0  transparent;
        }
        .swal2-confirm.swal2-styled:focus{
            box-shadow: 0 0 0  transparent;
            outline:none;
        }
        .swal2-confirm.swal2-styled:hover{
            background: var(--secondary-color);
            border-radius: 4px;
        }
        

    </style>
    <script>
        import Swal from 'sweetalert2'

        // or via CommonJS
        const Swal = require('sweetalert2')
    </script>
</html>

<?PHP
require_once ROOT_PATH . '/App/Models/instructoresModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "registroInstructor"){
    $tipoDocumentoInstructor= $_POST['instruTipoDoc'];
    $documentoInstructor= $_POST['instruDoc'];
    $nombreInstructor= $_POST['instruNom'];
    $telefonoInstructor = $_POST['instruTel'];
    $correoInstructor = $_POST['instruCor'];
    $tipoFormacionInstructor = $_POST['instruTFo'];
    $tipoContratoInstructor = $_POST['instruTCo'];
    $franjaHorariaInstructor =$_POST['instruFra'];
    $programaInstructor = $_POST['programa'];
    $apellidoInstructor = $_POST['instruApell'];
    $registro = instructoresModels::insertInstructores($tipoDocumentoInstructor,$documentoInstructor,$nombreInstructor,$telefonoInstructor,$correoInstructor,$tipoFormacionInstructor,$tipoContratoInstructor,$franjaHorariaInstructor,$programaInstructor,$apellidoInstructor);
    if($registro){
        echo "
        <script>
            Swal.fire({
                title: 'Registro exitoso',
                text: '¡Se ha registrado correctamente al instructor!',
                icon: 'success',
                confirmButtonText: 'CONTINUAR'
            }).then((result) => {
                // Redirigir al login después de cerrar la alerta
                window.location.href = './registrar-Instructores';
            });
        </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Registro fallido',
            text: '¡Por favor verifica los datos requeridos y vuelve a intentarlo!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Instructores';
        });
    </script>";
    }
}else if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "editarInstructor") {
    $nombreInstructor= $_POST['instruNom'];
    $telefonoInstructor = $_POST['instruTel'];
    $correoInstructor = $_POST['instruCor'];
    $tipoContratoInstructor = $_POST['instruTCo'];
    $franjaHorariaInstructor =$_POST['instruFra'];
    $apellidoInstructor = $_POST['instruApell'];
    $documentoInstructor= $_POST['instruDoc'];
    $codigo= $_POST['codigo'];
    $editar = instructoresModels::editarInstructor($codigo,$nombreInstructor,$documentoInstructor,$telefonoInstructor,$correoInstructor,$tipoContratoInstructor,$apellidoInstructor);
    if($editar){
        echo "
        <script>
            Swal.fire({
                title: 'Editado correctamente',
                text: '¡Se ha editado correctamente al instructor!',
                icon: 'success',
                confirmButtonText: 'CONTINUAR'
            }).then((result) => {
                // Redirigir al login después de cerrar la alerta
                window.location.href = './Consultar-Instructores-Registradas';
            });
        </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Edición fallido',
            text: '¡Por favor verifica los datos requeridos y vuelve a intentarlo!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './Consultar-Instructores-Registradas';
        });
    </script>";
    }

}

function instructoresSelect() {
    $instructores = instructoresModels::instructoresRegistrados();
    if (empty($instructores)) {
        echo '<tr>
        <td>No hay registros</td>
        <td>No hay registros</td>
        <td>No hay registros</td>
        <td>No hay registros</td>
        <td>No hay registros</td>
        <td>No hay registros</td>
        <td>No hay registros</td>
    </tr>';
    } else {
        foreach ($instructores as $i) {
            echo '
            <tr>
            <td>'.$i['fst_nom'].' '.$i['fst_apell'].'</td>
            <td>'.$i['fst_doc'].'</td>
            <td>'.$i['fst_tel'].'</td>
            <td>'.$i['fst_correo'].'</td>
            <td>'.$i['nombrePrograma'].'</td>
            <td><a class="btn btn-primary prin-sena-button" href="ver-instructor?codigo='.$i['fst_idi'].'" >Editar</a></td>
            <td><button class="btn btn-primary prin-sena-button-eliminar" >Eliminar</button></td>
          </tr>
            ';
        }
    };
}
function editarInstructor(){
    $codigo = $_GET['codigo'];
    if ($codigo) {
      $result = instructoresModels::CargarInstructores($codigo);
      if (!empty($result)) {
          foreach ($result as $f) {
            echo'
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
                          <select id="tipo_Doc" name="instruTipoDoc" class="select" disabled>
                            <option value="'.$f['fst_tipo_doc'].'">'.$f['fst_tipo_doc'].'</option>
                          </select>
                      </div>
                      <!-- Documento del instructor -->
                      <div class="col-md-6 campo">
                        <label for="instructor_Doc">Documento Del Instructor:</label> <br>
                        <input type="number" style="display:none;" name="codigo" value="'.$f['fst_idi'].'">
                        <input type="number" placeholder="Ej:20564543" id="instructor_Doc" class="input" name="instruDoc" value="'.$f['fst_doc'].'">
                      </div> 
                      <!-- Nombre del Instructor -->
                      <div class="col-md-6 campo">
                        <label for="instructor_Nom">Nombre Del Instructor:</label> <br>
                        <input type="text" placeholder="Ej: Daniel Alexander" id="instructor_Nom" class="input" name="instruNom"  value="'.$f['fst_nom'].'">
                      </div>
                      <!-- Apellido del instructor  -->
                      <div class="col-md-6 campo">
                        <label for="instructor_Ape">Nombre Del Instructor:</label><br>
                        <input type="text" placeholder="Ej: Rodriguez Rojas" id="instructor_Ape" class="input" name="instruApell" value="'.$f['fst_apell'].'">
                      </div>
                      <!-- Telefono del Instructor -->
                      <div class="col-md-6 campo">
                        <label for="instructor_Telefono">Telefono Del Instructor:</label> <br>
                        <input type="number" placeholder="Ej:3214565342"  id="instructor_Telefono" class="input" name="instruTel" value="'.$f['fst_tel'].'">
                      </div>
                      <!-- Email del Instructor -->
                      <div class="col-md-6 campo">
                        <label for="instructor_Email">Email Del Instructor:</label> <br>
                        <input type="email" placeholder="Ej:daniel@gmail.com"  id="instructor_Email" class="input" name="instruCor" value="'.$f['fst_correo'].'">
                      </div>
                      <div class="col-md-12 campo">
                        <label for="Programa">Programa</label> <br>
                        <input type="text" id="instructor_programa" class="input" name="nombrePrograma" value="'.$f['nombrePrograma'].'" disabled>
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
                        <select id="tipo_Form" name="instruTFo" class="select" required disbled>
                          <option value="'.$f['fst_tipo_formacion'].'">'.$f['fst_tipo_formacion'].'</option>
                          <option value="tecnica">Tecnica</option>
                          <option value="transversal">Transversal</option>
                        </select>
                      </div>
                      <!-- Tipo De Contrato -->
                      <div class="col-md-6 campo">
                        <label for="tipo_Contra">Tipo Contracto:</label> <br>
                        <select id="tipo_Contra" name="instruTCo" class="select">
                          <option value="'.$f['fst_tipo_contrato'].'">'.$f['fst_tipo_contrato'].'</option>
                          <option value="planta">Planta</option>
                          <option value="contratista">Contratista</option>
                        </select>
                      </div>
                      <!-- franja de la ficha -->
                      <div class="col-md-12 campo">
                        <label for="franja">Franja Horaria:</label> <br>
                          <select id="franja" name="instruFra" class="select" required>
                            <option value="3"' . (($f['fst_franja'] == "3") ? " selected" : "") . '>6:00am - 12:00pm</option>
                            <option value="4"' . (($f['fst_franja'] == "4") ? " selected" : "") . '>12:00pm - 6:00pm</option>
                            <option value="5"' . (($f['fst_franja'] == "5") ? " selected" : "") . '>6:00pm - 10:00pm</option>
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
                    <button type="submit" class="form-button" name="action" value="editarInstructor">Editar</button>
                  </div>
                  
                </div>
            </div>
        </form>
            ';
          }
        }
    }
}
?>