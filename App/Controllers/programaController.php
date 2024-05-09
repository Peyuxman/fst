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
require_once ROOT_PATH . '/App/Models/programaModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';



if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="guardar"){
  

    $tipoPrograma = $_POST['tipoPrograma'];
    $nombre = $_POST['nombre'];
    $nomAbreviacion =  $_POST['nomAbreviacion'];
    $numCompetencia = $_POST['numCompetencias'];
    $duracionMeses = $_POST['duracionMeses'];
    $duracionHoras = $_POST['duracionHoras'];
    $redTecno = $_POST['redTecno'];
    

    $registroPrograma = ProgramaModel::crearPrograma($tipoPrograma,$nombre,$nomAbreviacion,$numCompetencia,$duracionMeses,$duracionHoras,$redTecno);

    if($registroPrograma){
        echo "<script>
        Swal.fire({
            title: 'Programa Exitoso',
            text: '¡Programa Registrado Correctamente!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Error al registrar Programa',
            text: '¡El programa no se pudo registrar!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
    };

}
else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="modificarPrograma" ){
    $numCompetencia = $_POST['numCompetencias'];
    $duracionMeses = $_POST['duracionMeses'];
    $duracionHoras = $_POST['duracionHoras'];
    $nombre = $_POST['nombre'];
    $nomAbreviacion = $_POST['nomAbreviacion'];
    $id = $_POST['id'];
    $editarP = ProgramaModel::editarPrograma($duracionHoras, $duracionMeses,$numCompetencia,$nombre,$nomAbreviacion,$id);
    if ($editarP) {
        echo "<script>
        Swal.fire({
            title: 'Programa Exitoso',
            text: '¡Programa Registrado Correctamente!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
        # code...
    }else {
        echo "<script>
        Swal.fire({
            title: 'Error al registrar Programa',
            text: '¡El programa no se pudo registrar!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
    }
    


}

function programasSelect() {
        $programas = ProgramaModel::programasRegistrados();
        if (empty($programas)) {
            echo '<option>No hay registros</option>';
        } else {
            foreach ($programas as $p) {
                echo '
                <option value="'.$p['fst_idp'].'"  data-referencia="'.$p['fst_numero_compet'].'">'.$p['fst_nom'].'</option>';
            }
        }
    }
function programasSelectTrim() {
    $programas = ProgramaModel::programasRegistrados();
    if (empty($programas)) {
        echo '<option>No hay registros</option>';
    } else {
        foreach ($programas as $p) {
            echo '
            <option value="'.$p['fst_idp'].'"  data-referencia="'.$p['fst_duracionTrimestres'].'">'.$p['fst_nom'].'</option>';
        }
    }
}
    function programasTabla(){
        $programas = ProgramaModel::programasRegistrados();
        if (empty($programas)) {
            echo '
            <tr>
                <td>No hay registradas</td>
                <td>No hay registradas</td>
                <td>No hay registradas</td>
                <td>No hay registradas</td>
                <td>No hay registradas</td>
            </tr>
            ';
        } else {
            foreach ($programas as $p) {
                echo '
                <tr>
                    <td>'.$p['fst_idp'].'</td>
                    <td>'.$p['fst_nom'].'</td>
                    <td>'.$p['fst_tipo_formacion'].'</td>
                    <td><a class="btn btn-primary prin-sena-button" href="programa-detalle?id='.$p['fst_idp'].'">Detalle</a></td>
                    <td><a class="btn btn-primary prin-sena-button" href="ver-programa?id='.$p['fst_idp'].'">Editar</a></td>
                    <td><a class="btn btn-primary prin-sena-button-eliminar">Eliminar</a></td>
                </tr>
                ';
            }
        }
    } 
    
    
function mostrarProgramasEdit(){
    $id = $_GET['id'];
    if ($id) {
        $result = ProgramaModel::cargarProgramas($id);
        if (!empty($result)) {
          
            foreach ($result as $f) {
              echo '
              
              </br>
                  </br>
                  <form action="registro-programa" class="form" method ="POST">

                <div class="row g-3 formulario">
                <div class="col-md-6" style="pointer-events: none; ">
                        <label for="tipo">Tipo de Programa:</label> <br>
                        <select id="tipo" name="tipoPrograma" class="select"  required>
                            <option value="">Seleccione...</option>
                            <option value="Técnico" ' . (($f['fst_tipo_formacion'] == "Tecnico") ? " selected" : "") . '>Técnico</option>
                            <option value="Tecnólogo"' . (($f['fst_tipo_formacion'] == "Tecnólogo") ? " selected" : "") . '>Tecnólogo</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre">Nombre del Programa:</label> <br>
                        <input name="id" type="hidden" value="'.$f['fst_idp'].'" readonly/>
                        <input type="text" id="nombre" placeholder="Ej:Análisis y Desarrollo de Software" name="nombre" class="input" value="'.$f['fst_nom'].'">
                    </div>
                    <div class="col-md-6">
                      <label for="duracionHoras">Abreviación:</label> <br>
                      <input type="text" id="nomAbreviacion" placeholder="Ej: ADSO" name="nomAbreviacion" class="input" required value="'.$f['fst_abreviacion'].'">
                  </div>
                    
                    <div class="col-md-6">
                      <label for="numCompetencias">Número de Competencias:</label> <br>
                      <input type="number" id="numCompetencias" placeholder="Ej: 20" name="numCompetencias" class="input" required value="'.$f['fst_numero_compet'].'">
                  </div>
                    <div class="col-md-6">
                        <label for="duracionMeses">Duración del Programa (Trimestres):</label> <br>
                        <input type="number" id="duracionMeses" placeholder="Ej: 7" class="input" name="duracionMeses" required value="'.$f['fst_duracionTrimestres'].'"><br><br>
                    </div>
                    <div class="col-md-6">
                        <label for="duracionHoras">Duración del Programa (horas):</label> <br>
                        <input type="number" id="duracionHoras" placeholder="Ej: 36" name="duracionHoras" class="input" required value="'.$f['fst_duracionHoras'].'">
                    </div>
                    <div class="col-md-12" style="pointer-events: none; ">
                        <label for="duracionHoras">Red Tecnológica</label> <br>
                        <input type="text" id="redTecno" placeholder="Ej: TECNOLOGÍAS DE LA INFORMACIÓN, DISEÑO Y DESARROLLO DE SOFTWARE" name="redTecno" class="input" required value="'.$f['fst_red_tecn'].'">
                    </div>
                    
                    
                    <div class="text-center">
                        <button type="submit" class="form-button" name="action" value="modificarPrograma">Enviar</button>
                    </div>
                    
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