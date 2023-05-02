<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../css/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
require_once("../../conexion.php");
$sql="SELECT * FROM alumnos ";
$result=mysqli_query($con, $sql);
print "<table class='table' style='width: 90%;'></> <th> Matricula </th><th> Nombre_Completo </th>
<th> Grupo </th> <th> Semestre </th> <th> Actividades </th>";
while ($datos=mysqli_fetch_array($result)){
    print"<tr><td>". $datos["Matricula"]. "</td>".
    "<td>". $datos["Nombre_Completo"]. "</td>".
    "<td>". $datos["Grupo"]. "</td>".
    "<td>". $datos["Semestre"]. "</td>".
    "<td>". $datos["Actividades"]. "</td>".
    
    "<td><a class='btn btn-danger' href=  'eliminarj.php?id=$datos[Matricula]'> Eliminar </a></td>";
}
print "</table>";
?>    


</body>
</html>