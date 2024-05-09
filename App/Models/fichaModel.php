<?php
class FichaModel{
    
    public static function registroFich($codigo,$franja,$programa,$horas,$trimActual,$inicioLec,$finLec,$aprenActual,$docVoc,$nomVoc,$emailVoc,$telVoc,$docSub,$nomSub,$emailSub,$telSub){

    try {
            
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
        
            //Consulta en la base de datos para registrar Fichas
            $insertarFichas = "INSERT INTO fst_fichas (fst_codigo, fst_franja, fst_programa, fst_horas_semanales, fst_tri_actual, fst_inicio_lectiva, fst_fin_lectiva, fst_aprendices_actu, fst_doc_vocero, fst_nom_vocero, fst_correo_vocero, fst_tel_vocero, fst_doc_subvocero,fst_nom_subvocero, fst_correo_subvocero, fst_tel_subvocero) VALUES(:codigo, :franja, :programa, :horas, :trimActual, :inicioLec, :finLec, :aprenActual, :docVoc, :nomVoc, :emailVoc, :telVoc, :docSub, :nomSub, :emailSub, :telSub)";
        
            //Se prepara la Consulta
            $result= $conexion-> prepare($insertarFichas);
                
            //Parámetros enlazados 
            $result->bindParam(':codigo', $codigo);
            $result->bindParam(':franja', $franja);
            $result->bindParam(':programa', $programa);
            $result->bindParam(':horas', $horas);
            $result->bindParam(':trimActual', $trimActual);
            $result->bindParam(':inicioLec', $inicioLec);
            $result->bindParam(':finLec', $finLec);
            $result->bindParam(':aprenActual', $aprenActual);
            $result->bindParam(':docVoc', $docVoc);
            $result->bindParam(':nomVoc', $nomVoc);
            $result->bindParam(':emailVoc', $emailVoc);
            $result->bindParam(':telVoc', $telVoc);
            $result->bindParam(':docSub', $docSub);
            $result->bindParam(':nomSub', $nomSub);
            $result->bindParam(':emailSub', $emailSub);
            $result->bindParam(':telSub', $telSub);
            $result->execute();
            return true;
            
          } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos:
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }

    }   
    public static function consultarFichas() {
        // Crear una instancia de la conexión
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
    
       
        $sql = "SELECT 
        ff.*,
        p.fst_nom AS nombre_programa,
        f.fst_dia AS dia_franja,
        f.fst_rango_horas AS rango_horas_franja,
        f.fst_jornada AS jornada_franja
        FROM
            fst_fichas ff
        INNER JOIN fst_fran_fichas f ON ff.fst_franja = f.fst_idff
        INNER JOIN fst_programas p ON ff.fst_programa = p.fst_idp;
        ";
    
        try {
            // Preparar la sentencia
            $stmt = $conexion->prepare($sql);
    
            // Ejecutar la sentencia
            $stmt->execute();
    
            // Array para almacenar los resultados
            $fichas = [];
    
            // Fetch all results
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $fichas[] = $row;
            }
    
            // Retornar los resultados
            return $fichas;
        } catch (PDOException $e) {
            // En caso de error, retornar null o manejar el error de otra manera
            error_log('Error en query: ' . $e->getMessage());
            return null;
        }
}
public  static function CargarFichas($codigo){
    $f=array();

    $conexionInstancia= new Conexion();
    $conexion = $conexionInstancia->getConexion();

    $MostrarEditFichas="SELECT 
    ff.*,
    p.fst_nom AS nombre_programa FROM
    fst_fichas ff INNER JOIN fst_programas p ON ff.fst_programa = p.fst_idp
    WHERE ff.fst_codigo = :codigo;";
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
    public static function editfich($codigo,$franja,$horas,$trimActual,$aprenActual,$docVoc,$nomVoc,$emailVoc,$telVoc,$docSub,$nomSub,$emailSub,$telSub){
         try{
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
            //Consulta en la base de datos para registrar Fichas
            $actualizarFich="UPDATE fst_fichas SET fst_franja=:franja, fst_horas_semanales=:horas, fst_tri_actual=:trimActual, fst_aprendices_actu=:aprenActual, fst_doc_vocero=:docVoc, fst_nom_vocero=:nomVoc, fst_correo_vocero=:emailVoc, fst_tel_vocero=:telVoc, fst_doc_subvocero=:docSub, fst_nom_subvocero=:nomSub, fst_correo_subvocero=:emailSub, fst_tel_subvocero=:telSub WHERE fst_codigo =:codigo";

            //Se prepara la Consulta
            $result= $conexion-> prepare($actualizarFich);
                
            //Parámetros enlazados 
          
            $result->bindParam(':franja', $franja);
            $result->bindParam(':horas', $horas);
            $result->bindParam(':trimActual', $trimActual);
            $result->bindParam(':aprenActual', $aprenActual);
            $result->bindParam(':docVoc', $docVoc);
            $result->bindParam(':nomVoc', $nomVoc);
            $result->bindParam(':emailVoc', $emailVoc);
            $result->bindParam(':telVoc', $telVoc);
            $result->bindParam(':docSub', $docSub);
            $result->bindParam(':nomSub', $nomSub);
            $result->bindParam(':emailSub', $emailSub);
            $result->bindParam(':telSub', $telSub);
            $result->bindParam(':codigo', $codigo);
            $result->execute();
             return true;
        }catch (PDOException $e) {
        //         // Manejar el error en caso de fallo en la base de datos:
        //         // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }

}
}

?>