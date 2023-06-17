<?php

//para imprimir errores en ejecucion;


require_once ("../config/Conectar.php");
class Empleado extends Conectar{

    public function get_empleado(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM empleados");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
    

    public function insert_empleado($empleado_id,$nombre,$puesto,$contacto){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO empleados(nombre,puesto,contacto) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
 
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$puesto);
        $stm->bindValue(3,$contacto);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    


}

?>