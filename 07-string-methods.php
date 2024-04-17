<?php include 'includes/header.php';

$nombreCliente = " Juan Pablo";


//conocer extension de un string 
echo strlen($nombreCliente);
var_dump($nombreCliente);



//eliminar espacios en blanco
$texto = trim($nombreCliente);

echo strlen($texto);

//convertirlo a mayusculas 


echo strtoupper($nombreCliente);


//Convertirlo en minusculas 


echo strtolower($nombreCliente);

//es mucho mejor cambiar a mayuculas en backend que con css 
// pongamos un ejemplo 

$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump(strtoupper($email1 )== strtoupper($email2));
//DE ESTA MANERA PODEMOS ACEPTAR LOS CORREO MAYUSCULAR Y MINUSLCULAS Y VALIDAR DESDE LA BASE DE DATOS SI EXISTE O NO SE QUE LA ESCRIBA EN MINISCULA O MAYUDACULA

//VAMOS A SUSTITUIR UN DATO DE UN STRING

echo str_replace('Juan', "J", $nombreCliente);



//REVISAR SI UN STRING EXISTE O NO 


echo strpos($nombreCliente, 'Juan');


//CONCATENACIÓN 


$tipoCliente = "Premium";

echo "<br>";


echo "<br> ";
echo "Primera Manera";
echo '<br>';

echo "El cliente ", $nombreCliente, " es ", $tipoCliente;

echo "<br>";
echo "Segunda Manera";
echo '<br>';
echo "El cliente: " . $nombreCliente . ' es ' . $tipoCliente;
echo '<br>';
echo 'Tecer manera';
echo '<br>';

echo "El cliente: {$nombreCliente} es {$tipoCliente}";




include 'includes/footer.php';