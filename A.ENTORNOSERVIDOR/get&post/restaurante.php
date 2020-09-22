<html>
    <head></head>
    <body>
        <form method="post" action="restaurante.php">
            <label>
                <p>Numero Mesa:</p>
                <input name="numero_mesa" type="number" id="numero_mesa" required/>
            </label>
            <label>
                <p>Nombre:</p>
                <input name="nombre_camarero" type="text" id="nombre_camarero" required/>
            </label>
            <label>
                <p>Apellido:</p>
                <input name="apellido_camarero" type="text" id="apellido_camarero" required/>
            </label>
            <label>
                <p>Primer Plato</p>
                <select name="primer_plato" required>
                    <option value="sopa">Sopa</option>
                    <option value="macarrones">Macarrones</option>
                    <option value="ensalada">ensalada</option>
                </select>
            </label>
            <label>
                <p>Segundo Plato</p>
                <select name="segundo_plato" required>
                    <option value="filete">Filete</option>
                    <option value="pollo asado">Pollo asado</option>
                    <option value="carrileras">Carrilleras</option>
                </select>
            </label>
            <label>
                <p>Bebida</p>
                <select name="bebida" required>
                    <option value="vino tinto">Vino tinto</option>
                    <option value="verdejo">Verdejo</option>
                    <option value="txakoli">Txakoli</option>
                </select>
            </label>
            <label>
                <p>Extras:</p>
                <input name="pan" type="checkbox" id="pan" unchecked />
                <label name="pan">Pan</label>
                <input name="mantequilla" type="checkbox" id="mantequilla" unchecked/>
                <label name="pan">Mantequilla</label>
                <p>Aperitivos</p>
                <input name="aperitivos" type="text" id="mantequilla" value=""/>
            </label>
            <label>
                <input name="subimit" type="submit" value="Enviar Formulario"/>
            </1>
        </form>

        <?php
            if(isset($_POST["numero_mesa"]) && $_POST["numero_mesa"]!="" && isset($_POST["nombre_camarero"]) && $_POST["nombre_camarero"]!="" 
            && isset($_POST["apellido_camarero"]) && $_POST["apellido_camarero"]!="" && isset($_POST["primer_plato"]) && $_POST["primer_plato"]!=""
            && isset($_POST["segundo_plato"]) && $_POST["segundo_plato"]!="" && isset($_POST["bebida"]) && $_POST["bebida"]!="" 
            && isset($_POST["aperitivos"])){
                $numero_mesa  = $_POST["numero_mesa"];
                $nombre_camarero = $_POST["nombre_camarero"];
                $apellido_camarero = $_POST["apellido_camarero"];
                $primer_plato = $_POST["primer_plato"];
                $segundo_plato = $_POST["segundo_plato"];
                $bebida = $_POST["bebida"];
                
                $aperitivos=$_POST["aperitivos"];
                
                echo "<div>
                <h1>Gracias por su visita</h1>
                <p>Le ha atendido $nombre_camarero $apellido_camarero</p>
                <p>Primer plato: $primer_plato</p>
                <p>Segungo plato: $segundo_plato</p>
                <p>Bebida: $bebida</p>";
                if(isset($_POST["pan"])){
                    if($_POST["pan"]==true){
                        echo "<p>Ha pedido pan.</p>";
                    }else{
                        echo "<p>No ha pedido pan.</p>";
                    }
                }else{
                    echo "<p>No ha pedido pan.</p>";
                }
                if(isset($_POST["pan"])){
                    if($_POST["mantequilla"]==true){
                        echo "<p>Ha pedido mantequilla</p>";
                    }else{
                        echo "<p>No ha pedido mantequilla</p>";
                    }
                }else{
                    echo "<p>No ha pedido mantequilla</p>";
                }
                if($aperitivos==""){
                    echo "<p>No ha pedido aperitivos</p>";
                }
                else{
                    echo "<p>Los aperitivos son: $aperitivos</p>";
                }
                echo "</div>";
            }
        ?>
    </body>
</html>