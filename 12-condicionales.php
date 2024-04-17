<?php include 'includes/header.php';


$autenticado = true;
$admin = true;
if($autenticado && $admin){
    echo 'Usuario autenticado correctamente';

}else{
    echo 'Usuario no autenticado, inicia sesión ';
}


//If anidados..

$cliente = [
    'nombre' => 'Juan',
    'saldo' => '0',
    'informacion' => [
        'tipo' => 'Premiu'
    ]
];

if (!empty($cliente)) {
    echo 'El arreglo de cliente no esta vacio';
    if($cliente['saldo']>0){
        echo 'El cliente tiene saldo del cliente esta disponible';

    } else {
        echo 'no hay saldo';
    }

}



//else if

if($cliente[ 'saldo']> 0){
    echo "El cliente tiene saldo";

}else if ($cliente['informacion']['tipo']==='Premium'){

    echo 'El cliente es Premium';
}else{
    echo 'No hay cliente definido o no tiene salod no es premium';
}


//SWITCH
echo "<br>";
$tecnologia = 'HTML';

switch($tecnologia){
    case 'PHP':

        echo "PHP, es un excelente lengauje!";
        break;

    case "JavaScript":

        echo "JavaScript, es el lenguaje de la web ";
        break;
    case "HTML":
        echo "Html es un lenguaje de estructura";
        break;


    default:
        echo "Algún lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';