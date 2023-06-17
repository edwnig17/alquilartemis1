<?php $url = "http://localhost/SkylAb-112/alquilartemis/apirest/controllers/inventarios.php?op=GetAll"; 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    $ouput = json_decode(curl_exec($curl));
?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de Inventario  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CantidadInicial</th>
                    <th>CantidadIngresos</th>
                    <th>CantidadSalidas</th>
                    <th>CantidadFinal</th>
                    <th>FechaInventario	</th>
                    <th>TipoOperacion</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($ouput as $out){ ?>
                  <tr>
                    <td><?= $out->CantidadInicial; ?></td>
                    <td><?= $out->CantidadIngresos; ?></td>
                    <td><?= $out->CantidadSalidas; ?></td>
                    <td><?= $out->CantidadFinal; ?></td>
                    <td><?= $out->FechaInventario; ?></td>
                    <td><?= $out->TipoOperacion; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>