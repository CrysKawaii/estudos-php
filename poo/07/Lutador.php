<?php 

    class Lutador
    {
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Métodos
        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
        {
            $this -> setNome($nome);
            $this -> setNacionnalidade($nacionalidade);
            $this -> setIdade($idade);
            $this -> setAltura($altura);
            $this -> setPeso($peso);
            $this -> setVitorias($vitorias);
            $this -> setDerrotas($derrotas);
            $this -> setEmpates($empates);
        }

        function setNome($no)
        {
            $this -> nome = $no;
        }

        function setNacionnalidade($na)
        {
            $this -> nacionalidade = $na;
        }

        function setIdade($i)
        {
            $this -> idade = $i;
        }

        function setAltura($a)
        {
            $this -> altura = $a;
        }

        function setPeso($p)
        {
            $this -> peso = $p;

            if ($p < 52.2)
            {
                $this -> setCategoria('inválido!');
            }
            else if ($p <= 70.3)
            {
                $this -> setCategoria('peso leve');
            }
            else if ($p <= 83.9)
            {
                $this -> setCategoria('peso médio');
            }
            else if ($p <= 120.2)
            {
                $this -> setCategoria('peso pesado');
            }
            else
            {
                $this -> setCategoria('inválido!');
            }

        }

        private function setCategoria($c)
        {
            $this -> categoria = $c;
        }

        function setVitorias($v)
        {
            $this -> vitorias = $v;
        }

        function setDerrotas($d)
        {
            $this -> derrotas = $d;
        }

        function setEmpates($e)
        {   
            $this -> empates = $e;
        }   

        function getNome()
        {
            return $this -> nome;
        }

        function getNacionalidade()
        {
            return $this -> nacionalidade;
        }

        function getIdade()
        {
            return $this -> idade;
        }

        function getAltura()
        {
            return $this -> altura;
        }

        function getPeso()
        {
            return $this -> peso;
        }

        function getCategoria()
        {
            return $this -> categoria;
        }

        function getVitorias()
        {   
            return $this -> vitorias;
        }

        function getDerrotas()
        {
            return $this -> derrotas;   
        }

        function getEmpates()
        {
            return $this -> empates;
        }
        
        function iterar()
        {
            foreach ($this as $key => $value)
            {
                echo "$key = $value</br>";
            }
        }

        function apresentar()
        {   
            echo "==== APRESENTAÇÃO ====</br>";
            echo "Lutador: {$this -> getNome()}</br>";
            echo "Origem: {$this -> getNacionalidade()}</br>";
            echo "{$this -> getIdade()} anos</br>";
            echo "Pesando: {$this -> getPeso()} quilos</br>";
            echo "Ganhou: {$this -> getVitorias()} vez(es)</br>";
            echo "Perdeu: {$this -> getDerrotas()} vez(es)</br>";
            echo "Empatou: {$this -> getEmpates()} vez(es)</br>";
        }

        function status()
        {   
            echo "==== STATUS ====</br>";
            echo "{$this -> getNome()}</br>";
            echo "É da categoria {$this -> getCategoria()}</br>";
            echo "{$this -> getVitorias()} vitórias</br>";
            echo "{$this -> getDerrotas()} derrotas</br>";
            echo "{$this -> getEmpates()} empates</br>";
        }
    
        function ganharLuta()
        {
            $this -> setVitorias($this -> getVitorias() + 1);
        }

        function perderLuta()
        {
            $this -> setDerrotas($this -> getDerrotas() + 1);
        }

        function empatarLuta()
        {
            $this -> setEmpates($this -> getEmpates() + 1);
        }
    }