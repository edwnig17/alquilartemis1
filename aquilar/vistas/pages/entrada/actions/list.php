<?php $url = "http://localhost/SkylAb-112/alquilartemis/apirest/controllers/clientes.php?op=GetAll"; 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    $ouput = json_decode(curl_exec($curl));
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabla de Entradas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Contacto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ouput as $out){ ?>
                <tr>
                    <td><?= $out->nombre; ?></td>
                    <td><?= $out->direccion; ?></td>
                    <td><?= $out->contacto; ?></td>
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
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>