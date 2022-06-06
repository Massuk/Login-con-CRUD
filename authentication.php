<?php      
    include('connection.php');  
    
    $user = $_POST['user'];  
    $password = $_POST['pass']; 
     
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $password = stripcslashes($password);  
        $user = mysqli_real_escape_string($con, $user);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from login_users where user = '$user' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:crud/clientes.php");  
        }  
        else{
            ?>
            <?php
            include("index.html");
        
          ?>
          <h2 class="error">Usuario o contraseña no válidos</h2>
          <?php
        }
?>  