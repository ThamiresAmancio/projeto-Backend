<?php

function verificarNome ($vetor, $nomeEspecifico){

    foreach($vetor as $nome){
        if($nome == $nomeEspecifico){
            return "true";
        }
    }

    return "false";
}

$nomes = ["Alana","Alice","Chole"];

echo verificarNome ($nomes,"Alana");

?>