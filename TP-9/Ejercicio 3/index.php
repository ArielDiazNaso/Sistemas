
<html >
<head>
    
</head>
<body>

<?php

/*
        3. Elaborar un formulario que solicite la carga del nombre de una persona y que permita
    seleccionar una serie de deportes que practica (futbol, basket, tennis, voley). Mostrar en
    la página que procesa el formulario la cantidad de deportes que practica.
*/

$nombre = $_REQUEST['nombre'];
$deportes = $_REQUEST['deportes'];

$cantidad = count($deportes);

echo "$nombre practica $cantidad deporte(s):<br>";

for ($i = 0; $i < $cantidad; $i++) {
  echo "- " . $deportes[$i] . "<br>";
}

?>

</body>
</html>
