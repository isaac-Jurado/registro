<?php
    $nombre = $_POST['nombre'];
    $apellidoP =$_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];

    require_once 'conexion.php';
    $conexion = conexion(); 

    $sql = "INSERT INTO t_registro (nombre,apellidoP,apeliidoM,fecha,sexo) VALUES ('$nombre','$apellidoP','$apellidoM','$fecha','$sexo')";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header("location:../index.php");
    }else{
        echo 'no se pudo agregar nada';
    }

?>