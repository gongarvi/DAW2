<?php

    session_start();
    $nombre="";
    $apellido="";
    if(isset($_SESSION["nombre"]) && $_SESSION["nombre"]!="" && isset($_SESSION["apellidos"]) && $_SESSION["apellidos"]!=""){
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION["apellidos"];
    }
    echo "<p> Hola $nombre $apellido</p>";
?>