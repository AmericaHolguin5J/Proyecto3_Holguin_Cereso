<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$telefono=$_POST['telefono'];

$sql="UPDATE cocineros SET  Nombre='$nombre',Apellido='$apellido',Edad='$edad',Fecha_Nacimiento='$fecha_nacimiento',Telefono='$telefono' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cocineros.php");
    }
?>