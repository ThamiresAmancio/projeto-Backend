<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de Luz</title>
    <link rel="stylesheet" href="../style-global.css">
</head>
<body>
    <form method="GET" action="conta-de-luz.php">
        <div class="input-group">
            <h1>Valor da Conta de Luz</h1>
            <label for="nomeCompleto">Nome Completo: </label>
            <input type="text" id="nomeCompleto" name="nomeCompleto"/>
        </div>
        <div class="input-group">
            <label for="endereco">Endereço: </label>
            <input type="text" id="endereco" name="endereco"/>
        </div>
        <div class="input-group">
            <label for="consumo">consumo : </label>
            <input type="text" id="consumo" name="consumo"/>
        </div>

        <button>Enviar</button>
        <button type="reset">Limpar</button>        
    </form>
</body>
</html>