
<html >
<head>
    
</head>
<body>

<?php
/*
    4. Elaborar un formulario que solicite el ingreso del nombre de una persona y un control
  select (que permita la selección del monto adeudado de la persona (1-1000,1001-
  10.000,>10.000). En la página que procesa el formulario mostrar un mensaje si debe pagar
  un recargo (si supera 10.000).
*/

  $nombre = $_REQUEST['nombre'];
  $monto = $_REQUEST['monto'];
  
  if ($monto == ">10000") {
    echo "$nombre debe pagar un recargo por superar los 10000.";
  } else {
    echo "$nombre no debe pagar recargo.";
  }
?>

</body>
</html>
