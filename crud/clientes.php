<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM clientes";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clientes Gym Partner</title>
        <link href="../css/table.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <br><h1>Lista de clientes</h1>
                <div style="height: 700px; overflow: auto">
                    <table class="rwd-table">
                        <tbody>
                            <tr>
                            <th>Código</th>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Gimnasio</th>
                            <th>Tipo de suscripción</th>
                            <th>Tiempo restante</th>
                            <th></th>   
                            <th></th>
                            </tr>

                        <?php
                            while($row=mysqli_fetch_array($query))
                            {
                        ?>
                        <tr>
                            <td data-th="Código"><?php  echo $row['codigo_cliente']?></td>
                            <td data-th="DNI"><?php  echo $row['dni']?></td>
                            <td data-th="Nombres"><?php  echo $row['nombres']?></td>
                            <td data-th="Apellidos"><?php  echo $row['apellidos']?></td>   
                            <td data-th="Gimnasio"><?php  echo $row['nombre_gimnasio']?></td>  
                            <td data-th="Tipo de suscripción"><?php  echo $row['suscripcion']?></td>  
                            <td data-th="Tiempo restante"><?php  echo $row['tiempo_restante']?></td>   
                            <td><a href="actualizar.php?id=<?php echo $row['codigo_cliente'] ?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="delete.php?id=<?php echo $row['codigo_cliente'] ?>" class="btn btn-danger">Eliminar</a></td>  
                        </tr>
                        <?php 
                            }
                        ?>
         
                        </tbody>
                    </table>
                </div>
                    <br><a href="nuevo.php?id=<?php echo $row['codigo_cliente'] ?>" class="btn btn-success">Nuevo cliente</a>
        </div>
     
    </body>
</html>