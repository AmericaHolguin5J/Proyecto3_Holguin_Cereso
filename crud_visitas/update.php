<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$hora=$_POST['hora'];
$telefono=$_POST['telefono'];
$parentesco=$_POST['parentesco'];
$asunto=$_POST['asunto'];

$sql="UPDATE visitas SET  nombre='$nombre',Apellido='$apellido',hora='$hora',telefono='$telefono',parentesco='$parentesco',asunto='$asunto' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: visitas.php");
    }
?>