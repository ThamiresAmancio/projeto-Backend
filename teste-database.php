<?php


///EM PHP, HOKKE EM DIA, TEMOS DUAS MANEIRAS MANIPULAR BD,

//MYSQLI E PDO

//CONECTANDO AO BANCO DE DADOS   

const HOST = "localhost";
const USER = "root";
const PASSWORD = "2607";
const DATABASE = "tasklist";


//Realiza a conexão com  Banco de Dados 
$conexao = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die (mysqli_error($conexao));


//declaramos a consolta a ser executada
$query = " select * from tbl_tasks ";


//executamos a consulta utilizando a conexão criada e recebemos o resultado
$resultado = mysqli_query($conexao, $query) or die (mysqli_error($conexao));

//tratando o erro na consulta 
if($resultado == false){
    echo mysqli_error($conexao);
}

// //trazendo a primeira linha
//  $linha1 = mysqli_fetch_array($resultado);

// //trazendo a segunda linha
//  $linha2 = mysqli_fetch_array($resultado);

// //trazendo a terceira linha
// $linha3 = mysqli_fetch_array($resultado);



// print_r($linha1);
// print_r($linha2);
// print_r($linha3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
            <?php
                while($linha =  mysqli_fetch_array($resultado)){
            ?>
        <tr>
            <td><?=$linha["id"]?></td>
            <td><?=$linha["descricao"]?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>