<?php 

require_once 'Lobo.php';

class Cachorro extends Lobo
{
    function emitirSom()
    {
        echo 'Au! Au! Au!';
    }

    function reagir($frase)
    {
        if ($frase == 'Olá' || $frase == 'Toma comida')
        {
            echo 'Abanar e latir';
        }
        else
        {
            echo 'Rosnar';
        }
    }

    function reagir($hora)
    {
        if ($hora < 12)
        {
            echo 'Abanar';
        }
        else if ($hora >= 18)
        {
            echo 'abanar e latir';
        }

        else
        {
            echo 'Ignorar';
        }
    }
}

?>