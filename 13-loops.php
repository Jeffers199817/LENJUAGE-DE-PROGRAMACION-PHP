<?php include 'includes/header.php';


//while 


 $i = 0; /// inicializador

 while($i< 10){

    echo $i . "<br>";

    $i++;//Incremento */

}

// Do While

$i =0;

do {
    echo $i . "<br>";
    $i++;
} while($i<10);
 


//FOR LOOP.
 for($i = 0; $i<10; $i++){
   echo $i."<br>";

}


// 3 imprime fizz 
// 5 imprimi Buzz
// 3 y 5 imprim FIZZ FUZZ 

for ($i = 1; $i < 20; $i++){
   
    if($i%3== 0 && $i % 5 == 0 ){
        echo $i." - FIZZ  BUZZ <br/>";
        
    }else if($i%3== 0){
        echo $i." - FIZZ <br/>";

    }else if ($i % 5 == 0) {
        echo $i . " - BUZZ<br/>";
    
    }
}






 //FOR EACH

$clientes = array('Pedro', 'Juan', 'karen', 'Edi', 'Alex', 'Adrian', 'erick');

foreach($clientes as $cliente){
    echo $cliente . "<br/>";
}

echo sizeof($clientes);



//FOR EACH CON ARREGLOS ASOCIATIVOS

$cliente = [
    "nombre" => 'Juan',
    'slado' => 234,
    'tipo' => 'Premium'
];

foreach($cliente as $key => $valor){
    echo $key.'- '.$valor . "<br/>";
}





include 'includes/footer.php';