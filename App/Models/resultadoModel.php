<?PHP
    class ResultadoModel{
        public static function registrarResultados($competencia,$nombres,$horasPresenciales,$horasAutonoma, $orden){
            try {
            $contador= count($nombres);
            $obj_conexion = new Conexion();
            $conexion =  $obj_conexion->getConexion();

            $insertCompetencia = "INSERT INTO fst_resultados( fst_codigo_orden, fst_nom, fst_competencia, fst_horas_pres, fst_horas_auto) VALUES (:a, :b, :c, :d, :e)";

            

            for ($i=0; $i <$contador ; $i++) { 

                $stmt= $conexion-> prepare($insertCompetencia);
                
                $a = $orden[$i];
                $b = $nombres[$i];
                $c = $competencia;
                $d = $horasPresenciales[$i];
                $e = $horasAutonoma[$i];
          

                $stmt->bindParam(':a', $a);
                $stmt->bindParam(':b', $b);
                $stmt->bindParam(':c', $c);
                $stmt->bindParam(':d', $d);
                $stmt->bindParam(':e', $e);
                $stmt->execute();
            }

            
            return true;
        } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos:
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }
        }

        public static function mostrarCompe(){
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
    
            $mostrarC="SELECT dm.*, c.fst_nom AS nombre_competencia
            FROM fst_detalle_mallas dm
            INNER JOIN fst_competencias c ON dm.fst_competencias = c.fst_idc;
            ";
    
            try {
                $result = $conexion->prepare($mostrarC);
                $result->execute();
    
                $f=[];
    
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $f[] = $row;
                }
    
                return $f;
    
            } catch (PDOException $e) {
                error_log('Error en query: ' . $e->getMessage());
                return null;
                
            }
        }
        public static function mostrarResultados($id){
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
            $f = null;
            $mostrarR="SELECT * FROM fst_resultados WHERE fst_competencia=:id";
            $result = $conexion->prepare($mostrarR);
            $result->bindParam(":id",$id);
            $result->execute();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $f[] = $row;
            }

            return $f;
            
        }

    
}  

?>