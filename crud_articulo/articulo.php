<?php 
    include("conexion.php");
    $con=conectar();
    
$sql="SELECT * FROM articulo";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD fARMACIA DEL AHORRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="IDarticulo" placeholder="IDarticulo">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">
                                    <input type="text" class="form-control mb-3" name="Fecha_vendido" placeholder="Fecha_vendido">
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="Tiempo_entrega" placeholder="Tiempo_entrega">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_farmacia del ahorro_baylon/index.php" class="btn btn-primary" >Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDarticulo</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Fecha_vendio</th>
                                        <th>Descripcion</th>
                                        <th>Tiempo_entrega</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDarticulo']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Precio']?></th>
                                                <th><?php  echo $row['Cantidad']?></th> 
                                                <th><?php  echo $row['Fecha_vendido']?></th>
                                                <th><?php  echo $row['Descripcion']?></th>
                                                <th><?php  echo $row['Tiempo_entrega']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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