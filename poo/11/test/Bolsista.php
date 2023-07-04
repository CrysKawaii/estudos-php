<?php 

    require_once 'Aluno.php';

    class Bolsista extends Aluno
    {
        private $bolsa;

        function renovarBolsa()
        {
            echo "A bolsa foi renovada com êXito!</br>";
        }

        function pagarMensalidade()
        {
            echo "{$this -> getNome()} é bolsisita. Então paga com desconto</br>";
        }

        function setBolsa($b)
        {
            $this -> bolsa = $b;
        }

        function getBolsa()
        {
            return $this -> bolsa;
        }
    }