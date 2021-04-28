<?php

require("./database/conexao.php");

//Receber o id tarefa a ser editada
$tarefaId = $_GET["tarefaId"];
//select no banco da tarefa a ser editada
//SELECT * FROM TBL_TASKS WHERE ID = $TAREFAID

$sqlSelect = " SELECT * FROM tbl_tasks WHERE id =$tarefaId";
//EXECUTAR A CONSULTA 
$resultado = mysqli_query($conexao, $sqlSelect);

$tarefa = mysqli_fetch_array($resultado);

//EXTRAIR a linha da consulta (mysql_fetch_array)

 if(!$tarefa){
     die("tarefa não encontrada.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>
<body>
    <div class="content">
        <h1>Editar Tarefas</h1>
        <form method="POST" action="taskActions.php">
            <input  type="hidden" name="acao" value="editar"/>
            <input type="hidden" name="tarefaId" value="<?=$tarefa["id"]?>"/>
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" value="<?=$tarefa["descricao"]?>" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required /> 
            </div>
            <button>Editar</button>
        </form>
    </div>
</body>
</html>

