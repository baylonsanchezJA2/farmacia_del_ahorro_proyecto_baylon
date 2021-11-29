<?php 
    include("conexion.php");
    $con=conectar();
    
$sql="SELECT * FROM empleados";
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

                                    <input type="text" class="form-control mb-3" name="IDempleado" placeholder="IDempleado">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="Numero_tel" placeholder="Numero_tel">
                                    <input type="text" class="form-control mb-3" name="Fecha_nacimiento" placeholder="Fecha_nacimiento">
                                    <input type="text" class="form-control mb-3" name="E-mail" placeholder="E-mail">
                                    <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_farmacia del ahorro_baylon/index.php" class="btn btn-primary" >Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDempleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Numero_tel</th>
                                        <th>Fecha_nacimiento</th>
                                        <th>E-mail</th>
                                        <th>Domicilio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDempleado']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Numero_tel']?></th> 
                                                <th><?php  echo $row['Fecha_nacimiento']?></th>
                                                <th><?php  echo $row['E-mail']?></th>
                                                <th><?php  echo $row['Domicilio']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['IDempleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDempleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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