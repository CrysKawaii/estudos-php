<?php 

class Caneta {
    var $cor;
    var $modelo;
    var $ponta;
    var $carga;
    var $tampada;

     function rabiscar() {
        // $this é referente ao objeto, ou seja, $this == $caneta1;
        if ($this -> tampada) {
            echo "A caneta está tampada, por favor tire a tampa dela";
        }
        else {
            echo "Estou fazendo rabiscos :)";
        }
    }
 
     function tampar() {
        $this -> tampada = true;
    }

     function destampar() {
        $this -> tampada = false;
    }
}