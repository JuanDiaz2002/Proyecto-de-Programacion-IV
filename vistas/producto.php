<?php
    require('header.php');
?>
<div class="content-wrapper">
      
<!-- Input addon -->
<div class="card card-info">

              <div class="card-header">
                <h3 class="card-title">Registro de Producto</h3>
              </div>
              <div class="card-body">
                
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Opciones</th>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Costo</th>
                    <th>Venta</th>
                    <th>Impuesto</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Opciones</th>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Costo</th>
                    <th>Venta</th>
                    <th>Impuesto</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                  </tfoot>
                </table>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
              <div class="row">
    <div class="col-2">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar Producto</button>
    <button type="button" onclick="verreporte();" class="btn btn-primary ">Ver reporte</button>
  </div>
</div>

            </div>
            


</div>


<?php
    require('footer.php');
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perfil del producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="" method="post" name="formulario" id="formulario">

        <div class="form-group row">
            <div class="col-md-3">
              <label for="">Codigo 1:</label>
              
              <input type="hidden" name="idcategoria" id="idcategoria" class="form-control" value="">
              
              <input type="text" class="form-control" id="codigo1" name="codigo1"  aria-hidden="true"></i>
          </div>
          <div class="col-md-3">
              <label for="">Codigo 2:</label>
              
              
              <input type="text" class="form-control" id="codigo2" name="codigo2"  aria-hidden="true"></i>
          </div>
          <div class="col-md-6">
              <label for="">Producto:</label>
              
              
              <input type="text" class="form-control" id="descripcion" name="descripcion"  aria-hidden="true">
          </div>
        <div>
<!-- A-->
<div class="form-group row">
            <div class="col-md-2">
              <label for="">Id proveedor:</label>
              
                  <input type="text" class="form-control" id="idproveedor" name="idproveedor" value=1  aria-hidden="true"></i>
          </div>
          <div class="col-md-2">
              <label for="">Costo:</label>             
              
              <input type="number" step="any"  class="form-control" id="costo" name="costo"  aria-hidden="true"></i>
          </div>

          <div class="col-md-2">
              <label for="">Utilidad:</label>             
              
              <input type="number" step="any" class="form-control" id="utilidad" name="utilidad"  aria-hidden="true"></i>
          </div>
          
          <div class="col-md-3">
              <label for="">Venta:</label>
              
              
              <input type="number" step="any"  class="form-control" id="venta" name="venta"  aria-hidden="true">
          </div>
          
          <div class="col-md-3">
              <label for="">Impuesto:</label>
               <select class="form-control form-control-sm-3" name="impuesto" id="impuesto">
                  <option select value=0>0</option>
                  <option value=15>15</option>
                  <option value=18>18</option>
                </select>
              
          </div>
          


        <div>

  
<!--Fin A-->

<!-- B -->
<div class="form-group row">
            <div class="col-md-3">
              <label for="">Media:</label>
              
              
              <input type="text" class="form-control" id="media" name="media"  aria-hidden="true"></i>
          </div>
          <div class="col-md-3">
              <label for="">Unidades:</label>
              
              
              <input type="number" step="any" class="form-control" id="unidades" name="unidades"  aria-hidden="true"></i>
          </div>
          <div class="col-md-6">
              <label for="">Categorias:</label>
                <select class="form-control form-control-sm-6" name="categoria" id="categoria">
                </select>
              
            

          </div>
        <div>
<!-- B -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="guardaryeditar();" class="btn btn-primary">Registrar Categoria</button>
      </div>

      </form>
    </div>
  </div>
</div>


<script type="text/javascript" src="script/producto.js">
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