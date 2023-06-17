<?php 



header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/empleados.php");


$psycologas=new Empleado();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas->get_empleado();
       echo json_encode($datos);
    break;

   

    case "insert":
        
        $datos=$psycologas->insert_empleado($body["empleado_id"], $body["nombre"],$body["puesto"],$body["contacto"]);
        echo json_encode("insertado correctamente");
  
      break;

 

}

    

?>