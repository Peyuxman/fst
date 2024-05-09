<?php
// Definir constantes útiles para la aplicación
define('ROOT_PATH', __DIR__); // Ruta absoluta de la raíz del proyecto

// Obtener la ruta solicitada
$requestUri = $_SERVER['REQUEST_URI'];

// Eliminar el prefijo de la base de reescritura
$basePath = str_replace('/synchronize/', '', dirname($_SERVER['SCRIPT_NAME']));

// Eliminar cualquier cadena de consulta de la URL
$requestUri = explode('?', $requestUri)[0];

// Obtener la ruta relativa
$route = str_replace($basePath, '', $requestUri);

// Dependiendo de la ruta, incluir el archivo correspondiente
switch ($route) {
    case '/':
        // Página de inicio
        include 'App/Views/WebSite/home.php';
        break;
    case '/recuperarPass':
        include 'App/Views/WebSite/recContra.php';
        break;
    case '/login':
        // Página de inicio de sesión
        include 'App/Views/Website/login.php';
        break;
    case '/loginAdmin':
        // Ruta para manejar el inicio de sesión, incluir el controlador de usuario
        include 'App/Controllers/loginController.php';
        break;
    case '/recuperar':
        include 'App/Controllers/recuperarcontrasenia.php';
        break;
    case '/dashboard-administrador':
        include 'App/Views/AdministradorRol/index.php';
        break;
    case '/registrar-Programa':
        include 'App/Views/AdministradorRol/registrarPrograma.php';
        break;
    case '/registrar-Programacion':
        include 'App/Views/AdministradorRol/registrarProgramacion.php';
        break;
    case '/Consultar-Programacion':
        include 'App/Views/AdministradorRol/consultar-programacion.php';
        break;
    case '/registrar-Competencias':
        include 'App/Views/AdministradorRol/registrarCompetencias.php';
        break;
    case '/registro-competencias':
        include 'App/Controllers/competenciaController.php';
        break;
    case '/registro-resultados':
        include 'App/Controllers/resultadoController.php';
        break;
    case '/resultadosAprendizaje':
        include 'App/Views/AdministradorRol/registrarResultados.php';
        break;
    case '/ver-ficha':
        include 'App/Views/AdministradorRol/editarFicha.php';
        break;
    case '/ver-programa':
        include 'App/Views/AdministradorRol/editarPrograma.php';
        break;
            
    case '/Consultar-programa-formacion':
        include 'App/Views/AdministradorRol/consultar-programa-formacion.php';
        break;
    case '/registrar-Ficha':
        include 'App/Views/AdministradorRol/registrarFicha.php';
        break;
    case '/Consultar-Fichas-Registradas':
        include 'App/Views/AdministradorRol/Consultar-Fichas-Registradas.php';
        break;
    case '/registrar-Instructores':
        include 'App/Views/AdministradorRol/registrarinstructores.php';
        break;
    case '/registro-instructor':
        include 'App/Controllers/instructoresController.php';
        break;
        
    case '/Consultar-Instructores-Registradas':
        include 'App/Views/AdministradorRol/Consultar-Instructores-Registradas.php';
        break;

    case '/ver-instructor':
        include 'App/Views/AdministradorRol/editarInstructor.php';
        break;

    case '/registro-ficha':
        include 'App/Controllers/fichasController.php';
        break;
    case '/registrar-Ambientes':
        include 'App/Views/AdministradorRol/registrarAmbientes.php';
        break;
    case '/Consultar-ambientes-Registrados':
        include 'App/Views/AdministradorRol/Consultar-ambientes-Registrados.php';
        break;
    case '/registro-programa':
        include 'App/Controllers/programaController.php';
        break;
    case '/Consultar-programa':
        include 'App/Views/AdministradorRol/consultar-programa.php';
        break;
    case '/registro-Ambiente':
        include 'App/Controllers/ambientesController.php';
        break;
    case '/editar-ambiente':
        include 'App/Views/AdministradorRol/editarAmbiente.php';
        break;
    case '/programa-detalle':
        include 'App/Views/AdminitradorRol/verPrograma.php';
        break;
    case '/registrar-malla':
        include 'App/Views/AdministradorRol/registrarMalla_Trimestral.php';
        break;
    case '/Consultar-malla':
        include 'App/Views/AdministradorRol/Consultar-Malla-Trimestral.php';
        break;
    // default:
//         // Página no encontrada
//         http_response_code(404);
//         include 'app/views/404.php';
//         break;
}

?>