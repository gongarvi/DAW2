<html>
    <head></head>
    <body>
        <form method="get" action="inicio.php">
            <label>
                <p>Nombre:</p>
                <input name="nombre" type="text" id="nombre" required/>
            </label>
            <label>
                <p>Apellido:</p>
                <input name="apellido" type="text" id="apellido" required/>
            </label>
            <label>
                <p>Email:</p>
                <input name="email" type="text" id="email" required/>
            </label>
            <label>
                <p>Background:</p>
                <input name="background" type="radio" value="#F00" for="rojo" required/>
                <label for="rojo">Rojo</label>
                <input name="background" type="radio" value="#0F0" for="verde" required/>
                <label for="verde">Verde</label>
                <input name="background" type="radio" value="#00F" for="azul" required/>
                <label for="azul">Azul</label>
            </label>
            <label>
                <p>Color</p>
                <select name="color" required>
                    <option value="#FFF"> Blanco</option>
                    <option value="#000">Negro</option>
                </select>
            </label>
            <label>
                <input name="subimit" type="submit" value="Enviar Formulario"/>
            </label>
        </form>

        <?php
            if(isset($_GET["nombre"]) && $_GET["nombre"]!="" && isset($_GET["apellido"]) && $_GET["apellido"]!="" && isset($_GET["email"]) && $_GET["email"]!=""
                && isset($_GET["color"]) && $_GET["color"]!="" && isset($_GET["background"]) && $_GET["background"]!=""){
                $nombre  = $_GET["nombre"];
                $apellido = $_GET["apellido"];
                $email = $_GET["email"];
                $color = $_GET["color"];
                $background=$_GET["background"];
                echo '<p style="color:'.$color.'; background-color:'.$background.'">Buenas '.$nombre.' '.$apellido.'. ¿Es '.$email.', tu correo electronico?';
            }
        ?>
    </body>
</html>