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
require_once ROOT_PATH . '/App/Models/competenciaModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';

function cargarCompetencias(){
    $programa= $_GET['programa'];
    $competencias =  CompetenciaModel::cargarCompetencias($programa);
    if (!empty($competencias)) {
        foreach ($competencias as $c) {
            echo '  <option value="'.$c['fst_idc'].'"  data-referencia="'.$c['fst_num_resultados'].'">'.$c['fst_nom'].'</option>';
        }
    }
}

function cargarCMallas(){
    $programa= $_GET['programa'];
    $competencias =  CompetenciaModel::cargarCompetencias($programa);
    if (!empty($competencias)) {
        foreach ($competencias as $c) {
            echo '<option value="'.$c['fst_idc'].'"  data-referencia="'.$c['fst_idc'].'">'.$c['fst_nom'].'</option>';
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $resultados = $_POST['resultadosPorComp'];
    $idProg = $_POST['programa'];
    $codigos  = $_POST['codigo'];
    $nombres = $_POST['nombre'];
    $tipos = $_POST['tipo'];
    $fases =  $_POST['fase'];
    $horas = $_POST['horas'];


    $registroCompetencia  =   CompetenciaModel::registrarCompetencia($idProg,$codigos,$nombres,$tipos,$fases,$horas,$resultados);
    
    if ($registroCompetencia){
        echo "<script>
        Swal.fire({
            title: 'Registro exitoso',
            text: '¡Has actualizado el apartado de Competencias!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Competencias';
        });
    </script>"; 
    }else{
        echo "<script>
        Swal.fire({
            title: 'Error al actualizar',
            text: '¡Hay un error al actualizar el apartado de competencias!',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Competencias';
        });
    </script>";
    }

  

}


?>  

    




