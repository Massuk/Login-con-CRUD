<?php

include("conexion.php");
$con=conectar();

$codigo_cliente=$_POST['codigo_cliente'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];;
$nombre_gimnasio=$_POST['nombre_gimnasio'];
$suscripcion=$_POST['suscripcion'];
$tiempo_restante=$_POST['tiempo_restante'];

$sql="UPDATE clientes SET dni='$dni', nombres='$nombres', apellidos='$apellidos', nombre_gimnasio='$nombre_gimnasio', suscripcion='$suscripcion', tiempo_restante='$tiempo_restante' WHERE codigo_cliente='$codigo_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>