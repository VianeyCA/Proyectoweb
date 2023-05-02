<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Administración</title>
      

</head>
<body>

  <div class="navbar navbar-expand-lg bg-dark"> <!--barra de ajustes -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">=</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a href="usuarios.php" class="nav-link">Administrar de usuarios</a>
        </li>
        <li class="nav-item">
          <a href="Componentes/Inicio/index2.php" class="nav-link">Ver Pagina</a>
        </li>
        <li>
        <a href="inser.php" class="nav-link">Registrate aqui</a>
        </li>

        <li class="nav-item " >
       <?php
        session_start();
        if(isset($_SESSION["Nombre_Completo"])){
            print $_SESSION["Nombre_Completo"];
            print " <ul class='navbar-nav mr-auto'> <li class='nav-item'>
            <a href='cerrar.php'>Cerrar sesión</a>
        </li> 
        </ul>";
        }
       ?>
   </li>
      </ul>
    </div>
  </div> 
  </div>
<!-- Aqui van los juegos -->
<div class="posts " >
    <div class="post" >

<!-- juegos en forma de tabla -->
<?php
require_once("conexion.php");
$sql="SELECT * FROM docentes";
$result=mysqli_query($con, $sql);
print "<table class='table' style='width: 90%;'></> <th> Matricula </th><th> Nombre_Completo </th>
<th> Correo </th> <th> Esatdo </th> <th> Contraseña </th> <th> rol </th>";
while ($datos=mysqli_fetch_array($result)){
    print"<tr><td>". $datos["Matricula"]. "</td>".
    "<td>". $datos["Nombre_Completo"]. "</td>".
    "<td>". $datos["Correo"]. "</td>".
    "<td>". $datos["Estado"]. "</td>".
    "<td>". $datos["Contraseña"]. "</td>".
    "<td>". $datos["rol"]. "</td>".
    "<td><a class='btn btn-danger' href=  'eliminarj.php?id=$datos[Matricula]'> Eliminar </a></td>";
}
print "</table>";
?>    


<!-- fin juegos en forma de tabla -->


        
    </ul>
    </div>
</div>
</body>
</html>