<?php 

    require_once 'Pessoa.php';

    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;

        function pagarMensalidade()
        {
            echo "Pagando a mensalidade de {$this -> getNome()}</br>";
        }

        function setMatricula($mt)
        {
            $this -> matricula = $mt;
        }

        function setCurso($c)
        {
            $this -> curso = $c;
        }

        function getMatricula()
        {
            return $this -> matricula;
        }

        function getCurso()
        {
            return $this -> curso;
        }
    }