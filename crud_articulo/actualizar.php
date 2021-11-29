<?php 
    include("conexion.php");
    $con=conectar();
    
    $ID=$_GET['id']; 

$sql="SELECT * FROM `articulo` WHERE IDarticulo='$ID'";
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
                    
                                <input type="hidden" name="IDarticulo" value="<?php echo $row['IDarticulo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_vendido" placeholder="Fecha_vendido" value="<?php echo $row['Fecha_vendido']  ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Tiempo_entrega" placeholder="Tiempo_entrega" value="<?php echo $row['Tiempo_entrega']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>