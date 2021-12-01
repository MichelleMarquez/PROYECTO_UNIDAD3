<?php 
    include("conexion.php");
    $con=conectar();

$num_sucursal=$_GET['id'];

$sql="SELECT * FROM inventario WHERE num_sucursal='$num_sucursal'";
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
                    
                                <input type="hidden" name="num_sucursal" value="<?php echo $row['num_sucursal']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="num_computadoras" placeholder="Numero de computadoras" value="<?php echo $row['num_computadoras']  ?>">
                                <input type="text" class="form-control mb-3" name="software" placeholder="Software de las computadoras" value="<?php echo $row['software']  ?>">
                                <input type="text" class="form-control mb-3" name="sistem_operativ" placeholder="Sistema operativo" value="<?php echo $row['sistem_operativ']  ?>">
        

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>