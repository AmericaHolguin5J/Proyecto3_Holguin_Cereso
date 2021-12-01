<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$delito=$_POST['delito'];

$sql="UPDATE reo SET  nombre='$nombre',apellido='$apellido',edad='$edad',fecha_nacimiento='$fecha_nacimiento',delito='$delito' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: reo.php");
    }
?>