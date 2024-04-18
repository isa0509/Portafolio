<?php

$inventario = array(
    "Producto A" => 10,
    "Producto B" => 5,
    "Producto C" => 8
);

function agregarProducto($nombre, $cantidad, &$inventario) {
    if (array_key_exists($nombre, $inventario)) {
        $inventario[$nombre] += $cantidad; 
    } else {
        $inventario[$nombre] = $cantidad; 
    }
}


agregarProducto("Producto D", 3, $inventario);
agregarProducto("Producto E", 7, $inventario);

echo "Lista actualizada de productos:\n";
foreach ($inventario as $nombre => $cantidad) {
    echo "Producto: $nombre, Cantidad: $cantidad\n";
}
?>
