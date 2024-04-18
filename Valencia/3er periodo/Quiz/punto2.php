<?php

$productos = array(

'Manzanas' => 2.5,

'Plátanos' => 1.8,

'Naranjas' => 3.2,

'Peras' => 2.0

);

$producto_mas_caro = '';

$precio_mas_alto = 0;


foreach ($productos as $producto => $precio) {

if ($precio > $precio_mas_alto) {

$producto_mas_caro = $producto;

$precio_mas_alto = $precio;

}

}


echo "El producto más caro es: $producto_mas_caro, con un precio de: $precio_mas_alto";

?>