<?php

$listaCidades = [
    1 =>"Jandira",
    2=>"Itapevi",
    3=> "Barueri",
    4=>"Osasco",
    5=>"Cotia",
    6=> "Santana de Parnaíba",
    7=>"Carapicuíba",
    8=> "São Paulo",
];


$cidadeEscolhida = $_POST["cidades"];
$nome = $_POST["nome"];

echo $cidadeEscolhida;


echo " Olá  $nome, de " .$listaCidades[$cidadeEscolhida],   " seja bem vindo."



?>