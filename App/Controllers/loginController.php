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

// Incluir el modelo LoginModela
require_once ROOT_PATH . '/App/Models/loginModel.php'; 
require_once ROOT_PATH . '/App/Config/ConexionDb.php'; 

// LOGIN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validar los datos del formulario

        $email = $_POST['correo'];
        $password = md5($_POST['clave']); // Asegúrate de utilizar un método seguro para el hash de contraseñas
 
        // Intentar iniciar sesión utilizando el modelo
       $loginExitoso = LoginModel::loginAdmin($email, $password);
     
      
        // Verificar el resultado del inicio de sesión
        if ($loginExitoso) {
           
            // Redirigir al usuario según su rol
            switch ($_SESSION['fst_estado']) {
                
                case "Activo":
                    echo "<script>
                            Swal.fire({
                                title: 'Bienvenido Administrador',
                                text: '¡Gestiona tu empresa con nosotros!',
                                icon: 'success',
                                confirmButtonText: 'CONTINUAR'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './dashboard-administrador';
                            });
                        </script>";
                    exit();
                case "Inactivo":
                    echo "<script>
                            Swal.fire({
                                title: 'Cuenta Inactiva',
                                text: '¡Tu cuenta esta pendiente por activación, espera 12 horas aproximadamente para ingresar!',
                                icon: 'warning',
                                confirmButtonText: 'ENTENDIDO'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './login';
                            });
                        </script>";
                    exit();
                case "3":
                    echo "<script>
                            Swal.fire({
                                title: 'Cuenta Bloqueada',
                                text: '¡Tu cuenta ha sido bloqueada por incumplimiento de nuestras normas!',
                                icon: 'error',
                                confirmButtonText: 'ENTENDIDO'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './login';
                            });
                        </script>";
                    exit();
                default:
                    // En caso de un rol no reconocido, redirigir a una página de error
                    header("Location: ../view/error404.php");
                    exit();
            }
        } else {
            // Mostrar mensaje de error al usuario en caso de inicio de sesión fallido
            echo "<script>
                    Swal.fire({
                        title: 'Datos de acceso incorrectos',
                        text: '¡Por favor verifica los datos de usuario y clave ingresados!',
                        icon: 'warning',
                        confirmButtonText: 'ENTENDIDO'
                    }).then((result) => {
                        // Redirigir al login después de cerrar la alerta
                        window.location.href = './login';
                    });
                </script>";
        }
    
}
// LOGIN ALIADO
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'Consulta') {
    // Validar los datos del formulario
    if (strlen($_POST['email'])>6 && strlen($_POST['pass'])>0) {
        $email = $_POST['email'];
        $password = md5($_POST['pass']); // Asegúrate de utilizar un método seguro para el hash de contraseñas

        // Intentar iniciar sesión utilizando el modelo
        $loginExitoso = LoginModel::LoginAliado($email, $password);

        // Verificar el resultado del inicio de sesión
        if ($loginExitoso) {
            // Redirigir al usuario según su rol
            switch ($_SESSION['fst_estado']) {
                case "Activo":
                    echo "<script>
                            Swal.fire({
                                title: 'Bienvenido Aliado',
                                text: '¡Gestiona tu empresa con nosotros!',
                                icon: 'success',
                                confirmButtonText: 'CONTINUAR'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './dashboard-aliado';
                            });
                        </script>";
                    exit();
                case "Inactivo":
                    echo "<script>
                            Swal.fire({
                                title: 'Cuenta Inactiva',
                                text: '¡Tu cuenta esta pendiente por activación, espera 12 horas aproximadamente para ingresar!',
                                icon: 'warning',
                                confirmButtonText: 'ENTENDIDO'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './login';
                            });
                        </script>";
                    exit();
                case "3":
                    echo "<script>
                            Swal.fire({
                                title: 'Cuenta Bloqueada',
                                text: '¡Tu cuenta ha sido bloqueada por incumplimiento de nuestras normas!',
                                icon: 'error',
                                confirmButtonText: 'ENTENDIDO'
                            }).then((result) => {
                                // Redirigir al login después de cerrar la alerta
                                window.location.href = './login';
                            });
                        </script>";
                    exit();
                default:
                    // En caso de un rol no reconocido, redirigir a una página de error
                    header("Location: ../view/error404.php");
                    exit();
            }
        } else {
            // Mostrar mensaje de error al usuario en caso de inicio de sesión fallido
            echo "<script>
                    Swal.fire({
                        title: 'Datos de acceso incorrectos',
                        text: '¡Por favor verifica los datos de usuario y clave ingresados!',
                        icon: 'warning',
                        confirmButtonText: 'ENTENDIDO'
                    }).then((result) => {
                        // Redirigir al login después de cerrar la alerta
                        window.location.href = './login';
                    });
                </script>";
        }
    } else {
        // Si no se proporcionaron los datos esperados, redirigir a una página de error o mostrar un mensaje apropiado
        echo "<script>
                Swal.fire({
                    title: 'Datos de acceso incorrectos',
                    text: '¡Por favor ingresa tu usuario y contraseña para poder ingresar en el sistema!',
                    icon: 'warning',
                    confirmButtonText: 'ENTENDIDO'
                }).then((result) => {
                    // Redirigir al login después de cerrar la alerta
                    window.location.href = './login';
                });
            </script>";
    }
}

?>