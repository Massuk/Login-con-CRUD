<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clientes WHERE codigo_cliente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actualizar datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/table.css" rel="stylesheet">
        <link href="../css/form.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container">
                            <div class="form">
                            <div class="title">Editar</div>
                            <div class="subtitle">Modifica datos de un cliente</div>
                                <form action="update.php" method="POST">
                    
                                <div class="input-container ic1"><input id="codigo_cliente" class="input" name="codigo_cliente" type="hidden" placeholder=" "  value="<?php echo $row['codigo_cliente']  ?>"/><div class="cut"></div><label for="codigo_cliente" class="placeholder"></label></div>
                                <div class="input-container ic1"><input id="dni" class="input" name="dni" type="text" placeholder=" "  value="<?php echo $row['dni']  ?>"/><div class="cut"></div><label for="dni" class="placeholder">DNI</label></div>
                                <div class="input-container ic1"><input id="nombres" class="input" name="nombres" type="text" placeholder=" "  value="<?php echo $row['nombres']  ?>"/><div class="cut"></div><label for="nombres" class="placeholder">Nombres</label></div>
                                <div class="input-container ic1"><input id="apellidos" class="input" name="apellidos" type="text" placeholder=" "  value="<?php echo $row['apellidos']  ?>"/><div class="cut"></div><label for="apellidos" class="placeholder">Apellidos</label></div>
                                <div class="input-container ic1"><input id="nombre_gimnasio" class="input" name="nombre_gimnasio" type="text" placeholder=" "  value="<?php echo $row['nombre_gimnasio']  ?>"/><div class="cut"></div><label for="nombre_gimnasio" class="placeholder">Gimnasio</label></div>
                                <div class="input-container ic1"><input id="suscripcion" class="input" name="suscripcion" type="text" placeholder=" "  value="<?php echo $row['suscripcion']  ?>"/><div class="cut"></div><label for="suscripcion" class="placeholder">Suscripción</label></div>
                                <div class="input-container ic1"><input id="tiempo_restante" class="input" name="tiempo_restante" type="text" placeholder=" "  value="<?php echo $row['tiempo_restante']  ?>"/><div class="cut"></div><label for="tiempo_restante" class="placeholder">T. Restante</label></div>


                                <button type="text" class="submit">Guardar cambios</button>
                                </form>
                            </div>
            </div>
    </body>
</html>