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


$sql="INSERT INTO clientes VALUES('$codigo_cliente', '$dni', '$nombres', '$apellidos', '$nombre_gimnasio', '$suscripcion', '$tiempo_restante')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>