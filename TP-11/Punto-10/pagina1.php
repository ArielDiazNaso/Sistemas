<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Comprobantes de Inscripción</title>
</head>
<body>
    <h1>Comprobantes de Inscripción</h1>
    <?php
    $archivo = "comprobante.txt";

        $ar = fopen($archivo, "r") or die("No se pudo abrir el archivo");

        while (!feof($ar)) {
            $linea = fgets($ar);
            echo nl2br($linea);
        }

        fclose($ar);
    
    ?>
</body>
</html>
