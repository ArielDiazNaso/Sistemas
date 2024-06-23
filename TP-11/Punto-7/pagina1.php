<?php

function sumar_numeros($num1, $num2) {
    return $num1 + $num2;
}
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];

    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;

    $suma = sumar_numeros($numero1, $numero2);

    echo "La suma de $numero1 y $numero2 es: $suma";

?>
