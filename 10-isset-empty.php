<?php include 'includes/header.php';


$clientes = [];
$clientes2= array();
$clientes3 =array('Pedro', 'Juan', 'karen');

$clientes4 = [
    'nombre' => 'Juan',
    'saldo' => 2834
];


//Empty - Revisa si un arreglo esta vacio

var_dump(empty($clientes));
var_dump(empty( $clientes3));
var_dump(empty($clientes2));

//Isset - Revisar si un arreglo está creada o está definida .

var_dump(isset($clientes));
var_dump(isset($clientes3));
var_dump(isset($clientes4));

// Issert permite revisar si una porpiedad de unarreglo asociativo, existe!
var_dump(isset($clientes4['nombre']));



include 'includes/footer.php';