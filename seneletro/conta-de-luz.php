<?php

    if(!isset($_GET["nomeCompleto"]) 
    || !isset($_GET["endereco"]) 
    || !isset($_GET["consumo"])){
        header("location:index.php");
    }


    $nomeCompleto =$_GET["nomeCompleto"];
    $endereco = $_GET["endereco"];
    $consumo = $_GET["consumo"];


    $consumoMaior = $consumo * 0.42;
    $consumoMenor = $consumo * 0.32;
    $valorTotal = $consumoMaior + $consumoMenor;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de luz</title>
    <link rel="stylesheet" href="../style-global.css">
</head>
<body>
    <?php

    echo "<h1> Conta de Luz de <em>$nomeCompleto</em></h1>";
    echo "<h1>$endereco</h1>";

    if($consumoMaior > 120){
        echo "<h1 style='color: red'>  $consumo Kwh";
    }else{
        echo "<h1 style='color: blue'> $consumo Kwh";
    }

    if($valorTotal > 120 ){
        echo "<h1> $consumoMaior </h1>";
    }else{
        echo "<h1> $consumoMenor</h1>";
        }
        echo "<h1>Valor a pagar: R$ $valorTotal </h1>";
        echo "<h1>Obrigada por economizar!!!</h1>";
    ?>
</body>
</html>