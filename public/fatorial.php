<?php 
    function fatorial($n){
        if($n == 0){
            return 1;
        }else{
            return $n * fatorial($n-1);
        }
    }
    echo 'o fatorial de 5 é ' . fatorial(5);

    function fatorial_for($n){
        $resultado = 1;
        for($i = 1;$i <= $n; $i++){
            $resultado *= $i;
            
        }
        return $resultado;
    }
    echo 'o fatorial de 5 é ' . fatorial_for(5);
?>