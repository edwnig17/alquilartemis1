<?php 



header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/productos.php");


$psycologas=new Productos();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas->get_producto();
       echo json_encode($datos);
    break;

   

    case "insert":
        
        $datos=$psycologas->insert_producto($body["producto_id"], $body["nombre"],$body["descripcion"],$body["precio_dia"]);
        echo json_encode("insertado correctamente");
  
      break;

 

}

    

?>