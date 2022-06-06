<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Base de datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="../css/table.css" rel="stylesheet">
        <link href="../css/form.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <br>
            <div class="container">
                            <div class="form">
                            <div class="title">Registro</div>
                            <div class="subtitle">Añade un nuevo cliente</div>
                                <form action="insertar.php" method="POST">

                                    <div class="input-container ic1"><input id="codigo_cliente" class="input" name="codigo_cliente" type="text" placeholder=" " /><div class="cut"></div><label for="codigo_cliente" class="placeholder">Código</label></div>
                                    <div class="input-container ic1"><input id="dni" class="input" name="dni" type="text" placeholder=" " /><div class="cut"></div><label for="dni" class="placeholder">DNI</label></div>
                                    <div class="input-container ic1"><input id="nombres" class="input" name="nombres" type="text" placeholder=" " /><div class="cut"></div><label for="nombres" class="placeholder">Nombres</label></div>
                                    <div class="input-container ic1"><input id="apellidos" class="input" name="apellidos" type="text" placeholder=" " /><div class="cut"></div><label for="apellidos" class="placeholder">Apellidos</label></div>
                                    <div class="input-container ic1"><input id="nombre_gimnasio" class="input" name="nombre_gimnasio" type="text" placeholder=" " /><div class="cut"></div><label for="nombre_gimnasio" class="placeholder">Gimnasio</label></div>
                                    <div class="input-container ic1"><input id="suscripcion" class="input" name="suscripcion" type="text" placeholder=" " /><div class="cut"></div><label for="suscripcion" class="placeholder">Tipo de suscripción</label></div>
                                    <div class="input-container ic1"><input id="tiempo_restante" class="input" name="tiempo_restante" type="text" placeholder=" " /><div class="cut"></div><label for="tiempo_restante" class="placeholder">Tiempo restante</label></div>

                                    
                                    <button type="text" class="submit">Agregar</button>
                                </form>
                            </div>
            </div>
    </body>
</html>