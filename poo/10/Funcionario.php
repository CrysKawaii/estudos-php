<?php 

    require_once 'Pessoa.php';

    class Funcionario extends Pessoa
    {
        private $setor;
        private $trabalhando;

        function mudarTrabalho()
        {
            $this -> trabalhando = !$this -> trabalhando;
        }

        function setSetor($s)
        {
            $this -> setor = $s;
        }

        function setTrabalhando($tr)
        {
            $this -> trabalhando = $tr;
        }

        function getSetor()
        {
            return $this -> setor;
        }

        function getTrabalhando()
        {
            return $this -> trabalhando;
        }
    }