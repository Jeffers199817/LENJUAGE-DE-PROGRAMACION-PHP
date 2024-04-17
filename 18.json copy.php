<?php require 'includes/header.php';// include es una funcion de php 

$productos = [
    [
        'nombre'=> 'Tablet',
        'precio'=> 200,
        'disponible'=> true,
        
    ],
    [

        'nombre'=> 'Televisión 24',
        'precio'=> 300,
        'disponibilidad'=> true,
    ],
    [
        'nombre'=> 'Monitor Curvo',
        'precio'=> 400,
        'disponible' => false,
    ]
    ];


echo '<pre>';
var_dump($productos);


//no puede leer de está manera el javascript debes pasarlo a json 

// de la siguiente manera; 
echo '<pre>';
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);
$json_array = json_decode($json);
var_dump($json_array);

echo '';

echo '</pre>';




    include'includes/footer.php';