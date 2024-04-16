<?php include 'includes/header.php';


$numero1 = 20;
$numero2 = 40;
$numero3 = 40;
$numero4 = "40";

var_dump($numero1 > $numero2);

echo "<br>";

var_dump($numero1 < $numero2);

echo"<br>";

var_dump($numero1 <= $numero2);

echo "<br>";

var_dump($numero2 >= $numero3);

echo "<br>";

var_dump($numero3 == $numero4);

echo"<br>";


//SI en la izquierda es menor = a -1
var_dump($numero1 <=> $numero2);

echo "<br>";   

//si en la izquierda es mayor = a 1
var_dump($numero2 <=> $numero1);

echo "<br>";    

// si son iguales entonces es 0 la respuesta;
var_dump($numero2 <=> $numero3);

include 'includes/footer.php';