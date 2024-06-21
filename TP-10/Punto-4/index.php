<html>
<head>
  <meta charset="UTF-8">
  <title>Respuesta</title>
</head>
<body>
  

<?php

/*
4. Declarar un array de booleanos de nombre $confirmado e introduce en él seis
elementos. Mostrar por pantalla el elemento con índice 0.
*/

$confirmado[0] = true;
$confirmado[1] = false;
$confirmado[2] = true;
$confirmado[3] = false;
$confirmado[4] = true;
$confirmado[5] = false;

if ($confirmado[0]) {
    echo "El elemento con índice 0 es: true";
} else {
    echo "El elemento con índice 0 es: false";
}

?>

</body>
</html>