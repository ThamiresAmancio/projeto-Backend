<?php

function notas ($notas){
    $soma = 0 ;
    foreach($notas as $alunos){

        $soma += $alunos;
}
$media = $soma / count($notas);
return $media;

}



$notas =[10,30,50,60,80];
$mediaCalculada = notas($notas);
echo "Média:" . number_format($mediaCalculada);
?>
