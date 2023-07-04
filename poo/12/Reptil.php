<?php 

require_once 'Animal.php';

class Reptil extends Animal
{
    private $corEscama;

    function locomover()
    {
        echo 'Rastejando</br>';
    }

    function alimentar()
    {
        echo 'Comendo folha</br>';
    }

    function emitirSom()
    {
        echo 'Som de réptil</br>';
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