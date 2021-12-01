<?php

include("conexion.php");
$con=conectar();

$num_trabajador=$_GET['id'];

$sql="DELETE FROM personal  WHERE num_trabajador='$num_trabajador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>
