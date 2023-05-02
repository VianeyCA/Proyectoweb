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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row align-content-center justify-content-center vh-50">

        <div class="col-auto border rounded p-4 " >

<?php
$Matricula=$_POST["Matricula"];
$Contraseña=$_POST["Contraseña"];
$sql="SELECT * FROM docentes WHERE Matricula='$Matricula' AND Contraseña='$Contraseña' ";
require("conexion.php");
$consulta=mysqli_query($con, $sql);
$datos=mysqli_fetch_array($consulta);
if($datos==null){
    print("Acceso denegado");
}
else{
    print("acceso permitido");
    session_start();
    $_SESSION["Nombre_Completo"]=$datos["Nombre_Completo"];
    $_SESSION["rol"]=$datos["rol"];
    $_SESSION["Correo"]=$datos["Correo"];
    require_once("rol.php");
}
?>
<div class="row align-content-center justify-content-center form-group m-2">
<a href="index.php" class="btn btn-danger">Volver al inicio de sesión</a>
</div>
</div> 
    </div>
</body>
</html>