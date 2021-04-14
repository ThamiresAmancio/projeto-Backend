<?php

    function somaInteiros(array $inteiros){
        $soma = 0;
        foreach($inteiros as $num){
            $soma += $num;
        }

        return $soma;
    }

    echo somaInteiros([10,4,5,20,50]);

    echo "<br/><br/>";

    echo somaInteiros([1200,2000,5000,2500,3000]);

?>