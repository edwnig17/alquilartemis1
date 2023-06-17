<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once ("../config/Conectar.php");
class Clientes extends Conectar{

    public function get_cliente(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM clientes");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
    

    public function insert_cliente($cliente_id,$nombre,$direccion,$contacto){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO clientes(nombre,direccion,contacto) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
 
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$direccion);
        $stm->bindValue(3,$contacto);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    


}

?>