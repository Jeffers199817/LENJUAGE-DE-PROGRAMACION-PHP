<?php 
declare(strict_types=1);
include 'includes/header.php';


function usuarioAutenticado(bool $autenticado): string|int
{
    if ($autenticado) {
        echo 'El usuario esta autenticado';
    } else {
        echo 'No Autenticado';
    }
}

$usuario = usuarioAutenticado(true);
echo $usuario;


include 'includes/footer.php';