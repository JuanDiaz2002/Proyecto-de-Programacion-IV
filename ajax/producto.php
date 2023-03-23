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
                    $sql="update `producto` set `categoria`='$nombre', descripcion='$descripcion' where idcategoria='$idcategoria'";
                $ms="Edito el Registro de la categoria";
                  


                }
                $respuesta=$categoria->insertar($sql);
                 echo $respuesta ? $ms : "La categoria no se pudo ingresar";     
              


    break;
case 'mostrar':
    
$sql="SELECT * FROM `producto` WHERE idproducto=".$idcategoria;
$respuesta=$categoria->mostrar($sql);
echo json_encode($respuesta);



break;
case 'activar':
    $sql="update `producto` set condicion=1 WHERE idproducto=".$idcategoria;
    $respuesta=$categoria->insertar($sql);
    echo $respuesta ? "Se activo  la categoria" : "La categoria no se pudo ingresar";     
              

    break;
case 'desactivar':
    $sql="update `producto` set condicion=0 WHERE idproducto=".$idcategoria;
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
                    "0"=>($reg->condicion)? '<button class="btn btn-warning" onclick="mostrar('.$reg->idproducto.')"><i class="far fa-edit"></i></i>Editar</button>'.
                        ' <button class="btn btn-danger" onclick="desactivar('.$reg->idproducto.')"><i class="far fa-file-times"></i>Anular</button>':
                        '<button class="btn btn-warning" onclick="mostrar('.$reg->idproducto.')"><i class="fa fa-pencil">Editar</i></button>'.
                        ' <button class="btn btn-primary" onclick="activar('.$reg->idproducto.')"><i class="fa fa-check"></i></button>',
                        "1"=>$reg->CODIGO1,
                        "2"=>$reg->DESCRIPCIOn,
                    "3"=>$reg->COSTO,
                    "4"=>$reg->PrecioVENTA,
                    "5"=>$reg->IMPUESTO,
                    "6"=>$reg->UNIDADes,
                    "7"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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