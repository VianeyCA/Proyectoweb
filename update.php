<?php
require_once("conexion.php");
session_start();
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $rol=$_POST["rol"];
    $id=$_SESSION["id"];

    $sql="UPDATE usuario SET user='$user', pass='$pass', email='$email', rol='$rol' WHERE id='$id'";
    mysqli_query($con, $sql);
    header("Location:usuarios.php");
?> 