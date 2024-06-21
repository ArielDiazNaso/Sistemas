<html>
<head>
  <meta charset="UTF-8">
  <title>Respuesta</title>
</head>
<body>
  
<?php

/*
8. Almacenar en un vector asociativo la cantidad de días que tiene cada mes del año.
Luego acceder por su nombre como subíndice. Mostrar por pantalla un mensaje que
permita mostrar la cantidad de días de cada mes.
*/

$diasMes["enero"] = 31;
$diasMes["febrero"] = 28; 
$diasMes["marzo"] = 31;
$diasMes["abril"] = 30;
$diasMes["mayo"] = 31;
$diasMes["junio"] = 30;
$diasMes["julio"] = 31;
$diasMes["agosto"] = 31;
$diasMes["septiembre"] = 30;
$diasMes["octubre"] = 31;
$diasMes["noviembre"] = 30;
$diasMes["diciembre"] = 31;

foreach ($diasMes as $mes => $dias) {
    echo "<br>";
    echo "El mes de " . $mes . " tiene " . $dias . " dias.<br>";
}

?>

</body>
</html>