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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="POST" action="exercicio5cidades.php">
        <label for="nome">Nome:</label>
        <input type="text" id="name" name="nome"/>

        <label for="cidades">As cidades são:</label>
        <select id="cidades" autofocus  name="cidades">
        <option value="">SELECIONE</option>
        <?php
            foreach($listaCidades as $chave => $cidades){
        ?>
                  <option value="<?= $chave ?>"><?= $cidades ?></option>
        <?php
            }
        ?>
        </select>
            <button>Enviar</button>
    </form>
</body>
</html>