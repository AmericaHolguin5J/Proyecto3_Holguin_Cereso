<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_GET['id'];

$sql="DELETE FROM cocineros  WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cocineros.php");
    }
?>
