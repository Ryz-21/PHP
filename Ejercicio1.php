<?php
# Crear una lista donde se pueda hacer un buscador y filtrar.
$lista = ["nose", "nervios", "gato"];

if($_SERVER("REQUEST_METHOD") == "POST"){

    $variable = $_POST["palabrafiltrar"];


    if(in_array($variable, $lista)){
        echo "<p style='color: green;'>Se encontró la palabra '$variable'</p>";
    } else {
        echo "<p style='color: red;'>No se encontró la palabra '$variable'</p>";
    }
}

?>
<form method="POST">
    <h1>ingrese palabra a filtrar </h1>
    <input type = "text" name="palabrafiltrar"></input>
    <button type = "submit">buscar</button>
</form>
