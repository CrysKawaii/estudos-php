<?php 

require_once 'Mamifero.php';

class Canguru extends Mamifero
{
    function usarBolsa()
    {
        echo 'Baby inside</br>';
    }

    function locomover()
    {
        echo 'Saltando</br>';
    }
}

?>