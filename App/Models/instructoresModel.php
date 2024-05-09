<?php
class instructoresModels{
    public static function insertInstructores($tipoDocumentoInstructor,$documentoInstructor,$nombreInstructor,$telefonoInstructor,$correoInstructor,$tipoFormacionInstructor,$tipoContratoInstructor,$franjaHorariaInstructor,$programaInstructor,$apellidoInstructor){
        try{
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
            $insert ="INSERT INTO fst_instructores(fst_programa, fst_nom, fst_apell, fst_tipo_doc, fst_doc, fst_tel, fst_correo, fst_tipo_formacion, fst_tipo_contrato, fst_franja) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)";
            $result = $conexion->prepare($insert);
            $result->bindParam(':a',$programaInstructor);
            $result->bindParam(':b',$nombreInstructor);
            $result->bindParam(':c',$apellidoInstructor);
            $result->bindParam(':d',$tipoDocumentoInstructor);
            $result->bindParam(':e',$documentoInstructor);
            $result->bindParam(':f',$telefonoInstructor);
            $result->bindParam(':g',$correoInstructor);
            $result->bindParam(':h',$tipoFormacionInstructor);
            $result->bindParam(':i',$tipoContratoInstructor);
            $result->bindParam(':j',$franjaHorariaInstructor);
            $result->execute();
            return true;
        }catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico
            return false;
        }
    }
    public static function instructoresRegistrados() {
        // Crear una instancia de la conexión
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
    
        // Preparar la consulta SQL
        $sql = "SELECT 
        i.*, 
        pg.fst_nom AS nombrePrograma, 
        fi.fst_dia AS DiaJornada, 
        fi.fst_rango_horas AS RangoHoras 
    FROM
        fst_instructores i
    INNER JOIN
        fst_programas pg ON i.fst_programa = pg.fst_idp
    INNER JOIN
        fst_fran_instructores fi ON fi.fst_idfi = i.fst_franja;";
        try {
            // Preparar la sentencia
            $stmt = $conexion->prepare($sql);
    
            // Ejecutar la sentencia
            $stmt->execute();
    
            // Array para almacenar los resultados
            $instructores = [];
    
            // Fetch all results
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $instructores[] = $row;
            }
    
            // Retornar los resultados
            return $instructores;
        } catch (PDOException $e) {
            // En caso de error, retornar null o manejar el error de otra manera
            error_log('Error en query: ' . $e->getMessage());
            return null;
        }
    }

    public  static function CargarInstructores($codigo){

        $f=array();
    
        $conexionInstancia= new Conexion();
        $conexion = $conexionInstancia->getConexion();
    
        $MostrarEditFichas="SELECT i.*, p.fst_nom AS nombrePrograma FROM fst_instructores i INNER JOIN fst_programas p ON p.fst_idp=i.fst_programa WHERE i.fst_idi=:codigo;";
        try {
            // Preparar la sentencia
            $result=$conexion->prepare($MostrarEditFichas);
            $result->bindParam(':codigo',$codigo);
    
            // Ejecutar la sentencia
            $result->execute();
    
            // Array para almacenar los resultados
            $f = [];
    
            // Fetch all results
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $f[] = $row;
            }
    
            // Retornar los resultados
            return $f;
        } catch (PDOException $e) {
            // En caso de error, retornar null o manejar el error de otra manera
            error_log('Error en query: ' . $e->getMessage());
            return null;
        }
        
    
    }
    public static function editarInstructor($codigo,$nombreInstructor,$documentoInstructor,$telefonoInstructor,$correoInstructor,$tipoContratoInstructor,$apellidoInstructor){
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
        try {
            $actualizarInstructor = "UPDATE fst_instructores SET fst_nom=:a, fst_doc=:b, fst_tel=:c, fst_correo=:d, fst_tipo_contrato=:e, fst_apell=:f WHERE fst_idi=:codigo";
            $stmt = $conexion->prepare($actualizarInstructor);
            $stmt->bindParam(':a', $nombreInstructor);
            $stmt->bindParam(':b', $documentoInstructor);
            $stmt->bindParam(':c', $telefonoInstructor);
            $stmt->bindParam(':d', $correoInstructor);
            $stmt->bindParam(':e', $tipoContratoInstructor);
            $stmt->bindParam(':f', $apellidoInstructor);
            $stmt->bindParam(':codigo', $codigo);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos:
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }
    }
    
}
?>