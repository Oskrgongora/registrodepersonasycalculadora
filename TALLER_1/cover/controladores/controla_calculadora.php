<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST ["operacion"];

$sumar = $numero1 + $numero2;
$restar = $numero1 - $numero2;
$multiplicar = $numero1 * $numero2;
$dividir = $numero1 / $numero2;

if ($operacion == 1) {
    echo "operacion1 igual a " . $sumar;
}

if ($operacion == 2) {
    echo "operacion2 igual a " . $restar;
}

if ($operacion == 3) {
    echo "operacion3 igual a " . $multiplicar;
}

if ($operacion == 4) {
    if ($numero1 >0 && $numero2 > 0) {
        echo "operacion4 igual a " . $dividir;
    } else {
        echo "Error: no se puede dividir por 0.";
    }
} 
?>