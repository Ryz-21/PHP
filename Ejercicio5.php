<?php 
## Crea un botón que cambie entre modo claro y modo oscuro

 if(!isset($_SESSION["modo"])){
    $_SESSION["modo"] = "claro";
 }

 if(isset($_POST["cambiar"])){
    if($_SESSION["modo"] == "claro"){
        $_SESSION["modo"] == "oscuro";
    }else {
        $_SESSION["modo"] == "claro";
    }
 }
$modoActual = $_SESSION["modo"];
?>

<!DOCTYPE html>
<html>
<head>
<style>
    body.claro {
        background-color: white;
        color: black;
        font-family: Arial;
        transition: 0.3s;
    }

    body.oscuro {
        background-color: #121212;
        color: white;
        font-family: Arial;
        transition: 0.3s;
    }

    button {
        padding: 10px 20px;
        margin-top: 20px;
        cursor: pointer;
    }
</style>
</head>

<body class="<?php echo $modoActual; ?>">

<h1>Modo actual: <?php echo ucfirst($modoActual); ?></h1>

<form method="POST">
    <button type="submit" name="cambiar">
        Cambiar a modo <?php echo ($modoActual == "claro" ? "oscuro" : "claro"); ?>
    </button>
</form>

</body>
</html>