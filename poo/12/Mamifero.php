<?php 
require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPelo;

    function locomover()
    {
        echo 'Correndo</br>';
    }

    function alimentar()
    {
        echo 'Mamando</br>';
    }

    function emitirSom()
    {
        echo 'Som de mamífero</br>';
    }

    function setCorPelo($cp)
    {
        $this -> corPelo = $cp;
    }

    function getCorPelo()
    {
        return $this -> corPelo;
    }
}

?>