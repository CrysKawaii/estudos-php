<?php 

    require 'Publicacao.php';
    require_once 'Pessoa.php';

    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        function __construct($ti, $au, $totp, $lei)
        {
            $this -> setTitulo($ti);
            $this -> setAutor($au);
            $this -> setTotPaginas($totp);
            $this -> setPagAtual(0);
            $this -> setAberto(false);
            $this -> setLeitor($lei -> getNome());
        }

        private function setTitulo($t)
        {
            $this -> titulo = $t;
        }

        private function setAutor($a)
        {
            $this -> autor = $a;
        }

        private function setTotPaginas($tp)
        {
            $this -> totPaginas = $tp;
        }

        private function setPagAtual($pa)
        {
            $this -> pagAtual = $pa;
        }

        private function setAberto($ab)
        {
            $this -> aberto = $ab;
        }

        private function setLeitor($l)
        {
            $this -> leitor = $l;
        }

        private function getTitulo()
        {
            return $this -> titulo;
        }

        private function getAutor()
        {
            return $this -> autor;
        }

        private function getTotPaginas()
        {
            return $this -> totPaginas;
        }

        private function getPagAtual()
        {
            return $this -> pagAtual;
        }

        private function getAberto()
        {
            // if ($this -> aberto == true)
            // {
            //     return 'sim';
            // }
            // else
            // {
            //     return 'não';
            // }
            return $this -> aberto;
        }

        private function getLeitor()
        {
            return $this -> leitor;
        }

        function detalhes()
        {   
            echo '/////////////////////////////////////////////////////</br>';
            echo "{$this -> getTitulo()} escrito por {$this -> getAutor()}</br>";
            echo "Páginas: {$this -> getTotPaginas()}, atual {$this -> getPagAtual()}</br>";
            echo "Sendo lido por {$this -> getLeitor()}</br>";
            echo '/////////////////////////////////////////////////////</br>';

        }

        function abrir()
        {
            if ($this -> getAberto())
            {
                echo 'Livro já aberto</br>';
            } 
            else
            {
                $this -> setAberto(true);
                echo 'Livro aberto</br>';
            }
        }

        function fechar()
        {
            if ($this -> getAberto())
            {
                $this -> setAberto(false);
                echo 'Livro fechado</br>';
            }
            else
            {
                echo 'Livro já está fechado</br>';
            }
        }

        function folhear($p)
        {
            $this -> setPagAtual($p);
        }

        function avancarPag()
        {
            if ($this -> getAberto())
            {
                $this -> setPagAtual($this -> getPagAtual() + 1);
            }
            else
            {
                echo 'O livro está fechado!</br>';
            }
        }
        

        function voltarPag()
        {
            if ($this -> getAberto())
            {
                $this -> setPagAtual($this -> getPagAtual() - 1);
            }
            else if ($this -> getPagAtual() == 0)
            {
                echo 'Não tem pra onde voltar mais!</br>';
            }

            else
            {
                echo 'O livro não está aberto!</br>';
            }
        }
    }