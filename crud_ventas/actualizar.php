<?php 
    include("conexion.php");
    $con=conectar();
    
    $ID=$_GET['id']; 

$sql="SELECT * FROM ventas WHERE IDventa='$ID'";
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
                    
                                <input type="hidden" name="IDventa" value="<?php echo $row['IDventa']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto" value="<?php echo $row['Producto']  ?>">
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio" value="<?php echo $row['Domicilio']  ?>">
                                <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria" value="<?php echo $row['Categoria']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo" value="<?php echo $row['Costo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>