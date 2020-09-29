<?php
    session_start();
    $nombre = $_POST['nombre'];
    $apellido = $_POST["apellidos"];
    $_SESSION["nombre"]=$nombre;
    $_SESSION["apellidos"]=$apellido;
?>
<html>
    <head></head>
    <body>
        <p>Nombre:</p:>
        <?php
            echo "<p> $nombre </p>";
        ?>
        <p>Apellidos </p>
        <?php
            echo "<p> $apellido </p>";
        ?>
        <form method="post" action = "output.php"> 
            <input type="submit" name="button2" value="confirmar"/> 
        </form> 
    </body>
</html>