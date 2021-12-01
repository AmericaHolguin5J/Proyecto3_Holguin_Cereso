<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];

$sql="INSERT INTO guardia(id_usuario, nombre, apellido, edad, telefono, fecha_nacimiento) 
VALUES ('$id_usuario','$nombre','$apellido','$edad','$telefono','$fecha_nacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: guardia.php");
    
}else {
}
?>