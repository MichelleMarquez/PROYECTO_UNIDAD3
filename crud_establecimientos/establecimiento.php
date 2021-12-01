<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM establecimiento";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/proyecto_Marquez_CentroComputo/colorin20.css">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ubicacion" placeholder="Ubicacion">
                                    <input type="text" class="form-control mb-3" name="cupo_sucursal" placeholder="Cupo de la sucursal ">
                                    <input type="text" class="form-control mb-3" name="cupo_sal" placeholder="Cupo de la sala">
                                    <input type="text" class="form-control mb-3" name="num_trabajadores" placeholder="Numero de trabajadores">
                                    <input type="text" class="form-control mb-3" name="num_salas" placeholder="Numero de salas">

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_Marquez_CentroComputo/index.php" class= "btn btn-green">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Numero de la sucursal</th>
                                        <th>Ubicacion</th>
                                        <th>Cupo de la sucursal</th>
                                        <th>Cupo de la sala</th>
                                        <th>Numero de trabajadores</th>
                                        <th>Numero de salas</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['num_sucur']?></th>
                                                <th><?php  echo $row['ubicacion']?></th>
                                                <th><?php  echo $row['cupo_sucursal']?></th>
                                                <th><?php  echo $row['cupo_sala']?></th>    
                                                <th><?php  echo $row['num_trabajadores']?></th>
                                                <th><?php  echo $row['num_salas']?></th>
                    

                                                <th><a href="actualizar.php?id=<?php echo $row['num_sucur'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['num_sucur'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>