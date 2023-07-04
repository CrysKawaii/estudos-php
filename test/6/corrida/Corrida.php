<?php 
require_once 'Carro.php';
class Corrida extends Carro
{
    public $desafiado;
    public $desafiante;
    public $vencedor;

    function __construct($d1, $d2)
    {
        $this -> setDesafiado($d1);
        $this -> setDesafiante($d2);
    }

    function setDesafiado($da)
    {
        $this -> desafiado = $da;
    }

    function setDesafiante($de)
    {
        $this -> desafiante = $de;
    }

    function getDesafiado()
    {
        return $this -> desafiado;
    }

    function getDesafiante()
    {
        return $this -> desafiante;
    }

    function correr()
    {
        $chance = rand(0, 2);
        switch ($chance)
        {
            case 0:
                echo '~~~~RESULTADO~~~~</br>';
                echo 'Deu empate!</br>';
                echo '-~-~~-~--~-~~--~~-~-~-</br>';
                break;
            case 1:
                $this -> vencedor = $this -> getDesafiado();
                echo '~~~~RESULTADO~~~~</br>';
                echo "O {$this -> getDesafiado() -> getPiloto()} ganhou!</br>";
                echo "Com seu carro da marca {$this -> getDesafiado() -> getMarca()}</br>";
                echo '-~-~~-~--~-~~--~~-~-~-</br>';
                break;
            case 2:
                $this -> vencedor = $this -> getDesafiante();
                echo '~~~~RESULTADO~~~~</br>';
                echo "O {$this -> getDesafiante() ->  getPiloto()} ganhou!</br>";
                echo "Com seu carro da marca {$this -> getDesafiante() -> getMarca()}</br>";
                echo '-~-~~-~--~-~~--~~-~-~-</br>';
                break;
        }
    }
}

?>