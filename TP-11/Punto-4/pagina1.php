<?php

    $ar = fopen("pedidos.txt", "a") or die("Problemas en la creación del archivo");

    $nombre = $_REQUEST["nombre"];
    $direccion = $_REQUEST["direccion"];
    
    $pedido = "";
   
        $cantidad_jq = $_REQUEST["cantidad_jq"];
        $pedido .= "Jamon y Queso: " . $cantidad_jq . "\n";
    
 
        $cantidad_napo = $_REQUEST["cantidad_napo"];
        $pedido .= "Napolitana: " . $cantidad_napo . "\n";
    
        $cantidad_muzza = $_REQUEST["cantidad_muzza"];
        $pedido .= "Muzzarella: " . $cantidad_muzza . "\n";
    

    fputs($ar, "Nombre: " . $nombre . "\n");
    fputs($ar, "Dirección: " . $direccion . "\n");
    fputs($ar, $pedido);
    fputs($ar, "----------------------------------------\n");

    // Cerrar el archivo
    fclose($ar);

    // Confirmar al usuario que su pedido fue registrado
    echo "Pedido registrado correctamente.";

?>
