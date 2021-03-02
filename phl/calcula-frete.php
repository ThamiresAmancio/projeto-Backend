<?php


if(!isset($_GET["origem"]) 

    || !isset($_GET["destino"]) 
    || !isset($_GET["distancia"])
    || !isset($_GET["pedagios"])){
    
    //redirecionar o usuário para a tela index.php
    header("location:index.php");
}

$origem = $_GET["origem"];
$destino = $_GET["destino"];
$distancia = $_GET["distancia"];
$pedagios = $_GET["pedagios"];


$custoPedagio = $pedagios * 9.4;
$custoDistancia = $distancia * 6;
$custoTotal = $custoPedagio + $custoDistancia;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula de Frete</title>
    <link rel="stylesheet" href="../style-global.css">

</head>
<body>
    <!-- O valor do pedágio for maior que 100 , exibir em vermelho-->
    <?php
    if($custoPedagio > 100){
      echo "<h1 style='color: red'>Valor dos pedágios: R$ <em> $custoPedagio </em></h1>";
    }else{
      echo "<h1>Valor dos pedágios: R$ <em> $custoPedagio </em></h1>";
    }
  ?>
  <h1>A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ <em><?= number_format($custoTotal, 2, ",", ".") ?></em></h1>
</body>
</html>