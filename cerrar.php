<?php
    session_start();
    session_destroy();
    header("Location: Componentes/Inicio/index2.php");
?>