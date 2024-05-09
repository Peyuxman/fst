<?php

class LoginModel {
    // Método para iniciar sesión de un aliado
    public static function loginAdmin($email, $password) {
        try {
           
            // Instanciar la conexión
            $conexionInstancia = new Conexion();
            $conexion= $conexionInstancia->getConexion();

            // Consultar la base de datos para encontrar el usuario con el correo electrónico proporcionado
            $sql = "SELECT * FROM fst_usuarios WHERE fst_correo = :email";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
           

            if ($usuario) {
                // Verificar si la contraseña coincide
                if ($usuario['fst_contra'] == $password) {
                    // Las credenciales son válidas, crear la variable de sesión 'rol' y devolver la información del usuario
                    session_start();
                    $_SESSION['fst_idu'] = $usuario['fst_doc'];
                    $_SESSION['fst_rol'] = 'Administrador';
                    $_SESSION['fst_estado'] = $usuario['fst_estado'];
                    $_SESSION['autenticado'] = true;
                    return $usuario;
                }
            }

            // Si no se encuentra el usuario o las credenciales no coinciden, devolver false
            return false;
        } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico
            return false;
        }
    }
    public static function LoginAliado($email, $password) {
        try {
            // Instanciar la conexión
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();

            // Consultar la base de datos para encontrar el usuario con el correo electrónico proporcionado
            $sql = "SELECT * FROM aliados WHERE fst_correo = :email";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                // Verificar si la contraseña coincide
                if ($usuario['clave'] == $password) {
                    // Las credenciales son válidas, crear la variable de sesión 'rol' y devolver la información del usuario
                    session_start();
                    $_SESSION['id'] = $usuario['cedula'];
                    $_SESSION['rol'] = 'Aliado';
                    $_SESSION['estado'] = $usuario['estado'];
                    $_SESSION['autenticado'] = true;
                    return $usuario;
                }
            }

            // Si no se encuentra el usuario o las credenciales no coinciden, devolver false
            return false;
        } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico
            return false;
        }
    }
}

?>