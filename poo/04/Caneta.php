<?php 

class Caneta {
    private $cor;
    private $modelo;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $c, $p, $ca)
    {
        $this -> setModelo($m);
        $this -> setCor($c);
        $this -> setPonta($p);
        $this -> setCarga($ca);
        $this -> tampar();
    }

    

    public function rabiscar() {
        // $this é referente ao objeto, ou seja, $this == $caneta1;
        if ($this -> tampada) {
            echo "A caneta está tampada, por favor tire a tampa dela";
        }
        else {
            echo "Estou fazendo rabiscos :)";
        }
    }
 
    public function tampar() {
        $this -> tampada = true;
    }

    public function destampar() {
        $this -> tampada = false;
    }

    public function getCor() {
        return $this -> cor;
    }

    public function setCor($c) {
        $this -> cor = $c;
    }

    public function getCarga() {
        return $this -> carga;
    }

    public function setCarga($ca) {
        $this -> carga = $ca;
    }

    public function getModelo() {
        return $this -> modelo;
    }

    public function setModelo($m) {
        $this -> modelo = $m;
    }

    public function getPonta() {
        return $this -> ponta;
    }

    public function setPonta($p) {
        $this -> ponta = $p;
    }
}