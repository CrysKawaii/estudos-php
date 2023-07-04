<?php 
class Carro
{
    protected $piloto;
    protected $marca;
    protected $ano;
    protected $cor;

    function __construct($pi, $mar, $ano, $cor)
    {
        $this -> setPiloto($pi);
        $this -> setMarca($mar);
        $this -> setAno($ano);
        $this -> setCor($cor);
    }

    function setPiloto($p)
    {
        $this -> piloto = $p;
    }

    function setMarca($m)
    {
        $this -> marca = $m;
    }

    function setAno($a)
    {
        $this -> ano = $a;
    }

    function setCor($c)
    {
        $this -> cor = $c;
    }

    function getPiloto()
    {
        return $this -> piloto;
    }

    function getMarca()
    {
        return $this -> marca;
    }

    function getAno()
    {
        return $this -> ano;
    }

    function getCor()
    {
        return $this -> cor;
    }
}
?>