<?php include 'includes/header.php';


$cliente = [
    'nombre' => 'Juan',
    'saldo'=> 200,
    'informacion'=>[
        'tipo'=> 'premium',
]
];

echo "<pre>";
//var_dump($cliente);
var_dump($cliente['saldo']);
echo "<pre>";

//echo $cliente['nombre'];

//var_dump($cliente['informacion']['tipo']);

$cliente['codigo']= 1209192012;
echo "<pre>";
//var_dump($cliente);
var_dump($cliente);
echo "<pre>";



include 'includes/footer.php';