<?php
    class ProgramaModel{
        public static function crearPrograma($tipoPrograma,$nombre,$nomAbreviacion,$numCompetencia,$duracionMeses,$duracionHoras,$redTecno){
            try {
         
              
            $conexionInstancia = new Conexion();
            $conexion= $conexionInstancia->getConexion();

            // Consultar la base de datos para encontrar el usuario con el correo electrónico proporcionado
            $sql = "INSERT INTO fst_programas( fst_nom, fst_red_tecn, fst_tipo_formacion, fst_duracionHoras, fst_duracionTrimestres,fst_abreviacion,fst_numero_compet) VALUES (:nombre,:redTecno,:tipoPrograma,:duracionHoras,:duracionMeses,:abreviacion,:numCompetencia)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':redTecno', $redTecno);
            $stmt->bindParam(':tipoPrograma', $tipoPrograma);
            $stmt->bindParam(':duracionHoras', $duracionHoras);
            $stmt->bindParam(':duracionMeses', $duracionMeses);
            $stmt->bindParam(':abreviacion', $nomAbreviacion);
            $stmt->bindParam(':numCompetencia', $numCompetencia);
            $stmt->execute();
            return true;

          } catch (PDOException $e) {
            // Manejar el error en caso de fallo en la base de datos
            // Por ejemplo: loggear el error o mostrar un mensaje de error genérico
            return false;
        }
        }
        public static function programasRegistrados() {
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();
            $sql = "SELECT * FROM fst_programas WHERE 1";
            try {
                $stmt = $conexion->prepare($sql);
                $stmt->execute();
                $programas = [];
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $programas[] = $row;
                }
                return $programas;
            } catch (PDOException $e) {
                // En caso de error, retornar null o manejar el error de otra manera
                error_log('Error en query: ' . $e->getMessage());
                return null;
            }
        }

        public static function cargarProgramas($id){
            $f=array();
            
            $conexionInstancia = new Conexion();
            $conexion = $conexionInstancia->getConexion();

            $mostrarProgramaE="SELECT * FROM fst_programas where fst_idp =:id";

            try {
                // Preparar la sentencia
                $result=$conexion->prepare($mostrarProgramaE);
                $result->bindParam(':id',$id);
        
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
        public static function editarPrograma($duracionHoras, $duracionMeses,$numCompetencia,$nombre,$nomAbreviacion,$id){
            try{
                $conexionInstancia = new Conexion();
                $conexion = $conexionInstancia->getConexion();
                //Consulta en la base de datos para registrar Fichas
                $actualizarPrograma="UPDATE fst_programas SET fst_duracionHoras=:duracionHoras, fst_duracionTrimestres=:duracionMeses, fst_numero_compet=:numCompetencia, fst_nom=:nombre, fst_abreviacion=:nomAbreviacion WHERE fst_idp =:id";
    
                //Se prepara la Consulta
                $result= $conexion-> prepare($actualizarPrograma);
                    
                //Parámetros enlazados 
              
                $result->bindParam(':duracionHoras', $duracionHoras);
                $result->bindParam(':duracionMeses',$duracionMeses);
                $result->bindParam(':numCompetencia', $numCompetencia);
                $result->bindParam(':nomAbreviacion', $nomAbreviacion);
                $result->bindParam(':id',$id);
                $result->bindParam(':nombre', $nombre);


                
                $result->execute();
                

                return true;
            }catch (PDOException $e) {
                // Manejar el error en caso de fallo en la base de datos:
                // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
                return false;
            }
    
    }
        
        
    }

    



?>