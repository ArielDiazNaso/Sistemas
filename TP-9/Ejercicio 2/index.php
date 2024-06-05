
<html >
<head>
    
</head>
<body>

<?php

/*
    Solicitar que se ingrese por teclado el nombre de una persona, disponer tres controles
de tipo radio que nos permitan seleccionar su nivel de estudio:
1-Primarios, 2-Secundarios, 3-Terciario, 4-Universitario, 5- Sin estudios.
En la página que procesa el formulario mostrar el nombre de la persona y un mensaje
indicando el tipo de estudios que posee.
*/

$estudios;
$nombre = $_POST["nombre"];
if ($_REQUEST['radio1'] == "Primarios") {
    $estudios = "Primarios";

}else if ($_REQUEST['radio1'] == "Secundarios") {
    $estudios = "Secundarios";

}else if ($_REQUEST['radio1'] == "Terciario") {
    $estudios = "Terciario";

}else if ($_REQUEST['radio1'] == "Universitario") {
    $estudios = "Universitario";

}else if ($_REQUEST['radio1'] == "Sin estudios") {
    $estudios = "Sin estudios";

}
echo $nombre. " cuenta con estudios ". $estudios . ".";
  



?>

</body>
</html>
