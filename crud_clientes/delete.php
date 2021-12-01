<?php

include("conexion.php");
$con=conectar();

$num_cliente=$_GET['id'];

$sql="DELETE FROM clientes  WHERE num_cliente='$num_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
