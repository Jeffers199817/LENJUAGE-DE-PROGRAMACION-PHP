<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo 

$carrito = ['Tablet', 'Computadora', 'Television'];


var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Television', $carrito));


//ORDENAR ELEMENTOS DE UN ARREGLO 

$NUMEROS = ARRAY(1,3,4,5,1,2) ;

sort($NUMEROS); // ordenar de menor a mayor
rsort($NUMEROS);	
echo "<pre>";

var_dump($NUMEROS);

echo"</pre>";


//ORDENAR ARREGLOS ASOCIATIVOS


$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'

);
asort($cliente);//Ordena por valores orden alfabetico
ksort($cliente);// Ordena por llaves orden alfavetico 
krsort($cliente);// ordena por llave orden alfabetico, DEL A Z A LA A;


echo "<pre>";

var_dump($cliente);

echo"</pre>";


include 'includes/footer.php';