<?php

include("conexion.php");
$con=conectar();

$num_sucur=$_GET['id'];

$sql="DELETE FROM establecimiento  WHERE num_sucur='$num_sucur'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: establecimiento.php");
    }
?>
