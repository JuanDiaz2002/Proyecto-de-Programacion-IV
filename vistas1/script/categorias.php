<?php
    require('header.php');
?>
<div class="content-wrapper">
      
<!-- Input addon -->
<div class="card card-info">
<div class="row">
    <div class="col-4">

</div></div>

              <div class="card-header">
                <h3 class="card-title">Registro de Categorias</h3>
              </div>
              <div class="card-body">
                
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                  </tr>
                  </tfoot>
                </table>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->


            </div>
            


</div>


<?php
    require('footer.php');
?>

<!-- Modal -->

<script type="text/javascript" src="script/categorias.js">
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>