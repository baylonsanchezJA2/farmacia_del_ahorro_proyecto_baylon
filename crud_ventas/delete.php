<?php

include("conexion.php");
$con=conectar();

$IDventas=$_GET['id'];

$sql="DELETE FROM ventas  WHERE IDventa='$IDventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>