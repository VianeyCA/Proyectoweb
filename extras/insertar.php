<?php
    require_once("conexion.php");
    session_start();
    $user=$_POST["user"];
    $Apellido=$_POST["Apellido"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $rol=$_POST["rol"];

    $sql="INSERT INTO usuarios VALUES (NULL,'$user','$Apellido','$email','$pass','$rol')";
    mysqli_query($con, $sql);
    header("Location:admin.php");

?>
