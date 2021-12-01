<?php
include("conexion.php");
$con=conectar();

$num_cliente=$_POST['num_cliente'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$domicilio=$_POST['domicilio'];
$sexo=$_POST['sexo'];
$sucursal=$_POST['sucursal'];


$sql="INSERT INTO clientes VALUES('$num_cliente','$nombre','$correo','$telefono', '$domicilio', '$sexo', '$sucursal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>