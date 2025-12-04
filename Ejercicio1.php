<?php
#● Crea un contador que no pueda disminuir de 0 y no pueda superar 10
#● Crea un botón que cambie entre modo claro y modo oscuro
#● Crear un formulario de contacto donde tenga los campos de nombre, email,mensaje.
#Se debe de visualizar la validación y mostrar un mensaje de envío exitoso.
#● Calculadora simple donde se pueda sumar, restar o multiplicar de dos números


#● Crear una lista donde se pueda hacer un buscador y filtrar.


$lista = ["nose", "nervios", "gato"];

if($_POST("REQUEST_METHOD") == "POST"){

    $variable = $_POST["palabrafiltrar"];

    foreach($variable as $lista){
        echo"se encontro la variable";
    }
}

?>
<form method="POST">
    <h1>ingrese palabra a filtrar </h1>
    <input type = "text" name="palabrafiltrar"></input>
    <button type = "submit">buscar</button>
</form>
