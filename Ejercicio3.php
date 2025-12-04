<?php
# Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre  = $_POST["nombre"];
    $email   = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        echo "<p style='color: green;'>Mensaje enviado correctamente.</p>";
    } else {
        echo "<p style='color: red;'>Todos los campos son obligatorios.</p>";
    }
}
?>

<form method="POST">
    <h1>Formulario de Contacto</h1>

    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje" rows="4"></textarea><br><br>

    <button type="submit">Enviar</button>
</form>
