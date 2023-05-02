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
    
    <div class="navbar navbar-expand-lg bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">=</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="admin.php" class="nav-link btn btn-danger"><--</a>
        </li>
        </ul>

    </div>
  </div>
  </div>
<?php
require_once("conexion.php");
$sql="SELECT * FROM usuario";
$result=mysqli_query($con, $sql);
print "<table class='table' style='width: 90%;'><tr><th> ID </th><th> Usuario </th><th> Correo </th><th> Contraseña </th><th> Rol </th>";
while ($datos=mysqli_fetch_array($result)){
    print"<tr><td>". $datos["id"]. "</td>". 
    "<td>". $datos["user"]. "</td>".
    "<td>". $datos["email"]. "</td>".
    "<td>". $datos["pass"]. "</td>".
    "<td>". $datos["rol"]. "</td>".
    "<td><a class='btn btn-danger' href=  'eliminar.php?id=$datos[id]'> Bannear </a></td>".
    "<td><a class='btn btn-success' href= 'modificar.php?id=$datos[id]'> Actualizar</a></td>";
}
print "</table>";
?>    
</body>
</html>
