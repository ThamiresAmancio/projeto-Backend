<?php


/**
 * CRUD
 * create = criação
 * read = consulta
 * Update = atualizaçaõ
 * Delete = deleção
 */



//importa um arquivo para dentro dessa página
//todas as variaveis e funçoes ficam disponiveis

include("./database/conexao.php");

$sql = " SELECT * FROM tbl_tasks ";

$resultado = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
    <script> setTimeout(()=>{
        document.querySelector("mensagem").style.display = "none";

    },4000);
    </script>
</head>

<body>

    <div class="content">
    <?php
       if(isset($_GET["mensagem"])){
        ?> 
            <div class="mensagem"
                <?=
                 $_GET["tipoMensagem"] == "sucesso" ? "style='background-color: #00660099;'" : "" 
                ?>
            >
                <?=$_GET["mensagem"]?>
            </div>
        <?php
        }
        ?>
        <h1>Lista de Tarefas</h1>
        <form method="POST" action="taskActions.php">
            <input  type="hidden" name="acao" value="inserir"/>
            <div class="input-group">
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
        <hr />
        <div class="tarefas">
            <?php
            while ($tarefa = mysqli_fetch_array($resultado)) {
            ?>
            
                <div class="tarefa" >
                    <?= $tarefa["descricao"] ?>
                    <form id="form-editar"  method="GET" action="editarTarefa.php">
                        <input  type="hidden" name="tarefaId" value="<?=$tarefa["id"]?>"/>
                            <button>&#128393;</button>
                    </form>
                    <form method="POST" action="taskActions.php">
                        <input  type="hidden" name="acao" value="deletar"/>
                        <input  type="hidden" name="tarefaId" value="<?=$tarefa["id"]?>"/>
                        <button>&#128465;</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>