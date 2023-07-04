<?php 

    abstract class Animal
    {
        protected $peso;
        protected $idade;
        protected $membro;
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        protected function setPeso($p)
        {
            $this -> peso = $p;
        }

        protected function setIdade($i)
        {
            $this -> idade = $i;
        }

        protected function setMembro($m)
        {
            $this -> membro;
        }

        protected function getPeso()
        {
            return $this -> peso;
        }

        protected function getIdade()
        {
            return $this -> idade;
        }

        protected function getMembro()
        {
            return $this -> membro;
        }
    }

?>