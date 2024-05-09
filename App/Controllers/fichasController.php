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


<?php
require_once ROOT_PATH . '/App/Models/fichaModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="guardar") {

    $codigo = $_POST ['numFicha'];
    $franja = $_POST ['franja'];
    $programa = $_POST ['programa'];
    $horas = $_POST ['horasSeman'];
    $trimActual= $_POST ['trimActual'];
    $inicioLec = $_POST ['inicioLec'];
    $finLec = $_POST ['finLec'];
    $aprenActual = $_POST ['aprenActual'];
    $docVoc = $_POST ['docVoc'];
    $nomVoc = $_POST ['nomVoc'];
    $emailVoc = $_POST ['emailVoc'];
    $telVoc = $_POST ['telVoc'];
    $docSub = $_POST ['docSub'];
    $nomSub = $_POST ['nomSub'];
    $emailSub = $_POST ['emailSub'];
    $telSub = $_POST ['telSub'];
    $registroFich = FichaModel::registroFich($codigo,$franja,$programa,$horas,$trimActual,$inicioLec,$finLec,$aprenActual,$docVoc,$nomVoc,$emailVoc,$telVoc,$docSub,$nomSub,$emailSub,$telSub);
    if ($registroFich) {
        echo "
        <script>
            Swal.fire({
                title: 'Registro de ficha Exitoso',
                text: '¡Se ha registrado correctamente la ficha, puedes volver a registrar más fichas!',
                icon: 'success',
                confirmButtonText: 'CONTINUAR'
            }).then((result) => {
                // Redirigir al login después de cerrar la alerta
                window.location.href = './registrar-Ficha';
            });
        </script>";
    }else {
        echo "<script>
        Swal.fire({
            title: 'Registro fallido',
            text: '¡Por favor verifica los datos requeridos y vuelve a intentarlo!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Ficha';
        });
    </script>";
    }
    
}
else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="modificarFicha" ) {
    $codigo = $_POST ['numFicha'];
    $franja = $_POST ['franja'];
    $horas = $_POST ['horasSeman'];
    $trimActual= $_POST ['trimActual'];
    $aprenActual = $_POST ['aprenActual'];
    $docVoc = $_POST ['docVoc'];
    $nomVoc = $_POST ['nomVoc'];
    $emailVoc = $_POST ['emailVoc'];
    $telVoc = $_POST ['telVoc'];
    $docSub = $_POST ['docSub'];
    $nomSub = $_POST ['nomSub'];
    $emailSub = $_POST ['emailSub'];
    $telSub = $_POST ['telSub'];
    $editarf = FichaModel::editfich($codigo,$franja,$horas,$trimActual,$aprenActual,$docVoc,$nomVoc,$emailVoc,$telVoc,$docSub,$nomSub,$emailSub,$telSub);
    if ($editarf) {
      echo "<script>
        Swal.fire({
            title: 'Actalización exitosa',
            text: '¡Has actualizado el apartado fichas Exitosamente!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './Consultar-Fichas-Registradas';
        });
    </script>"; 
    }else {
      echo "<script>
      Swal.fire({
          title: 'Error al actualizar',
          text: '¡Hay un error al actualizar el apartado de fichas!',
          icon: 'warning',
          confirmButtonText: 'ENTENDIDO'
      }).then((result) => {
          // Redirigir al login después de cerrar la alerta
          window.location.href = './Consultar-Fichas-Registradas';
      });
  </script>";
    }
}

function FichasSelect() {
    $fichas = FichaModel::consultarFichas();
    if (empty($fichas)) {
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
        foreach ($fichas as $fichas) {
            echo '
         <tr>
            <td>'.$fichas['fst_codigo'].'</td>
            <td>'.$fichas['dia_franja'].' / '.$fichas['rango_horas_franja'].' - '.$fichas['rango_horas_franja'].'</td>
            <td>'.$fichas['nombre_programa'].'</td>
            <td>'.$fichas['fst_tri_actual'].'</td>
            <td>'.$fichas['fst_aprendices_actu'].'</td>  
               
            <td><a class="btn btn-primary prin-sena-button" href="ver-ficha?codigo='.$fichas['fst_codigo'].'" >Editar</a></td>
            <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
          </tr>';
        }
        echo '</select>';
    }
}

