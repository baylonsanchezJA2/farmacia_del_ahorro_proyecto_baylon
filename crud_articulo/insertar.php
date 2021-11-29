<?php
include("conexion.php");
$con=conectar();

$IDarticulo=$_POST['IDarticulo'];
$Nombre=$_POST['Nombre'];
$Precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Fecha_vendido=$_POST['Fecha_vendido'];
$Descripcion=$_POST['Descripcion'];
$Tiempo_entrega=$_POST['Tiempo_entrega'];


$sql="INSERT INTO articulo VALUES('$IDarticulo','$Nombre','$Precio','$Cantidad','$Fecha_vendido','$Descripcion','$Tiempo_entrega)";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>