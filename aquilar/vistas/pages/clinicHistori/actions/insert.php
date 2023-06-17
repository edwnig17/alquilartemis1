<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
?>

<div class="">
    <div class="card-header">
      <h3 class="card-title">Añadir Productos</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputNombre">Nombre</label>
            <input type="text" class="form-control" id="exampleInputNombre" placeholder="Enter Nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputDescripcion">Descripcion</label>
            <input type="text" class="form-control" id="exampleInputDescripcion" placeholder="Enter Descripcion" name="descripcion">
          </div>
          <div class="form-group">
            <label for="exampleInputPrecio_dia">Precio_dia</label>
            <input type="number" class="form-control" id="exampleInputPrecio_dia" placeholder="Enter Precio_dia" name="precio_dia">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
        </div>
    </form>
</div>

<?php 
$url = "http://localhost/SkylAb-112/alquilartemis/apirest/controllers/productos.php?op=insert"; 
if(isset($_POST['guardar'])){

$datos = [
    'producto_id' => 'producto_id',
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio_dia' => $_POST['precio_dia']
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

