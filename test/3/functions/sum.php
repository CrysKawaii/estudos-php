<?php 
    function somar(...$n) {
        $total = func_num_args();
        $resultado = 0;
        for ($i = 0; $i < $total; $i++) {
            $resultado += $n[$i];
        }

        return $resultado;
    }

    function dividir($n1, $n2) {
        return $n1 / $n2;
    }

    function multiplicar(...$n) {
        $total = func_num_args();
        $resultado = 1;
        for ($i = 0; $i < $total; $i++) {
            $resultado *= $n[$i];
        }
        
        return $resultado;
    }
?>