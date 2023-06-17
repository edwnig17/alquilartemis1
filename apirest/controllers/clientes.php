<?php 



header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/clientes.php");


$psycologas=new  Clientes();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas->get_cliente();
       echo json_encode($datos);
    break;

   

    case "insert":
        
        $datos=$psycologas->insert_cliente($body["cliente_id"], $body["nombre"],$body["direccion"],$body["contacto"]);
        echo json_encode("insertado correctamente");
  
      break;

 

}

    

?>