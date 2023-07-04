<?php 
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssitido;

    function __construct($no, $id, $se, $lo)
    {
        parent::__construct($no, $id, $se);
        $this -> setLogin($lo);
        $this -> setTotAssistido(0);
    }

    function viuMaisUm()
    {
        $this -> setTotAssistido($this -> getTotAssistido() + 1);
    }

    function setLogin($l)
    {
        $this -> login = $l;
    }

    function setTotAssistido($ta)
    {
        $this -> totAssitido = $ta;
    }

    function getLogin()
    {
        return $this -> login;
    }

    function getTotAssistido()
    {
        return $this -> totAssitido;
    }
}
?>