<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDarticulo'];
$Nombre=$_POST['Nombre'];
$Precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Fecha_vendido=$_POST['Fecha_vendido'];
$Descripcion=$_POST_['Descripcion'];
$Tiempo_entrega=$_POST_['Tiempo_entrega'];

$sql="UPDATE articulo SET  Nombre='$Nombre',Precio='$Precio',Cantidad='$Cantidad',Fecha_vendido='$Fecha_vendido',Descripcion='$Descripcion' ,Tiempo_entrega='$Articulo' WHERE IDarticulo='$IDarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>