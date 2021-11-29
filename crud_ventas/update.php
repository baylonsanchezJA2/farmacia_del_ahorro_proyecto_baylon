<?php

include("conexion.php");
$con=conectar();

$IDventa=$_POST['IDventa'];
$Producto=$_POST['Producto'];
$Domicilio=$_POST['Domicilio'];
$Categoria=$_POST['Categoria'];
$Precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];
$Costo=$_POST['Costo'];

$sql="UPDATE ventas SET  Producto='$Producto',Domicilio='$Domicilio',Categoria='$Categoria',Precio='$Precio',Descripcion='$Descripcion' ,Costo='$Costo' WHERE IDempleado='$IDventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>