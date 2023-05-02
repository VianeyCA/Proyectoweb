<?php
    $id=$_GET["id"];
    require_once("conexion.php");
    $sql="DELETE FROM videojuegos where id_juego='$id'";
    $consulta=mysqli_query($con, $sql);
    header("Location:admin.php");

?>