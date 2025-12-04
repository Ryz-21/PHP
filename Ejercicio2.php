<?php
##● Calculadora simple donde se pueda sumar, restar o multiplicar de dos números

function sumar ($a , $b){
    $resultado = $a + $b;
    echo $resultado;
}
function restar ($a , $b){
    $resultado = $a - $b;
    echo $resultado;
}
function multiplicar ($a , $b){
    $resultado = $a * $b;
    echo $resultado;
}


if($_SERVER("REQUEST_METHOD") == "POST"){

    $variable = $_POST["variable"];
    $variable1 = $_POST["variable1"];
    $variable2 = $_POST["variable2"];
    if($variable == 1){
        sumar($variable1, $variable2);
    }elseif($variable == 2){
        restar($variable1, $variable2);
    }elseif($variable == 3){
        multiplicar($variable1, $variable2);
    }else{
        echo"porfavor escoge una de las tres opciones";
    } 
}

 
?>

<form method="POST">
<h1> ingresar un numero entero o decimal </h1>
<input type = "text" name="variable1">

<h1> ingresar un numero entero o decimal </h1>
<input type = "text" name="variable2">

<h1>ingresar un numero del 1 al 3 siendo cada uno (sumar)(restar)(multiplicar)</h1>
<input type="text" name="variable">

</form>


