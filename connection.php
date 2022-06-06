<?php      
    $host = "ls-1117517f9b99a9488bb34616f02619a0b86c7385.cufsfhtwy8ty.us-east-1.rds.amazonaws.com";  
    $user = "dbmasteruser";  
    $password = "a`ZFcozKpBMJ2~vdL{J?u-yz]c~HX#=d";  
    $db_name = "clientes_tf";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Error al conectarse: ". mysqli_connect_error());  
    }  
?>  