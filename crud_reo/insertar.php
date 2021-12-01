<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$delito=$_POST['delito'];

$sql="INSERT INTO reo(id_usuario, nombre, apellido, edad, fecha_nacimiento, delito) 
VALUES ('$id_usuario','$nombre','$apellido','$edad','$fecha_nacimiento','$delito')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: reo.php");
    
}else {
}
?>