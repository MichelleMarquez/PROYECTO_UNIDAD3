<?php
include("conexion.php");
$con=conectar();

$num_trabajador=$_POST['num_trabajador'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$num_telefono=$_POST['num_telefono'];
$correo=$_POST['correo'];
$sucursal=$_POST['sucursal'];


$sql="INSERT INTO personal VALUES('$num_trabajador','$nombre','$paterno','$materno', '$num_telefono', '$correo', '$sucursal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: personal.php");
    
}else {
}
?>