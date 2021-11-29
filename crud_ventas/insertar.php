<?php
include("conexion.php");
$con=conectar();

$IDventa=$_POST['IDventa'];
$Producto=$_POST['Producto'];
$Domicilio=$_POST['Domicilio'];
$Categoria=$_POST['Categoria'];
$Precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];
$costo=$_POST['Costo'];


$sql="INSERT INTO ventas VALUES('$IDventa','$Producto','$Domicilio','$Categoria','$Precio','$Descripcion','$Costo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>