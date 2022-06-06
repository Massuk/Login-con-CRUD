<?php

include("conexion.php");
$con=conectar();

$codigo_cliente=$_GET['id'];

$sql="DELETE FROM clientes WHERE codigo_cliente='$codigo_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
