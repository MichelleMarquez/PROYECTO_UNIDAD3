<?php

include("conexion.php");
$con=conectar();

$num_sucursal=$_GET['id'];

$sql="DELETE FROM inventario  WHERE num_sucursal='$num_sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>
