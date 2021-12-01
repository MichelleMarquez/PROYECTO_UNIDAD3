<?php
include("conexion.php");
$con=conectar();

$num_sucursal=$_POST['num_sucursal'];
$num_computadoras=$_POST['num_computadoras'];
$software=$_POST['software'];
$sistem_operativ=$_POST['sistem_operativ'];



$sql="INSERT INTO inventario VALUES('$num_sucursal','$num_computadoras','$software','$sistem_operativ')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventario.php");
    
}else {
}
?>