function consultarFihasEdit(){
  $codigo = $_GET['codigo'];
  if ($codigo) {
      $result = FichaModel::CargarFichas($codigo);
      if (!empty($result)) {
        
          foreach ($result as $f) {
            echo '
            
            </br>
                </br>
                <form action="registro-ficha" class="form" method ="POST">
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
                          <h5>Paso 1: Información de la Ficha</h5>
                         
                          <!-- progrma de la ficha  -->
                          
                          <div class="col-md-12 campo" style="pointer-events: none; ">
                            <label for="Ficha" >Nombre del Programa:</label> <br>
                            <input type="text" placeholder="Ej: 2693245" id="Programa" class="input"name="programa"  value="'.$f['nombre_programa'].'">  
                          </div>
                      
                          <div class="col-md-6 campo" style="pointer-events: none; ">
                            <label for="numFicha">Número de Ficha:</label> <br>
                            <input type="number" placeholder="Ej: 2693245" id="numFicha" class="input" name="numFicha" value="'.$f['fst_codigo'].'">
                        </div>
        
                          <div class="col-md-6 campo">
                            <!-- franja de la ficha -->
                            <label for="franja">Franja Horaria:</label> <br>
                              <select id="franja" name="franja" class="select" required>
                                <option value="">Seleccione...</option>
                                <option value="1"' . (($f['fst_franja'] == "1") ? " selected" : "") . '>6:00am - 12:00pm</option>
                                <option value="2"' . (($f['fst_franja'] == "2") ? " selected" : "") . '>12:00pm - 6:00pm</option>
                                <option value="3"' . (($f['fst_franja'] == "3") ? " selected" : "") . '>6:00pm - 10:00pm</option>
                              </select>
                          </div>
                          
                          <!-- horas semanales de la ficha  -->
                          <div class="col-md-6 campo">
                            <label for="horas_Semanales">Horas Semanales:</label> <br>
                            <input type="number" placeholder="Ej: 36" id="horas_Semanales" class="input" name="horasSeman" value="'.$f['fst_horas_semanales'].'">
                          </div>
                          <!-- Timestre actual de la ficha -->
                          <div class="col-md-6 campo">
                            <label for="trimestre">Trimestre Actual:</label> <br>
                            <input type="number" placeholder="Ej: 7"  id="trimestre" class="input" name="trimActual" value="'.$f['fst_tri_actual'].'">
                          </div>
                          <!-- Inicio de etapa electiva de la ficha -->
                          <div class="col-md-6 campo">
                            <label for="lectiva">Inicio De Etapa Lectiva:</label> <br>
                            <input type="date" id="lectiva" class="input" name="inicioLec"  value="'.$f['fst_inicio_lectiva'].'"disabled>
                          </div>
                          <!-- Fin de la etapa lectiva de la ficha -->
                          <div class="col-md-6 campo">
                            <label for="fin_Lectiva">Fin De Etapa Lectiva:</label> <br>
                            <input type="date" id="fin_Lectiva" class="input" name="finLec" required  value="'.$f['fst_fin_lectiva'].'"disabled>
                          </div>
                          <!-- Cantidad de aprendices -->
                          <div class="col-md-12 campo">
                            <label for="aprendices">Cantidad De Aprendices:</label> <br>
                            <input type="number" placeholder=" Ej: 20"  id="aprendices" class="input" name="aprenActual" value="'.$f['fst_aprendices_actu'].'">
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
                            <input type="number" placeholder="Ej:20564543" id="vocero_Doc" class="input" name="docVoc" value="'.$f['fst_doc_vocero'].'">
                          </div>
                          <!-- Nombre del Vocero -->
                          <div class="col-md-6 campo">
                            <label for="vocero_Nom">Nombre Del Vocero:</label> <br>
                            <input type="text" placeholder="Ej: Daniel Rodriguez" id="vocero_Nom" class="input" name="nomVoc" value="'.$f['fst_nom_vocero'].'">
                          </div>
                          <!-- Email del Vocero -->
                          <div class="col-md-6 campo">
                            <label for="vocero_Email">Email Del Vocero:</label> <br>
                            <input type="email" placeholder="Ej:daniel@gmail.com"  id="vocero_Email" class="input" name="emailVoc" value="'.$f['fst_correo_vocero'].'">
                          </div>
                          <!-- Telefono del Vocero -->
                          <div class="col-md-6 campo">
                            <label for="vocero_Telefono">Telefono Del Vocero:</label> <br>
                            <input type="number" placeholder="Ej:3214565342"  id="vocero_Telefono" class="input" name="telVoc"value="'.$f['fst_tel_vocero'].'">
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
                            <input type="number" placeholder="Ej:1014543243" id="subvocero_Doc"  class="input" name="docSub" value="'.$f['fst_doc_subvocero'].'">
                          </div>
                          <!-- Nombre del Subvocero -->
                          <div class="col-md-6 campo"> 
                            <label for="subvocero_Nom">Nombre Del Subvocero:</label> <br>
                            <input type="text"  placeholder="Ej:Daniel Rodriguez" id="subvocero_Nom" class="input" name="nomSub" value="'.$f['fst_nom_subvocero'].'">
                          </div>
                          <!-- Email del Subvocero -->
                          <div class="col-md-6 campo">
                            <label for="subvocero_Email">Email Del Subvocero:</label> <br>
                            <input type="email" placeholder="Ej:daniel@gmail.com" id="subvocero_Email" class="input" name="emailSub" value="'.$f['fst_correo_subvocero'].'">
                          </div>
                          <!-- Telefono del Subvocero -->
                          <div class="col-md-6 campo">
                            <label for="subvocero_Telefono">Telefono Del Subvocero:</label> <br>
                            <input type="number" placeholder="Ej: 314654987" id="subvocero_Telefono" class="input" name="telSub" value="'.$f['fst_tel_subvocero'].'">
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
                      <button type="submit" class="form-button" name="action" value="modificarFicha">Enviar </button>
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