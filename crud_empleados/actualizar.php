<?php 
    include("conexion.php");
    $con=conectar();
    
    $ID=$_GET['id']; 

$sql="SELECT * FROM empleados WHERE IDempleado='$ID'";
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
                    
                                <input type="hidden" name="IDempleado" value="<?php echo $row['IDempleado']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero_tel" placeholder="Numero_tel" value="<?php echo $row['Numero_tel']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_nacimiento" placeholder="Fecha_nacimiento" value="<?php echo $row['Fecha_nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="E-mail" placeholder="E-mail" value="<?php echo $row['E-mail']  ?>">
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio" value="<?php echo $row['Domicilio']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>