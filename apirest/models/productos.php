<?php

//para imprimir errores en ejecucion;


require_once ("../config/Conectar.php");
class Productos extends Conectar{

    public function get_producto(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM productos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
    

    public function insert_producto($producto_id,$nombre,$descripcion,$precio_dia){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO productos(nombre,descripcion,precio_dia) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
 
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$descripcion);
        $stm->bindValue(3,$precio_dia);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    


}

?>