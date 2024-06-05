<html >
<head>
    
</head>
<body>

<?php

/*
1. Elaborar un formulario que solicite la carga de un nombre de persona y su edad, luego
mostrar en otra página si es menor de edad (si la edad es menor a 18) o mayor de edad
(si la edad es mayor o igual a 18),
*/
    function verificador($edad){
        $estado = false;

        if($edad >= 18 ){
            $estado = true;
        }else{
            $estado = false;
        }
        return $estado;
    }

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    if(verificador($edad) == true){
        echo $nombre. " es mayor de edad .";
    }else{
        echo $nombre. " es menor de edad .";
    }
    

?>

</body>
</html>
