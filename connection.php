<?php      
    $host = "";  
    $user = "";  
    $password = "";  
    $db_name = "";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Error al conectarse: ". mysqli_connect_error());  
    }  
?>  