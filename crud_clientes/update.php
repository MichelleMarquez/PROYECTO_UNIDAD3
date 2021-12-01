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


$sql="UPDATE clientes SET  nombre='$nombre',correo='$correo', telefono='$telefono', domicilio='$domicilio', sexo='$sexo', sucursal= '$sucursal'
 WHERE num_cliente='$num_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>