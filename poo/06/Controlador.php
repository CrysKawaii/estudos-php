<?php 

    interface Controlador 
    {
        function ligar();
        function desligar();
        function abrirMenu();
        function fecharMenu();
        function maisVolume();
        function menosVolume();
        function ligarMudo();
        function desligarMudo();
        function play();
        function pause();
    }
