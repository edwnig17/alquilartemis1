<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once ("../config/Conectar.php");
class Psycologa extends Conectar{

    public function get_psycologa(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM psicologas");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
     // public function get_psycologa_id($id_psycologa){
    //     try {
    //         $conectar=parent::Conexion();
    //         parent::set_name();
    //         $stm=$conectar->prepare("SELECT * FROM pacientes WHERE id_psicologa=?");
    //         $stm->bindValue(1,$id_psycologa);
    //         $stm->execute();
    //         return $stm->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }
 

    public function insert_psicologa($id_psicologa,$nombre,$especialidad,$edad){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO psicologas(nombre,especialidad,edad) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
 
        $stm->bindValue(1,$nombre);
        $stm->bindValue(2,$especialidad);
        $stm->bindValue(3,$edad);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    // public function update_psicologa($id_psicologa,$nombre,$especialidad,$edad){
    //     $conectar=parent::conexion();
    //     parent::set_name();
    //     $sql="UPDATE psicologas set  nombre, especialidad, edad  WHERE id_psicologa=?";
    //     $sql=$conectar->prepare($sql);
        
    //     $sql->bindValue(1,$nombre);
    //     $sql->bindValue(2,$especialidad);
    //     $sql->bindValue(3,$edad);
    //     $sql->bindValue(4,$id_psicologa);
    //     $sql->execute();
    //     return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    // }
    
    // public function delete_pasicologa($id_psicologa){
    //     $conectar=parent::conexion();
    //     parent::set_name();
    //     $sql="DELETE FROM pacientes WHERE id_psicologa=?";
    //     $sql=$conectar->prepare($sql);
    //     $sql->bindValue(1,$id_psicologa);
    //     $sql->execute();
    //     return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    // }



}

?>