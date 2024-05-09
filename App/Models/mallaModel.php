<?php

class MallaModel{
 
public static function RegistrarDetalleMalla($resultado, $mall,$trimestre,$competencias,$entregables){

    try {
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();
    
        
        $insertarDetalleMalla = "INSERT INTO fst_detalle_mallas (fst_resultado, fst_malla, fst_trimestre, fst_competencias, fst_entregables) VALUES (:resultado, :malla, :trimestre, :competencias, :entregables)";
    
        
        $result = $conexion->prepare($insertarDetalleMalla);
            
      
        $result->bindParam(':resultado', $resultado);
        $result->bindParam(':malla', $malla);
        $result->bindParam(':trimestre', $trimestre);
        $result->bindParam(':competencias', $competencias);
        $result->bindParam(':entregables', $entregables);
      
        $result->execute();
        return true;
        
    } catch (PDOException $e) {
        // Manejar el error en caso de fallo en la base de datos:
        // Por ejemplo: loggear el error o mostrar un mensaje de error genérico;
        return false;
    }
}

public static function registrarMalla($programa,$trimAnio){
    try {
        $conexionInstancia = new Conexion();
        $conexion = $conexionInstancia->getConexion();

        $insertarMalla="INSERT INTO fst_mallas (fst_programa,fst_trim_anio) VALUE(:programa, :trimAnio)";

        $result = $conexion->prepare($insertarMalla);

        $result->bindParam(':programa', $programa);
        $result->bindParam(':trimAnio', $trimAnio);


        $result->execute();
        return true;

   
    } catch (PDOException $e) {
        return false;
        
    }

}
}
?>