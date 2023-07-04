<?php 

    require_once 'Lutador.php';

    class Luta
    {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        function setDesafiado($da)
        {
            $this -> desafiado = $da;
        }

        function setDesafiante($de)
        {
            $this -> desafiante = $de;
        }

        function setRounds($r)
        {
            $this -> rounds = $r;
        }

        function setAprovada($a)
        {
            $this -> aprovada = $a;
        }

        function getDesafiado()
        {
            return $this -> desafiado;
        }

        function getDesafiante()
        {
            return $this -> desafiante;
        }

        function getRounds()
        {
            return $this -> rounds;
        }

        function getAprovada()
        {
            return $this -> aprovada;
        }

        function marcarLuta($l1, $l2)
        {
            if ($l1 -> getCategoria() == $l2 -> getCategoria())
            {
                if ($l1 != $l2)
                {
                    $this -> setAprovada(true);
                    $this -> setDesafiado($l1);
                    $this -> setDesafiante($l2);
                }
            }
            else
            {
                $this -> setAprovada(false);
            }
        }

        function lutar()
        {
            if ($this -> getAprovada())
            {
                $this -> getDesafiado() -> apresentar();
                $this -> getDesafiante() -> apresentar();
                $resultado = rand(0, 2);
                switch ($resultado)
                {
                    case 0:
                        echo "~~~~ RESULTADO ~~~~</br>";
                        echo "Empatou!</br>";
                        $this -> getDesafiado() -> empatarLuta();
                        $this -> getDesafiante() -> empatarLuta();
                        break;
                    
                    case 1:
                        echo "~~~~ RESULTADO ~~~~</br>";
                        echo "O {$this -> getDesafiado() -> getNome()} ganhou!</br>";
                        $this -> getDesafiado() -> ganharLuta();
                        $this -> getDesafiante() -> perderLuta();

                        break;

                    case 2:
                        echo "~~~~ RESULTADO ~~~~</br>";
                        echo "O {$this -> getDesafiante() -> getNome()} ganhou!</br>";
                        $this -> getDesafiado() -> perderLuta();
                        $this -> getDesafiante() -> ganharLuta();
                        break;
                }
            }
            else
            {
                echo "Luta não vai rolar!";
            }
        }
    }