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


$sql="INSERT INTO visitas(id_usuario, nombre, apellido, hora, telefono, parentesco, asunto) 
VALUES ('$id_usuario','$nombre','$apellido','$hora','$telefono','$parentesco','$asunto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: visitas.php");
    
}else {
}
?>