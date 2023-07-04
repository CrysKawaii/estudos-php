<?php 

require_once 'Pessoa.php';

class Tecnico extends Pessoa
{
    private $registroProf;

    function praticar()
    {
        echo "O técnico {$this -> getNome()} está praticando.</br>";
    }

    function setRegistroProf($rp)
    {
        $this -> registroProf = $rp;
    }

    function getRegistroProf()
    {
        return $this -> registroProf;
    }
}
