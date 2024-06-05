
<html>
<head>
    
</head>
<body>

<?php
/*
    5. Diseñar un formulario de suscripción para un sitio web. Solicitar el nombre y apellido
  completos de la persona, la edad, DNI, fecha de nacimiento, género, lugar de
  nacimiento, dirección, intereses y/o hobbies, comentarios, entre otros. La página que
  procesa el formulario debe mostrar las modificaciones realizadas por el usuario. Actualizar
  el sitio Web.
*/

  $nombre =  $_REQUEST["nombre"];
  $apellido =  $_REQUEST["apellido"];
  $edad =  $_REQUEST["edad"];
  $dni =  $_REQUEST["dni"];
  $fecha_nacimiento =  $_REQUEST["fecha_nacimiento"];
  $genero =  $_REQUEST["genero"];
  $lugar_nacimiento =  $_REQUEST["lugar_nacimiento"];
  $direccion =  $_REQUEST["direccion"];
  $intereses = $_REQUEST["intereses"];
  $comentarios =  $_REQUEST["comentarios"];

  echo "<p>Nombre: $nombre</p>";
  echo "<p>Apellido: $apellido</p>";
  echo "<p>Edad: $edad</p>";
  echo "<p>DNI: $dni</p>";
  echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
  echo "<p>Género: $genero</p>";
  echo "<p>Lugar de Nacimiento: $lugar_nacimiento</p>";
  echo "<p>Dirección: $direccion</p>";
  echo "<p>Intereses: <br>";

  for ($i = 0; $i < count($intereses); $i++) {
    echo "- " . $intereses[$i] . "<br>";
  }
  
  echo "<p>Comentarios: $comentarios</p>";

?>

</body>
</html>
