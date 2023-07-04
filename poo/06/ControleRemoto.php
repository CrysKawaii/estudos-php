<?php 
    
    require 'Controlador.php';

    class ControleRemoto implements Controlador 
    {
        // Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos
        function __construct()
        {
            $this -> volume = 50;
            $this -> ligado = false;
            $this -> tocando = false;
        }

        private function setVolume($v) 
        {
            $this -> volume = $v;
        }

        private function setLigado($l) 
        {
            $this -> ligado = $l;
        }

        private function setTocando($t) 
        {
            $this -> tocando = $t;
        }

        private function getVolume() 
        {
            return $this -> volume;
        }

        private function getLigado() 
        {
            return $this -> ligado;
        }

        private function getTocando() 
        {
            return $this -> tocando;
        }

        function ligar() 
        {   
            echo 'Controle ligado!</br>';
            $this -> setLigado(true);
        }

        function desligar() 
        {
            echo 'Controle desligado!</br>';
            $this -> setLigado(false);
        }

        function abrirMenu()
        {
            echo "Volume: {$this -> getVolume()} ";
            
            for ($i = 0; $i <= $this -> getVolume(); $i += 10) {
                echo '|';
            }
            echo "</br>";
        }

        function fecharMenu()
        {
            echo "Fechando menu...</br>";
        }

        function maisVolume()
        {
            if ($this -> getLigado())
            {
                $this -> setVolume($this -> getVolume() + 5);
            }
        }

        function menosVolume()
        {
            if ($this -> getLigado())
            {
                $this -> setVolume($this -> getVolume() - 5);
            }
        }

        function ligarMudo()
        {
            if ($this -> getVolume() > 0)
            {
                echo 'Mudo ativado!</br>';
                $this -> setVolume(0);
            }
        }

        function desligarMudo()
        {
            if ($this -> getVolume() == 0) 
            {
                echo 'Mudo desativado!</br>';
                $this -> setVolume(50);
            }
        }

        function play()
        {
            if ($this -> getLigado() &&! $this -> getTocando())
            {
                $this -> setTocando(true);
            }
        }

        function pause()
        {
            if ($this -> getLigado() && $this -> getTocando())
            {
                $this -> setTocando(false);
            }
        }
    }
