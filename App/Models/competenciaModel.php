<?PHP
    class CompetenciaModel{

        public static function registrarCompetencia($idProg,$codigos,$nombres,$tipos,$fases,$horas,$resultados){
        try {
            $contador= count($codigos);
            $obj_conexion = new Conexion();
            $conexion =  $obj_conexion->getConexion();

            $insertCompetencia = "INSERT INTO  fst_competencias( fst_codigo_compe, fst_nom, fst_tipo, fst_fase_proyecto, fst_horas,fst_programa,fst_num_resultados) VALUES (:codigo,:nombre,:tipo,:fase,:horas,:idProg,:resultados)";
            

            for ($i=0; $i <$contador ; $i++) { 

                $stmt= $conexion-> prepare($insertCompetencia);
                
                $codigo = $codigos[$i];
                $nombre = $nombres[$i];
                $tipo = $tipos[$i];
                $fase = $fases[$i];
                $horasPrograma = $horas[$i];
                $resultado = $resultados[$i];

                $stmt->bindParam(':codigo', $codigo);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':fase', $fase);
                $stmt->bindParam(':horas', $horasPrograma);
                $stmt->bindParam(':idProg', $idProg);
                $stmt->bindParam(':resultados',$resultado);
                $stmt->execute();
            }

            
            return true;
                    
          } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos:
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
            return false;
        }
        }

        public static function cargarCompetencias($programa){
            $obj_conexion = new Conexion();
            $conexion =  $obj_conexion->getConexion();

            $selectCompetencias = "SELECT * FROM fst_competencias WHERE fst_programa = :programa";

            $stmt = $conexion->prepare($selectCompetencias);
    
            $stmt->bindParam(':programa',$programa);
            // Ejecutar la sentencia
            $stmt->execute();
    
            // Array para almacenar los stmtados
            $fichas = [];
    
            // Fetch all stmts
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $fichas[] = $row;
            }
    
            // Retornar los stmtados
            return $fichas;
        }
    }

    

    

?>