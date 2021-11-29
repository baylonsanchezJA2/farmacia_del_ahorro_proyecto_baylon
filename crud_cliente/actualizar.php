<?php 
    include("conexion.php");
    $con=conectar();
    
    $ID=$_GET['id']; 

$sql="SELECT * FROM cliente WHERE IDcliente='$ID'";
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
                    
                                <input type="hidden" name="IDcliente" value="<?php echo $row['IDcliente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio" value="<?php echo $row['Domicilio']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero_tel" placeholder="Numero_tel" value="<?php echo $row['Numero_tel']  ?>">
                                <input type="text" class="form-control mb-3" name="E-mail" placeholder="E-mail" value="<?php echo $row['E-mail']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_pedido" placeholder="Fecha_pedido" value="<?php echo $row['Fecha_pedido']  ?>">
                                <input type="text" class="form-control mb-3" name="Medicamento" placeholder="Medicamento" value="<?php echo $row['Medicamento']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>