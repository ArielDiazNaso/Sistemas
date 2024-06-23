<?php

    function es_par($num) {
        return $num % 2 == 0;
    }

    $numero = $_REQUEST["numero"];

    $numero = (int)$numero;

    if (es_par($numero)) {
        echo "El numero $numero es par.";
    } else {
        echo "El numero $numero es impar.";
    }

?>
