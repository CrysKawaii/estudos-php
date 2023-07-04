<?php 

    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        function __construct()
        {
            $this -> saldo = 0;
            $this -> status = false;
            echo '<p>Conta criada com sucesso!</p>';
        }

        function abrirConta($tp) {
            $this -> setStatus(true);
            $this -> setTipo($tp);
        }

        function fecharConta() {
            if ($this -> saldo != 0) {
                echo '<p>Impossível fechar conta, ainda tem dinheiro ou você está com saldo negativo</p>';
            }
            else {
                $this -> setStatus(false);
                echo "<p>Conta de {$this -> getDono()} fechada com sucesso!</p>";
            }
        }

        function depositar($quantia) {
            if ($this -> getStatus()) {
                $this -> saldo += $quantia;
                echo "<p>Depósito de $quantia feito na conta de {$this -> getDono()}</p>";
            }
            else {
                echo 'Conta fechada, impossível depositar';
            }
            
        }

        function sacar($quantia) {
            if ($this -> getStatus() && $this -> saldo != 0) {
                if ($this -> saldo >= $quantia) {
                    $this -> saldo -= $quantia;
                    echo "<p>Saque de R\$$quantia autorizado em nome de {$this -> getDono()}</p>";
                }
                else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                }
            }
            else {
                echo 'Conta fechada ou dinheiro insuficiente';
            }
        }

        function pagaMensal() {
            $valor = 0;
            if ($this -> tipo == 'cc') {
                $valor = 12;
            }
            else {
                $valor = 20;
            }

            if ($this -> getStatus()) {
                if ($this -> saldo > $valor) {
                    $this -> saldo -= $valor;
                    echo "<p>Mensalidade de R\$$valor no nome de {$this -> getDono()}, paga com sucesso!</p>";
                }
                else {
                    echo 'Sem dinheiro suficiente';
                }
            }
            else {
                echo 'Conta fechada';
            }

        }

        function setNumConta($nc) {
            $this -> numConta = $nc;
        }

        function getNumConta() {
            return $this -> numConta;
        }

        function setTipo($tp) {
            $this -> tipo = $tp;
            if ($tp == 'cc') {
                $this -> saldo = 50;
            }
            else {
                $this -> saldo = 150;
            }
        }

        function getTipo() {
            return $this -> tipo;
        }

        function setDono($d) {
            $this -> dono = $d;
        }

        function getDono() {
            return $this -> dono;
        }

        function setSaldo($din) {
            $this -> saldo = $din;
        }

        function getSaldo() {
            return $this -> saldo;
        }

        function setStatus($st) {
            $this -> status = $st;
        }

        function getStatus() {
            if ($this -> status) {
                return 'aberta';
            }
            else {
                return 'fechada';
            }
        }
    }