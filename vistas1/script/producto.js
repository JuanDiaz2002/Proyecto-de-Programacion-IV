var tabla;
function init(){
    limpiar();
    listar();

    
    $.post("../ajax1/producto.php?op=selecategoria", function (e){
            $("#categoria").html(e);
            $("#categoria").selectpicker('refresh');


    } );
}
function verreporte(){
      window.open('../reportes/rptproducto.php', '_blank');	


}
function limpiar(){
    
        $("#idcategoria").val("");
        $("#categoria").val("");
        $("#descripcion").val("");
        
}

function guardaryeditar(){

    var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax1/producto.php?op=guardaryeditar",
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
                        url: '../ajax1/producto.php?op=listar',
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