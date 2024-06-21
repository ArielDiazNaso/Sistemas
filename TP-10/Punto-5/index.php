<html>
<head>
  <meta charset="UTF-8">
  <title>Respuesta</title>
</head>
<body>
  
<?php

/*
5. Declara un array de strings de nombre $jugador e introduce en él 5 apellidos. A
continuación, usando el operador de concatenación haz que se muestre la frase: <<La
alineación del equipo está compuesta por (mencionar aquí los apellidos).>>
*/

$jugador[0] = "González";
$jugador[1] = "Rodríguez";
$jugador[2] = "Martínez";
$jugador[3] = "López";
$jugador[4] = "Pérez";

$frase = "La alineacion del equipo esta compuesta por ";

for ($i = 0; $i < count($jugador); $i++) {
    $frase .= $jugador[$i];

    if ($i < count($jugador) - 1) {
        $frase .= ", ";
    }
}

echo $frase;

?>

</body>
</html>