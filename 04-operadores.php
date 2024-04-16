<?php include 'includes/header.php';


$numero = 20;
$numero1 = 24;
//SUMAR
echo "Calculadora de 2 números";
echo "<br>";
echo "Número 1:", $numero;
echo "<br>";
echo "Número 2:" , $numero1;
echo "<br>";
echo "<br>";
echo "===================================================";
echo "<br>";
echo "La suma es:",($numero + $numero1);

echo "<br>";
//RESTA
echo "===================================================";
echo "<br>";
echo "La resta es: ", ($numero - $numero1);

echo "<br>";

//Multiplicación 
echo "===================================================";
echo "<br>";
echo "La multiplicación es: " ,($numero * $numero1);
echo "<br>";

echo "===================================================";
echo "<br>";
//Division
echo "La división es: ", ($numero / $numero1);

echo "<br>";


include 'includes/footer.php';