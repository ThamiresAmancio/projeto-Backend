<?php

function vetor ($numeroPrimeiro){
    for($i = 2; $i < $numeroPrimeiro; $i ++){

        $resultado = $numeroPrimeiro/$i;

        if($resultado == 0){
            return "NÃO É PRIMO";
        }
    }

    return "É PRIMO";
 
}

echo vetor(5);


?>