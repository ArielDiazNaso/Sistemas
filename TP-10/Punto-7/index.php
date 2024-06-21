<html>
<head>
  <meta charset="UTF-8">
  <title>Respuesta</title>
</head>
<body>
  
<?php

/*
7. Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un
sistema. Acceder a cada componente por su nombre. Imprimir cada componente del
vector.
*/

$usuarios["usuario1"] = "123";
$usuarios["usuario2"] = "456";
$usuarios["usuario3"] = "789";
$usuarios["usuario4"] = "012";
$usuarios["usuario5"] = "345";

foreach ($usuarios as $nombre => $clave) {
    echo "El nombre de usuario es : " . $nombre . " y su clave de acceso es: " . $clave . "<br>";
    echo"<br>";
}

?>

</body>
</html>