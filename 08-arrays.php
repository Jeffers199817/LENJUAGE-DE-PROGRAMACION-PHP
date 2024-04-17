<?php include 'includes/header.php';


//otra maner es con $carrito = array();
$carrito = ['Tablet', 'Television', 'Computadora'];


//UTIL PARA VER LOS CONTENIDO DE UN ARRAY
echo "<pre>";
var_dump($carrito[0]);
echo "</pre>";


//ACCEDER A UN ELEMENTO DE LA ARRAY

echo $carrito[2];


//Anade un elemento en el indice 3 del arreglo 

$carrito[3] = 'Nuevo Producto';

//Añadir une leemnto nuevo al final del arrelgo.

array_push($carrito, 'Audifonos');


//Añadir al inicio del arreglo

array_unshift($carrito,'SmartWahcht');

//Util para ver los contenidos de un array

echo "<pre>";

var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

echo "<pre>";

var_dump($clientes);
echo "<pre>";

echo $clientes[1];






include 'includes/footer.php';