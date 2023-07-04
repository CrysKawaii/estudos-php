<?php 

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;

    function fazerNinho()
    {
        echo 'Construiu um ninho</br>';
    }

    function locomover()
    {
        echo 'Voando</br>';
    }

    function alimentar()
    {
        echo 'Comendo minhocas</br>';
    }

    function emitirSom()
    {
        echo 'Som de ave</br>';
    }

    function setCorPena($cp)
    {
        $this -> corPena = $cp;
    }

    function getCorPena()
    {
        return $this -> corPena;
    }
}

?>