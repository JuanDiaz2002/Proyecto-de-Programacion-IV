<?php

require_once "../modulo/ejecutarSQL.php";

$pamela=new ejecutarSQL();

$error="";

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$correo=isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$categoria=isset($_POST["categoria"])? limpiarCadena($_POST["categoria"]):"";
$mensaje=isset($_POST["mensaje"])? limpiarCadena($_POST["mensaje"]):"";



switch ($_GET["op"]){

    case 'guardaryeditar':
                $ms="Registro el contacto";

                if (!empty($nombre) and !empty($correo) and !empty($telefono) and !empty($categoria) and !empty($mensaje)){
                    $sql="INSERT INTO `pamela`(`nombre`, `correo`, `telefono`, `categoria`, `mensaje`) VALUES ('$nombre','$correo','$telefono','$categoria','$mensaje')";
                  
                }else{
                    $sql="update `pamela` set `nombre`='$nombre', `correo`='$correo', `telefono`='$telefono', `categoria`='$categoria', `mensaje`='$mensaje', `condicion`='1'  where `id`='$id'";
                $ms="Edito el Registro de la categoria";
                  
                }
            


                $respuesta=$pamela->insertar($sql);
                 echo $respuesta ? $ms : "La categoria no se pudo ingresar";     
              


    break;

case 'mostrar':
    
$sql="SELECT * FROM `pamela` WHERE id=".$id;
$respuesta=$pamela->mostrar($sql);
echo json_encode($respuesta);



break;


case 'activar':
    $sql="update `pamela` set condicion=1 WHERE id=".$id;
    $respuesta=$pamela->insertar($sql);
    echo $respuesta ? "Se activo  el registro " : "El registro no se pudo ingresar";     
              

    break;
case 'desactivar':
    $sql="update `pamela` set condicion=0 WHERE id=".$id;
    $respuesta=$pamela->insertar($sql);
    echo $respuesta ? "Se desactivo el registro" : "El registro no se pudo ingresar";     
              

    break;

    case 'selecategoria':
        
        $rspta=$categoria->listar("select * from  contacto where condicion=1");
        //Vamos a declarar un array
        
        while ($reg=$rspta->fetch_object()){
            echo '<option value="'.$reg->idcategoria.'">'.$reg->categoria.'</option>';

        
        }
        echo '<option value=0 select>Seleccionar</option>';

    
    break;
        
      
}
?>