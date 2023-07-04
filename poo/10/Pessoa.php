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

        function setNome($n)
        {
            $this -> nome = $n;
        }

        function setIdade($i)
        {
            $this -> idade = $i;
        }

        function setSexo($s)
        {
            $this -> sexo = $s;
        }

        function getNome()
        {
            return $this -> nome;
        }

        function getIdade()
        {
            $this -> idade;
        }

        function getSexo()
        {
            $this -> sexo;
        }

        function fazerNiver()
        {
            $this -> idade++;
        }
    }

    ?>