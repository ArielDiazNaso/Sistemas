<?php

    $nombre = $_REQUEST["nombre"];
    $dni = $_REQUEST["dni"];
    $fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
    $curso_actual = $_REQUEST["curso_actual"];
    $materias_adeudadas = $_REQUEST["materias_adeudadas"];
    $materia_inscripcion = $_REQUEST["materia_inscripcion"];
    $curso_materia = $_REQUEST["curso_materia"];
    $fecha_inscripcion = $_REQUEST["fecha_inscripcion"];

    $datos = "Apellidos y Nombres: $nombre \n";
    $datos .= "DNI: $dni \n";
    $datos .= "Fecha de Nacimiento: $fecha_nacimiento \n";
    $datos .= "Curso Actual: $curso_actual \n";
    $datos .= "Cantidad de Materias Adeudadas: $materias_adeudadas \n";
    $datos .= "Materia en la que se inscribe: $materia_inscripcion \n";
    $datos .= "Curso al que pertenece la materia: $curso_materia \n";
    $datos .= "Fecha de Inscripción: $fecha_inscripcion \n";
    $datos .= "................................................ \n"; 

    $archivo = fopen("comprobante.txt", "a") or die("No se pudo abrir el archivo");
    fwrite($archivo, $datos);
    fclose($archivo);

    echo "Inscripción realizada con éxito.";

?>
