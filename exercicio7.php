

<?php

function vetor ($vetor){
    $valor1 = $vetor[0];
    $valor2 = $vetor[0];
    foreach ($vetor as $numerosVetores){
        if($numerosVetores > $valor1){
            
            $valor1 = $numerosVetores;
        }

        if($numerosVetores < $valor2){
            $valor2 = $numerosVetores;
        }
    }

    return [
    "maior" => $valor1,
     "menor" =>$valor2
    ];
}
    
 $vetorNovo = [26,7];


echo "<br/>";

print_r(vetor ($vetorNovo));

?>