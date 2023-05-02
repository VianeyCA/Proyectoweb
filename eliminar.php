<?php
    $id=$_GET["id"];
    require_once("conexion.php");
    $sql="DELETE FROM usuario where id='$id'";
    $consulta=mysqli_query($con, $sql);
    header("Location:usuarios.php");

?>