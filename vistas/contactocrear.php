<?php
 include "db.php";
    $nombre = "";
    $correo = "";
    $telefono = "";
    $categoria = "";
    $mensaje = "";
   

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $categoria = $_POST["categoria"];
        $mensaje = $_POST["mensaje"];

        do{
            if(empty($nombre) || empty($correo) || empty($telefono) || empty($categoria) || empty($mensaje)){
                $errorMessage="Debe de llenar todos los campos";
                break;
            }

            // insertar producto en la base de datos
            $sql = "INSERT INTO pamela (nombre, correo, telefono, categoria, mensaje,)" .
                    "VALUES ('$nombre', '$correo', '$telefono', '$categoria', '$mensaje')";
            $result = $con->query($sql);

            if(!$result){
                $errorMessage = "Invalid Query: " . $con->error;
                break;
            }

            $nombre = "";
    $correo = "";
    $telefono = "";
    $categoria = "";
    $mensaje = "";


            $errorMessage = "";


            $successMessage = "Se añadio el producto exitosamente";
            header("location: contacto.php");
            exit();

        }while(false);

    }
?>