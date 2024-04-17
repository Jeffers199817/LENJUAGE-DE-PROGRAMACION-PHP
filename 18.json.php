<?php require 'includes/header.php';// include es una funcion de php 


require'funciones.php';


iniciarApp() ;

//permite el include permite llamar 

echo "Depúes del Include";




include 'includes/footer.php';

//require se utiliza cuando tengo funciones criticas para el sistema
//si no los encuentra detiene la aplicacion ya no ejecuta; 

//Utiliza include cuando es algo pequeño si no encuentra sigue ejectutandose
//dependiendo de la configuración . 

// require_once incluye una sola vez si ya esta; incluido lo ignora al archivo. 