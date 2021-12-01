<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clientes";
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

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="domicilio" placeholder="domicilio">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo">
                                    <input type="text" class="form-control mb-3" name="sucursal" placeholder="sucursal">

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_Marquez_CentroComputo/index.php" class= "btn btn-green">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>numero de cliente</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Domicilio</th>
                                        <th>Sexo</th>
                                        <th>Sucursal</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['num_cliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['telefono']?></th>    
                                                <th><?php  echo $row['domicilio']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['sucursal']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['num_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['num_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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