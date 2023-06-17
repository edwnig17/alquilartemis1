<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/Psycologa.php");


$psycologas=new Psycologa();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$psycologas->get_psycologa();
       echo json_encode($datos);
    break;

    // case "GetId":

    //     $datos=$psycologas->get_psycologa_x_id($body["id_psicologa"]);
    //     echo json_encode($datos);
  
    // break;

    case "insert":
        
        $datos=$psycologas->insert_psicologa($body["id_psicologa"], $body["nombre"],$body["especialidad"],$body["edad"]);
        echo json_encode("insertado correctamente");
  
      break;

        // case "update":

    //     $datos=$psycologas->update_psycologa($body["id_psicologa"], $body["nombre"],$body["especialidad"],$body["edad"]);
    //     echo json_encode("Psycologa actualizado correctamente");
  
    // break;

    // case "delete":

    //     $datos=$psycologas->delete_psycologa($body["id_psycologa"]);
    //     echo json_encode("Psycologa eliminada correctamente");
  
    //   break;

}

    

?>