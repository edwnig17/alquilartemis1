<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
?>

<div class="">
    <div class="card-header">
      <h3 class="card-title">Añadir Empleado</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputNombre">Nombre</label>
            <input type="text" class="form-control" id="exampleInputNombre" placeholder="Enter Nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputPuesto">Puesto</label>
            <input type="text" class="form-control" id="exampleInputPuesto" placeholder="Enter Puesto" name="puesto">
          </div>
          <div class="form-group">
            <label for="exampleInputContacto">Contacto</label>
            <input type="number" class="form-control" id="exampleInputContacto" placeholder="Enter Contacto" name="contacto">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
        </div>
    </form>
</div>

<?php 
$url = "http://localhost/SkylAb-112/alquilartemis/apirest/controllers/empleados.php?op=insert"; 
if(isset($_POST['guardar'])){

$datos = [
    'empĺeado_id' => 'empĺeado_id',
    'nombre' => $_POST['nombre'],
    'puesto' => $_POST['puesto'],
    'contacto' => $_POST['contacto']
];

$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($datos));
    $response = curl_exec($curl);
    curl_close($curl);
    var_dump($response);


}
?>

