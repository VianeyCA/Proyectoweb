<?php
    require_once("conexion.php");
    session_start();
    $Matricula=$_POST["Matricula"];
    $Nombre_Completo=$_POST["Nombre_Completo"];
    $Correo=$_POST["Correo"];
    $Estado=$_POST["Estado"];
    $Contraseña=$_POST["Contraseña"];
    $rol=$_POST["rol"];
    
    $sql="INSERT INTO docentes VALUES ('$Matricula','$Nombre_Completo','$Correo','$Estado','$Contraseña','$rol')";
    mysqli_query($con, $sql);
    header("Location: Componentes/Inicio/index2.php");
    

?>
