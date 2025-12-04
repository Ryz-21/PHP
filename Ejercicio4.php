<?php
// Iniciamos la sesión para guardar el contador
session_start();

// Si el contador no existe aún, lo creamos en 0
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0;
}

// Si se presiona algún botón
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["sumar"])) {
        if ($_SESSION["contador"] < 10) {
            $_SESSION["contador"]++;
        } else {
            $mensaje = "<p style='color:red;'>No puedes superar 10.</p>";
        }
    }

    if (isset($_POST["restar"])) {
        if ($_SESSION["contador"] > 0) {
            $_SESSION["contador"]--;
        } else {
            $mensaje = "<p style='color:red;'>No puedes bajar de 0.</p>";
        }
    }
}
?>

<h1>Contador</h1>

<h2>Valor actual: <?php echo $_SESSION["contador"]; ?></h2>

<?php
// Mostrar mensaje si existe
if (!empty($mensaje)) {
    echo $mensaje;
}
?>

<form method="POST">
    <button type="submit" name="sumar">+</button>
    <button type="submit" name="restar">-</button>
</form>
