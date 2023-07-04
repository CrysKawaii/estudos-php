<?php 

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    function soltarBolha()
    {
        echo 'Soltando a bolha</br>';
    }

    function locomover()
    {
        echo 'Nadando</br>';
    }

    function alimentar()
    {
        echo 'Comendo substâncias do mar</br>';
    }

    function emitirSom()
    {
        echo 'Som de peixe</br>';
    }

    function setCorEscama($ce)
    {
        $this -> corEscama = $ce;
    }

    function getCorEscama()
    {
        return $this -> corEscama;
    }
}

?>