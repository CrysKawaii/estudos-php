<?php 

    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        function __construct($no, $ida, $se)
        {
            $this -> setNome($no);
            $this -> setIdade($ida);
            $this -> setSexo($se);
        }

        private function setNome($n)
        {
            $this -> nome = $n;
        }

        private function setIdade($i)
        {
            $this -> idade = $i;
        }

        private function setSexo($s)
        {
            $this -> sexo = strtoupper($s);
        }

        function getNome()
        {
            return $this -> nome;
        }

        private function getIdade()
        {
            return $this -> idade;
        }

        private function getSexo()
        {
            return $this -> sexo;
        }

        function fazerNiver()
        {
            $this -> setIdade($this -> getIdade() + 1);
        }
    }

    ?>