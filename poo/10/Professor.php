<?php 

    require_once 'Pessoa.php';

    class Professor extends Pessoa
    {
        private $especialidade;
        private $salario;

        function receberAumento($valor)
        {
            $this -> salario += $valor;
        }

        function setEspec($esp)
        {
            $this -> especialidade = $esp;
        }

        function setSalario($sa)
        {
            $this -> salario = $sa;
        }

        function getEspec()
        {
            return $this -> especialidade;
        }

        function getSalario()
        {
            return $this -> salario;
        }
    }