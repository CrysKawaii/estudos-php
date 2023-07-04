<?php 

    class Carro {
        private $nome;
        private $modelo;
        private $cor;
        private $ano;
        private $blindado;
        private $cavalos;

        function __construct($n, $m, $c, $a, $b, $cv)
        {
            $this -> setNome($n);
            $this -> setModelo($m);
            $this -> setCor($c);
            $this -> setAno($a);
            $this -> setBlindado($b);
            $this -> setCavalos($cv);
        }

        function setNome($n) {
            $this -> nome = $n;
        }

        function getNome() {
            return $this -> nome;
        }

        function setModelo($m) {
            $this -> modelo = $m;
        }

        function getModelo() {
            return $this -> modelo;
        }

        function setCor($c) {
            $this -> cor = $c;
        }

        function getCor() {
            return $this -> cor;
        }

        function setAno($a) {
            $this -> ano = $a;
        }

        function getAno() {
            return $this -> ano;
        }

        function setBlindado($b) {
            $this -> blindado = $b;
            
        }

        function getBlindado() {
            if ($this -> blindado) {
                return "blindado";
            }
            else {
                return "não blindado";
            }
        }

        function setCavalos($cv) {
            $this -> cavalos = $cv;
        }

        function getCavalos() {
            return $this -> cavalos;
        }
    }
