<?php

//para imprimir errores en ejecucion;


require_once ("../config/Conectar.php");
class Productoin extends Conectar{

    public function get_psycologas1(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM inventarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
    

    public function insert_psycologas1($producto_id,$CantidadInicial,$CantidadIngresos,$CantidadSalidas,$CantidadFinal,$FechaInventario,$TipoOperacion){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO productos(producto_id,CantidadInicial,CantidadIngresos,CantidadSalidas,CantidadFinal,FechaInventario,TipoOperacion) VALUES(?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$producto_id);
        $stm->bindValue(2,$CantidadInicial);
        $stm->bindValue(3,$CantidadIngresos);
        $stm->bindValue(4,$CantidadSalidas);
        $stm->bindValue(5,$CantidadFinal);
        $stm->bindValue(6,$FechaInventario);
        $stm->bindValue(7,$TipoOperacion);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}

?>