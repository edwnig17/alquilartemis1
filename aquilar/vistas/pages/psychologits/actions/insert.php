<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
?>

<div class="">
    <div class="card-header">
      <h3 class="card-title">Añadir Inventario</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputCantidadInicial">CantidadInicial</label>
            <input type="text" class="form-control" id="exampleInputCantidadInicial" placeholder="Enter CantidadInicial" name="cantidadInicial">
          </div>
          <div class="form-group">
            <label for="exampleInputCantidadIngresos">CantidadIngresos</label>
            <input type="text" class="form-control" id="exampleInputCantidadIngresos" placeholder="Enter CantidadIngresos" name="cantidadIngresos">
          </div>
          <div class="form-group">
            <label for="exampleInputCantidadSalidad">CantidadSalidad</label>
            <input type="number" class="form-control" id="exampleInputCantidadSalidad" placeholder="Enter CantidadSalidad" name="cantidadSalidad">
          </div>
          <div class="form-group">
            <label for="exampleInputCantidadFinal">CantidadFinal</label>
            <input type="number" class="form-control" id="exampleInputCantidadFinal" placeholder="Enter CantidadFinal" name="cantidadFinal">
          </div>
          <div class="form-group">
            <label for="exampleInput	FechaInventario">	FechaInventario</label>
            <input type="date" class="form-control" id="exampleInput	FechaInventario" placeholder="Enter 	FechaInventario" name="	fechaInventario">
          </div>
          <div class="form-group">
            <label for="exampleInputTipoOperacion">TipoOperacion</label>
            <input type="text" class="form-control" id="exampleInputTipoOperacion" placeholder="Enter TipoOperacion" name="tipoOperacion">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
        </div>
    </form>
</div>

<?php 
$url = "http://localhost/SkylAb-112/alquilartemis/apirest/controllers/inventarios.php?op=insert"; 
if(isset($_POST['guardar'])){

$datos = [
    'producto_id' => 'producto_id',
    'CantidadInicial' => $_POST['CantidadInicial'],
    'CantidadIngresos' => $_POST['CantidadIngresos'],
    'CantidadSalidas' => $_POST['CantidadSalidas'],
    'CantidadFinal' => $_POST['CantidadFinal'],
    'FechaInventario' => $_POST['FechaInventario'],
    'TipoOperacion' => $_POST['TipoOperacion'],
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

