<?php 
    include("conexion.php");
    $con=conectar();

$num_sucur=$_GET['id'];

$sql="SELECT * FROM establecimiento WHERE num_sucur='$num_sucur'";
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
                    
                                <input type="hidden" name="num_sucur" value="<?php echo $row['num_sucur']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="ubicacion" placeholder="Ubicacion" value="<?php echo $row['ubicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="cupo_sucursal" placeholder="Cupo sucursal" value="<?php echo $row['cupo_sucursal']  ?>">
                                <input type="text" class="form-control mb-3" name="cupo_sala" placeholder="Cupo de sala" value="<?php echo $row['cupo_sala']  ?>">
                                <input type="text" class="form-control mb-3" name="num_trabajadores" placeholder="Numero de trabajadores" value="<?php echo $row['num_trabajadores']  ?>">
                                <input type="text" class="form-control mb-3" name="num_salas" placeholder="Numero de salas" value="<?php echo $row['num_salas']  ?>">
                             

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>