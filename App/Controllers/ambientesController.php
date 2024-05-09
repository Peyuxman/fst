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
require_once ROOT_PATH . '/App/Models/ambienteModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="registrar"){
    $nombre = $_POST['nombre'];
    $nombreTorre = $_POST['torre'];
    $capacidad = $_POST['capacidad'];
    $especialidad = $_POST['especialidad'];
    $franja = $_POST['franja'];
    $registrarAmbiente = AmbienteModel::registrarAmbientes($nombre,$nombreTorre,$capacidad,$especialidad,$franja);
    if($registrarAmbiente){
        echo "<script>
        Swal.fire({
            title: 'Registro exitoso',
            text: '¡Se registro correctamente al usuario!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './Consultar-ambientes-Registrados';
        });
    </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Error al registrar',
            text: '¡Hay un error al registrar el ambiente!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            window.location.href = './Consultar-ambientes-Registrados';
        });
    </script>";
    }
}else if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action']=="editar"){
    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $especialidad = $_POST['especialidad'];
    $franja = $_POST['franja'];
    $codigo = $_POST['codigo'];
    $editarAmbiente = AmbienteModel::mostrarAmbienEdit($nombre,$capacidad,$especialidad,$franja,$codigo);
    if($editarAmbiente){
        echo"
            <script>
            Swal.fire({
                title: 'Editado exitosamente',
                text: '¡Se edito correctamente el ambiente!',
                icon: 'success',
                confirmButtonText: 'CONTINUAR'
            }).then((result) => {
                // Redirigir al login después de cerrar la alerta
                window.location.href = './Consultar-ambientes-Registrados';
            });
        </script>
        ";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Error al Editar',
            text: '¡Hay un error al editar el ambiente!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            window.location.href = './Consultar-ambientes-Registrados';
        });
    </script>";
    }
}

function mostrarAmbientes(){
    $ambientes = AmbienteModel::consultarAmbientes();
    if(empty($ambientes)){
        echo '
        <tr>
            <td>No hay registros</td>
            <td>No hay registros</td>
            <td>No hay registros</td>
            <td>No hay registros</td>
            <td>No hay registros</td>
            <td>No hay registros</td>
        </tr>';
    }else{
        foreach ($ambientes as $f) {
            echo'
                <tr>
                    <td>'.$f['fst_nom'].'</td>
                    <td>'.$f['fst_nom_torre'].'</td>
                    <td>'.$f['fst_capacidad'].'</td>
                    <td>'.$f['nombre_programa'].'</td>
                    <td><a class="btn btn-primary prin-sena-button" href="./editar-ambiente?codigo='.$f['fst_ida'].'" >Editar</a></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button ></td>
                </tr>
            ';
        }
    };
}
function mostrarAmbiente(){
    $codigo = $_GET['codigo'];
    if ($codigo) {
        $ambiente = AmbienteModel::editarAmbiente($codigo);
        if (!empty($ambiente)){
            foreach($ambiente as $a){
                echo'
                <form action="./registro-Ambiente" method="POST" class="form">

                <div class="row g-3 formulario">

                    <div class="col-md-6">
                        <label for="nombre">Nombre:</label> <br>
                        <input type="hidden" value="'.$a['fst_ida'].'" name="codigo"/>
                        <input type="text" id="nombre" placeholder="Ej: Festo" name="nombre" class="input" value="'.$a['fst_nom'].'">
                    </div>
                    <div class="col-md-6">
                      <label for="torre">Nombre de la torre:</label> <br>
                      <input type="text" id="torre" placeholder="Ej: Oriental" name="torre" class="input" value="'.$a['fst_nom_torre'].'" required readonly>
                  </div>
                  <div class="col-md-6">
                    <label for="capacidad">Capacidad:</label> <br>
                    <input type="number" id="capacidad" placeholder="Ej: 25" name="capacidad" class="input" value="'.$a['fst_capacidad'].'" required>
                </div>

                    <div class="col-md-6">
                      <label for="especialidad">Especialidad:</label> <br>
                      <select id="" name="especialidad" class="select" required>
                        <option value="'.$a['fst_especialidad'].'">'.$a['nombre_programa'].'<option>
                        <?php
                          programasSelect();
                        ?>
                      </select>
                  </div>

                  <div class="col-md-12 campo">
                    <!-- franja de la ficha -->
                    <label for="franja">Franja Horaria:</label> <br>
                      <select id="franja" name="franja" class="select" required>
                        <option value="'.$a['fst_franja'].'">'.$a['fst_franja'].'</option>
                        <option value="1">6:00am - 12:00pm</option>
                        <option value="2">12:00pm - 6:00pm</option>
                        <option value="3">6:00pm - 10:00pm</option>
                      </select>
                  </div>
                    <div class="text-center">
                        <button type="submit" class="form-button" name="action" value="editar">Enviar</button>
                    </div>
                </div>
              </div>
            </div>
            
      </form>
                ';
            }
        }
    }
    else{
        echo'nks';
    }
}
?>