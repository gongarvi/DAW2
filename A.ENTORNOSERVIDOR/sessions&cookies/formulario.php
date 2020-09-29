<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <form method="post" action="confirmar.php">
            <label>
                <p>Nombre</p>
                <input type="text" name="nombre"/>
            </label>
            <label>
                <p>Nombre</p>
                <input type="text" name="apellidos"/>
            </label>
            <input type="submit" name="submit"/>
        </form>
        
    </body>
</html>