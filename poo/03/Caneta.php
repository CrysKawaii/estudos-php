<?php 

class Caneta {
    public $cor;
    public $modelo;
    private $ponta;
    protected $carga;
    protected $tampada;

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
}