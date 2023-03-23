<?php

require_once "../modulo/ejecutarSQL.php";

$categoria=new ejecutarSQL();


$idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
$nombre=isset($_POST["categoria"])? limpiarCadena($_POST["categoria"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";



switch ($_GET["op"]){

    case 'guardaryeditar':
                $ms="Registro la categoria";

                if (empty($idcategoria))
                {
                    $sql="INSERT INTO `categoria`(`categoria`, `descripcion`, `condicion`) VALUES ('$nombre','$descripcion',1)";
                  


                }else
                
                {
                    $sql="update `categoria` set `categoria`='$nombre', descripcion='$descripcion' where idcategoria='$idcategoria'";
                $ms="Edito el Registro de la categoria";
                  


                }
                $respuesta=$categoria->insertar($sql);
                 echo $respuesta ? $ms : "La categoria no se pudo ingresar";     
              


    break;
case 'mostrar':
    
$sql="SELECT * FROM `categoria` WHERE idcategoria=".$idcategoria;
$respuesta=$categoria->mostrar($sql);
echo json_encode($respuesta);



break;
case 'activar':
    $sql="update `categoria` set condicion=1 WHERE idcategoria=".$idcategoria;
    $respuesta=$categoria->insertar($sql);
    echo $respuesta ? "Se activo  la categoria" : "La categoria no se pudo ingresar";     
              

    break;
case 'desactivar':
    $sql="update `categoria` set condicion=0 WHERE idcategoria=".$idcategoria;
    $respuesta=$categoria->insertar($sql);
    echo $respuesta ? "Se desactivo la categoria" : "La categoria no se pudo ingresar";     
              

    break;
    case 'selecategoria':
        
        $rspta=$categoria->listar("select * from  categoria where condicion=1");
        //Vamos a declarar un array
        
        while ($reg=$rspta->fetch_object()){
            echo '<option value="'.$reg->idcategoria.'">'.$reg->categoria.'</option>';

        
        }
        echo '<option value=0 select>Seleccionar</option>';

    
    break;

        case 'listar':
            $rspta=$categoria->listar("select * from  producto");
            //Vamos a declarar un array
            $data= Array();
            $url="../reportes/rptproducto.php?id=";
            
            while ($reg=$rspta->fetch_object()){
                $data[]=array( 
                "0"=>$reg->CODIGO1,
                "1"=>$reg->DESCRIPCIOn,
            "2"=>$reg->COSTO,
            "3"=>$reg->IMPUESTO,
            "4"=>$reg->UNIDADes,
            
            "5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
            '<span class="label bg-red">Desactivado</span>'
            );
            }
            $results = array(
                "sEcho"=>1, //Información para el datatables
                "iTotalRecords"=>count($data), //enviamos el total registros al datatable
                "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                "aaData"=>$data);
            echo json_encode($results);
   
       break;
        break;
}
?>