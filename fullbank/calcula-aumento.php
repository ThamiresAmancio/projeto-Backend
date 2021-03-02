<?php


if(!isset($_GET["nome"]) 

    || !isset($_GET["salario"])){
    header("location:index.php");
}

$nome = $_GET["nome"];
$salario = $_GET["salario"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o aumento</title>
    <link rel="stylesheet" href="../style-global.css">

</head>
<body>
    
    <?php
         
         if($salario > 5.000){      
             $salario = $salario * 0.1 + $salario;
         }
         else{
             $salario = $salario * 0.2 + $salario;
         }

         echo "<h1> O $nome passará a ganhar R$ $salario</h1>"
  ?>
</body>
</html>