<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullbank Funcionários</title>
    <link rel="stylesheet" href="../style-global.css">

</head>
<body>
    <form method="GET" action="calcula-aumento.php">
        <div class="input-group">
            <h1>Aumento dos Funcionários</h1>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o seu Nome"/>
        </div>
        <div class="input-group">
             <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario" placeholder="Digite o seu Salário Atual"/>

        </div>
        <button>Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>