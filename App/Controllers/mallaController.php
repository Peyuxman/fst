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
require_once ROOT_PATH . '/App/Models/mallaModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php';

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $resultado=$_POST['resultado'];
    $malla=$_POST['malla'];
    $trimestre = $_POST['trimestre'];
    $competencias = $_POST['competencias'];
    $entregables = $_POST['entregables'];

    $registroDMalla= MallaModel::RegistrarDetalleMalla($resultado, $mall,$trimestre,$competencias,$entregables);

    

    $programa = $_POST['programa'];
    $trimAnio = $_POST['trimAnio'];
    $mallaRegis = MallaModel::registrarMalla($programa,$trimAnio);

    if ($registroDMalla && $mallaRegis) {
        echo "<script>
        Swal.fire({
            title: 'Registro Malla Exitoso',
            text: '¡Se ha registrado correctamente la malla,
             puede seguir registrando!',
            icon: 'success',
            confirmButtonText: 'CONTINUAR'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Error al registrar la malla',
            text: '¡La malla no ha podido registrarse!, por favor vuelve a intentarlo',
            icon: 'warning',
            confirmButtonText: 'ENTENDIDO'
        }).then((result) => {
            // Redirigir al login después de cerrar la alerta
            window.location.href = './registrar-Programa';
        });
    </script>";
        
    }

    
}

?>