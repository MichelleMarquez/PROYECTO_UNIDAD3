<?php 
    include("conexion.php");
    $con=conectar();

$num_trabajador=$_GET['id'];

$sql="SELECT * FROM personal WHERE num_trabajador='$num_trabajador'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="num_trabajador" value="<?php echo $row['num_trabajador']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="paterno" placeholder="Apellido paterno" value="<?php echo $row['paterno']  ?>">
                                <input type="text" class="form-control mb-3" name="materno" placeholder="Apellido materno" value="<?php echo $row['materno']  ?>">
                                <input type="text" class="form-control mb-3" name="num_telefono" placeholder="Numero de telefono" value="<?php echo $row['num_telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo electronico" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="sucursal" placeholder="Sucursal" value="<?php echo $row['sucursal']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>