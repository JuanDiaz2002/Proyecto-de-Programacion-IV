var tabla;
function init(){
    limpiar();
    listar();

    
    $.post("../ajax/contacto.php?op=selecategoria", function (e){
            $("#categoria").html(e);
            $("#categoria").selectpicker('refresh');


    } );
}
function verreporte(){
      window.open('../reportes/rptproducto.php', '_blank');	


}
function limpiar(){
    
        $("#nombre").val("");
        $("#correo").val("");
        $("#telefono").val("");
        $("#categoria").val("");
        $("#mensaje").val("");        
}

function guardaryeditar(){

    var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax1/contacto.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	         alert(datos);	          
	          
	         
	          tabla.ajax.reload();
              limpiar();
              $("#exampleModal").modal('hide');
	    }

	});

}
function activar(idcategoria){
    
    
    Swal.fire({
        title: 'Esta seguro de activar el registro?',
        text: "Se activara el registro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Anular!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.post("../ajax/contacto.php?op=activar", {idcategoria : idcategoria}, function(e){
    //            alert(e);
    Swal.fire(
        'Anular',
        e,
        'success'
      )
                tabla.ajax.reload();
            });	
         
        }
      })
            
}
function desactivar(idcategoria){

    Swal.fire({
        title: 'Esta seguro de anular el registro?',
        text: "Se anulara el registro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Anular!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.post("../ajax/contacto.php?op=desactivar", {idcategoria : idcategoria}, function(e){
                alert(e);
                tabla.ajax.reload();
            });	
          Swal.fire(
            'Anular',
            'El registro a sido anulado',
            'success'
          )
        }
      })

        
    }


	
function mostrar(idcategoria){

    $("#exampleModal").modal('show');

    $.post("../ajax/contacto.php?op=mostrar",{idcategoria : idcategoria}, function(data, status)
    {
        data = JSON.parse(data);

        $("#nombre").val(data.nombre);
        $("#correo").val(data.correo);
        $("#telefono").val(data.telefono);
        $("#categoria").val(data.categoria);
        $("#mensaje").val(data.mensaje);      
        
        
    });
}      

function listar(){
    
    tabla=$('#example1').dataTable(
        {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
            buttons: [		          
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdf'
                    ],
            "ajax":
                    {
                        url: '../ajax/contacto.php?op=listar',
                        type : "get",
                        dataType : "json",						
                        error: function(e){
                            console.log(e.responseText);	
                        }
                    },
            "bDestroy": true,
            "iDisplayLength": 50,//Paginación
            "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
        }).DataTable();
   //
}
init();