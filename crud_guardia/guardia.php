<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM guardia";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Guardia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_usuario" placeholder="ID_USUARIO">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="INGRESA NOMBRE(S)">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="INGRESA APELLIDO">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="INGRESA EDAD">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="INGRESA TELEFONO">
                                    <input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="INGRESA FECHA_NACIMIENTO">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto3_Holguin_Cereso/index.php" class="btn btn-primary" >Volver al inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID_USUARIO</th>
                                        <th>INGRESA NOMBRE/S</th>
                                        <th>INGRESA APELLIDO</th>
                                        <th>INGRESA EDAD</th>
                                        <th>INGRESA TELEFONO</th>
                                        <th>INGRESA FECHA DE NACIMIENTO</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Edad']?></th> 
                                                <th><?php  echo $row['Telefono']?></th>
                                                <th><?php  echo $row['Fecha_Nacimiento']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>