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

$sql="UPDATE personal SET  nombre='$nombre',paterno='$paterno', materno='$materno', num_telefono='$num_telefono', correo='$correo', sucursal= '$sucursal'
 WHERE num_trabajador='$num_trabajador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>