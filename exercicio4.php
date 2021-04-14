<?php
    function del($vetor, $elementoDeletado){
        foreach($vetor as $chave => $el){
            if($el == $elementoDeletado){
                unset($vetor[$chave]);


                return $vetor;
            }
        }



        return false;
    }


    $vetor = [20,30,50,80];

    $numero = 26;

 $novoVetor = del($vetor,$numero);

    print_r($novoVetor ? $novoVetor : "NÃO ENCONTRADO");
    

?>