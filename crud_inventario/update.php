<?php

include("conexion.php");
$con=conectar();

$num_sucursal=$_POST['num_sucursal'];
$num_computadoras=$_POST['num_computadoras'];
$software=$_POST['software'];
$sistem_operativ=$_POST['sistem_operativ'];

$sql="UPDATE centro SET  num_computadoras='$num_computadoras',software='$software', sistem_operativ='$sistem_operativ'
 WHERE num_sucursal='$num_sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>