<html>
<head>
  <meta charset="UTF-8">
  <title>Respuesta</title>
</head>
<body>
  

<?php

/*
6. Crear un vector con los meses del año. Ordenarlo alfabéticamente, mostrar el
resultado por pantalla.
*/

$meses[0] = "enero";
$meses[1] = "febrero";
$meses[2] = "marzo";
$meses[3] = "abril";
$meses[4] = "mayo";
$meses[5] = "junio";
$meses[6] = "julio";
$meses[7] = "agosto";
$meses[8] = "septiembre";
$meses[9] = "octubre";
$meses[10] = "noviembre";
$meses[11] = "diciembre";

sort($meses);

echo "Los meses del año ordenados alfabeticamente son:<br>";
foreach ($meses as $mes) {
    echo $mes . "<br>";
}

?>

</body>
</html>