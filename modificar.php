<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="row align-content-center justify-content-center vh-50">

    <div class="col-auto border rounded p-4">

    <form action="update.php" method="post">
    <a href="admin.php" class="btn btn-danger"><--</a>
        <?php
            require("conexion.php");
            session_start();
            $sql="SELECT*FROM usuario WHERE id='".$_GET["id"]."'";
            $result=mysqli_query($con,$sql);
            $datos=mysqli_fetch_array($result);
            $_SESSION["id"]=$datos["id"];
        ?>
        <label class="row align-content-center justify-content-center" for="">Ingrese los nuevos datos</label>
                <div class="row align-content-center justify-content-center form-group m-2">
                    <label for="">Nombre</label> 
                    <input required type="text" name="user" value="<?php print $datos["user"];?>">
                </div>
                
                <div class="row align-content-center justify-content-center form-group m-2">
                    <label for="">Correo</label> 
                    <input required type="email" name="email" value="<?php print $datos["email"];?>">
                </div>

                <div class="row align-content-center justify-content-center form-group m-2">
                    <label for="">Contraseña</label>
                    <input required type="password" name="pass" value="<?php print $datos["pass"];?>">
                </div>

                <div class="row align-content-center form-group m-2">
                    <label for="">Tipo de usuario</label> 
                    <select required name="rol" id="">
                        <option value="">Tipo de usuario</option>
                        <option value="administrador">Admin</option>
                        <option value="usuario">Usuario</option>
        </select>
                </div>

                <div>
                    <input type="submit" class="btn btn-success m-2" value="Actualizar">
                </div>
        
        </form>
    </div>
</div>
</body>
</html>
