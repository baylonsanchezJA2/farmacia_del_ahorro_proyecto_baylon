<?php

include("conexion.php");
$con=conectar();

$IDarticulo=$_GET['id'];

$sql="DELETE FROM articulo  WHERE IDarticulo='$IDarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>