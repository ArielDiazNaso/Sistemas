<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Pedidos de Pizzas</title>
</head>
<body>
    <h1>Pedidos de Pizzas</h1>

    <?php
    $ar = fopen("pedidos.txt", "r") or die("No se pudo abrir el archivo");
    
    while (!feof($ar)) {
        $linea = fgets($ar);
        echo nl2br($linea);
    }
    
    fclose($ar);
    ?>
</body>
</html>
