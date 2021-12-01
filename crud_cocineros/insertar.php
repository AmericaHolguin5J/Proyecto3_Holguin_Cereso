<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO cocineros(id_usuario, nombre, apellido, edad, fecha_nacimiento, telefono) 
VALUES ('$id_usuario','$nombre','$apellido','$edad','$fecha_nacimiento','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cocineros.php");
    
}else {
}
?>