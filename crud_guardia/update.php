<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];

$sql="UPDATE guardia SET  nombre='$nombre',apellido='$apellido',edad='$edad',telefono='$telefono',fecha_nacimiento='$fecha_nacimiento' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: guardia.php");
    }
?>