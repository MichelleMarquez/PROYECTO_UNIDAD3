<?php

include("conexion.php");
$con=conectar();

$num_sucur=$_POST['num_sucur'];
$ubicacion=$_POST['ubicacion'];
$cupo_sucursal=$_POST['cupo_sucursal'];
$cupo_sala=$_POST['cupo_sala'];
$num_trabajadores=$_POST['num_trabajadores'];
$num_salas=$_POST['num_salas'];

$sql="UPDATE establecimiento SET  ubicacion='$ubicacion',cupo_sucursal='$cupo_sucursal', cupo_sala='$cupo_sala', num_trabajadores='$num_trabajadores', num_salas='$num_salas'
 WHERE num_sucur='$num_sucur'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: establecimiento.php");
    }
?>