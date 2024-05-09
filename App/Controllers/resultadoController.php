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
require_once ROOT_PATH . '/App/Models/resultadoModel.php'; 
        
    function cargarResultados(){
        $id = $_GET['competencia'];
        $resultado =  ResultadoModel::mostrarResultados($id);
        if (!empty($resultado)) {
            foreach ($resultado as $r) {
                echo '  <option value="'.$r['fst_idre'].'">'.$r['fst_nom'].'</option>';
            }
        }else {
            echo '  <option value="">No hay resultados registrados</option>';
        }

    }


if($_SERVER["REQUEST_METHOD"] == "POST" ){
 
    $orden = $_POST['orden'];
    $nombres = $_POST['nombre'];
    $rompetencia =$_POST['competencia'];
    $horasPresenciales = $_POST['horasPresenciales'];
    $horasAutonoma =  $_POST['horasAutonoma'];

    
        

    $registroCompetencia= ResultadoModel::registrarResultados($rompetencia,$nombres,$horasPresenciales,$horasAutonoma, $orden);
    
    if ($registroCompetencia){
        echo "<script>
        Swal.fire({
            title: 'Registro exitoso',
            text: '¡Has actualizado el apartado de Competencias!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './resultadosAprendizaje?programa=programas';
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
            window.location.href = './resultadosAprendizaje?programa=programas';
        });
    </script>";
    }


}
?>