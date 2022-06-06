<?php
function conectar(){

    $host="aqui tu host";
    $user="user";
    $pass="contra";

    $bd="base de datos";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
