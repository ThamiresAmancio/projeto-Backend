<?php

    if(!isset($_GET["dolar"])
    || !isset($_GET["euro"])){

      
    }

        $converterDolar =5.41;
        $converterEuro = 6.17;

        $valorTotal = $_GET["valorTotal"];

        if($_GET["converter"] == "euro"){
            $valorConvertido =  $valorTotal* $converterDolar;
        }
        else{
            $valorConvertido = $valorTotal * $converterEuro;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>
    
   <h1>Valor Total em <?= $_GET["converter"]?>: $ <?= $valorConvertido ?></h1>

   <h1>
       A cotação é
       <?php

            if($_GET["converter"] !== "euro"){
                echo $converterEuro;
            }
            else{
                echo $converterDolar;
            }

        ?>
   </h1>
</body>
</html>