<?php 

    abstract class Pessoa
    {
        protected $nome;
        protected $idade;
        protected $sexo;

        function __construct($no, $ida, $se)
        {
            $this -> setNome($no);
            $this -> setIdade($ida);
            $this -> setSexo($se);
        }

        final function fazerNiver()
        {
            $this -> setIdade($this -> getIdade() + 1);
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
            return $this -> idade;
        }

        function getSexo()
        {
            return $this -> sexo;
        }
    }