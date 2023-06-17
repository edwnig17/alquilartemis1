<?php 



header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/inventarios.php");


$psycologas1=new Productoin();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas1->get_psycologas1();
       echo json_encode($datos);
    break;

   

    case "insert":
        
        $datos=$psycologas1->insert_psycologas1($body["producto_id"], $body["CantidadInicial"],$body["CantidadIngresos"],$body["CantidadSalidas"],$body["CantidadFinal"],$body["FechaInventario"],$body["TipoOperacion"]);
        echo json_encode("insertado correctamente");
  
      break;

 

}

    

?>