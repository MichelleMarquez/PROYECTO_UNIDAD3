<?php
include("conexion.php");
$con=conectar();

$num_sucur=$_POST['num_sucur'];
$ubicacion=$_POST['ubicacion'];
$cupo_sucursal=$_POST['cupo_sucursal'];
$cupo_sala=$_POST['cupo_sala'];
$num_trabajadores=$_POST['num_trabajadores'];
$num_salas=$_POST['num_salas'];


$sql="INSERT INTO establecimiento VALUES('$num_sucur','$ubicacion','$cupo_sucursal','$cupo_sala', '$num_trabajadores', '$num_salas')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: establecimiento.php");
    
}else {
}
?>