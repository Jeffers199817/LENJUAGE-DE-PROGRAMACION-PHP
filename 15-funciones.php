<?php
declare(strict_types=1);//permite escribir codigo con menos errores 
include 'includes/header.php';






function sumar(int $numero1 =0, int $numero2=0){

    echo $numero1 + $numero2;

}


sumar(6,3);
echo "</br>";
sumar(623,43);
echo "</br>";
sumar(6,45);
echo "</br>";
sumar(6);



include 'includes/footer.php';