<?php 

require_once 'Lobo.php';

class Cachorro extends Lobo
{
    function emitirSom()
    {
        echo 'Au! Au! Au!</br>';
    }

    function reagirFrase($frase)
    {
        if ($frase == 'Olá' || $frase == 'Toma comida')
        {
            echo 'Abanar e latir</br>';
        }
        else
        {
            echo 'Rosnar</br>';
        }
    }

    function reagirHora($hora)
    {
        if ($hora < 12)
        {
            echo 'Abanar</br>';
        }
        else if ($hora <= 18)
        {
            echo 'abanar e latir</br>';
        }

        else
        {
            echo 'Ignorar</br>';
        }
    }

    function reagirDono($dono)
    {
        if ($dono)
        {
            echo 'abanar</br>';
        }
        else
        {
            echo 'rosnar e latir</br>';
        }
    }

    function reagirIdadePeso($idade, $peso)
    {
        if ($idade < 5)
        {
            if ($peso < 10)
            {
                echo 'abanar</br>';
            }
            else 
            {
                echo 'latir</br>';
            }
        }
        else
        {
            if ($peso < 10)
            {
                echo 'rosnar</br>';
            }
            else
            {
                echo 'ignorar</br>';
            }
        }
    }
}

?>