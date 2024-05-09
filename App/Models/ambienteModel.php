<?php
class AmbienteModel{

    public static function registrarAmbientes($nombre, $nombreTorre, $capacidad, $especialidad, $franja){
        try {
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
            //Consulta en la base de datos para registrar Fichas
            $insertarAmbiente = "INSERT INTO fst_ambientes(fst_nom, fst_nom_torre, fst_capacidad, fst_especialidad, fst_franja) VALUES(:nombre, :nombretorre, :capacidad, :especialidad, :franja);";
            //Se prepara la Consulta
            $result = $conexion->prepare($insertarAmbiente);
            //Parámetros enlazados 
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':nombretorre', $nombreTorre); // Corregido aquí
            $result->bindParam(':capacidad', $capacidad);
            $result->bindParam(':especialidad', $especialidad);
            $result->bindParam(':franja', $franja);
            $result->execute();
            return true;
        } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos:
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }
    }
     

public static function consultarAmbientes(){
    // Crear una instancia de la conexión
    try {
        // Preparar la sentencia
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
        $consultarAmbiente = "SELECT a.*, f.*, p.fst_nom AS nombre_programa FROM fst_ambientes a INNER JOIN fst_fran_ambientes f ON a.fst_franja=f.fst_idfa INNER JOIN fst_programas p ON p.fst_idp=a.fst_especialidad;";
        $stmt = $conexion->prepare($consultarAmbiente);
        // Ejecutar la sentencia
        $stmt->execute();
        // Array para almacenar los resultados
        $ambiente = [];
        // Fetch all results
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ambiente[] = $row;
        }
        // Retornar los resultados
        return $ambiente;
    } catch (PDOException $e) {
        // En caso de error, retornar null o manejar el error de otra manera
        error_log('Error en query: ' . $e->getMessage());
        return null;
    }


}
public static function editarAmbiente($codigo){
    try {
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
        $consultarAmbienteId = "SELECT a.*, f.*, p.fst_nom AS nombre_programa FROM fst_ambientes a INNER JOIN fst_fran_ambientes f ON a.fst_franja=f.fst_idfa INNER JOIN fst_programas p ON p.fst_idp=a.fst_especialidad WHERE a.fst_ida=:codigo;";
        $stmt = $conexion->prepare($consultarAmbienteId);
        $stmt->bindParam(':codigo',$codigo);
        $stmt->execute();
        $ambiente = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ambiente[] = $row;
        }
        return $ambiente;
    } catch (PDOException $e) {
        error_log('Error en query: ' . $e->getMessage());
        return null;
    }


}

public static function mostrarAmbienEdit($nombre,$capacidad,$especialidad,$franja,$codigo){
    try{
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
        $actualizarAmbiente="UPDATE fst_ambientes SET fst_nom=:nombre, fst_capacidad=:capacidad, fst_especialidad=:especialidad, fst_franja=:franja WHERE fst_ida=:codigo";
        $result= $conexion->prepare($actualizarAmbiente);
        $result->bindParam(':codigo', $codigo);
        $result->bindParam(':nombre', $nombre);
        $result->bindParam(':capacidad', $capacidad);
        $result->bindParam(':especialidad', $especialidad);
        $result->bindParam(':franja', $franja);
        $result->execute();
        return true;
    }catch (PDOException $e) {
        return false;
    }
}
}
?>