<?php

function verificar_claves($clave1, $clave2) {
    if ($clave1 != $clave2) {
        return false;
    }
    return true;
}

    $usuario=  [ "usuario "];
    $clave1 =  [ "clave1 "];
    $clave2 =  [ "clave2 "];

    if (!verificar_claves($clave1, $clave2)) {
        echo "Las claves ingresadas son distintas. Por favor, inténtelo de nuevo.";
    } else {
        echo "Usuario registrado correctamente.";
    }

?>
