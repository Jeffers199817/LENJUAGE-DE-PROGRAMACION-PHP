<?php include 'includes/header.php'; // para llemar a html se utiliza include 

//variables en php se pueden reasignar 
$nombre = "Juan";
$nombre = "Jefferson";

// Las variables no puedes comenzar con una numero o con mayusculas 
//La variables en php comienzan con el signo de $ siempre;

echo $nombre;
print $nombre;

// se puede imprimir con echo y print con o sin las parentesis pero si es indispensable 
// el punto y coma;

define('constante', "esto es una constante en php ");
echo constante; 

//para definir e imprimir una constante;


var_dump($nombre);
//permite imprimir la varible y el tipo de variable con su extension

//OTRA manera de crear variables

const constante2 = "Hola 2";

echo constante2;

//VARIABLES DE 2 PALARBAS

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";



include 'includes/footer.php';