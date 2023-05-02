<?php 
        require_once('conexion.php');
        if (empty($_POST["nombre"]) || empty($_POST["descripcion"])){
        }else{
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $query="INSERT INTO videojuegos (nombre, imagen, descripcion) VALUES ('$nombre', '$imagen', '$descripcion')";
            $result= $con->query($query);

            if($result){
                echo "Se han insertado los datos";
                header("Location: admin.php");
            }else{
                echo "No se han guardado los datos";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <title>Agregar juegos</title>
</head>
<body>
<br><br><br><br><br><br>
<div class="row align-content-center justify-content-center vh-50">
    <div class="col-auto border rounded p-4">
        <form action="" enctype="multipart/form-data" method="post">
        <a href="admin.php" class="btn btn-danger"><--</a>

            <label style="font-size: 20px;" class="row align-content-center justify-content-center">Ingresa los datos del nuevo juego</label>
            <div class="row align-content-center justify-content-center form-group m-2">
        <label for="">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input required type="text" name="nombre" maxlength="30"><br>
            </div>

            <div class="row align-content-center justify-content-center form-group m-2">
        <label  for="">Descripcion</label>
            <input required type="text" name="descripcion" maxlength="30"><br><br>
            </div>

            <div class="row align-content-center justify-content-center form-group m-2">
        <label for="">Imagen</label><br>
            <input required type="file" size="2m" name="imagen" require_once="conexion.php"><br><br>
            </div>

            
 
            <input type="submit" class="btn btn-success m-2" name="Guardar" value="Guardar">



    </form>


    </div>

</div>
</body>
</html>