<?php 

    require_once 'Pessoa.php';

    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;

        function cancelarMatr()
        {
            echo 'Matrícula será cancelada, irá de berço, vai de americana, voltou pro lobby</br>';
        }

        function setMatr($m)
        {
            $this -> matricula = $m;
        }

        function setCurso($c)
        {
            $this -> curso = $c;
        }

        function getMatr()
        {
            return $this -> matricula;
        }

        function getCurso()
        {
            return $this -> curso;
        }
    }