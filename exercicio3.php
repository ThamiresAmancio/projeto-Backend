<?php
function valorInvertido (array $vetor){
    $vetorInvertido = [];

    for($i = (count($vetor) - 1 ); $i>= 0 ; $i -- ){
        $vetorInvertido[]= $vetor[$i];
    }

    return $vetorInvertido;
}

$vetorQualquer = ["Olá", 1,2, "Trinta"];

$vetorInvertido = valorInvertido($vetorQualquer);

print_r($vetorInvertido);

?>