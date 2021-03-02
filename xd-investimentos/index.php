<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="../style-global.css">
</head>
<body>
    <form method="GET" action="conversao.php">
        <h1>Montante em Real</h1>
        <div class="input-group-radio">

            <label for="real">Real </label>
            <input type="number" id="real" name="valorTotal"/>

            <label for="dolar"> Dólar</label>
            <input type="radio" id="dolar" name="converter" value=""/>

            <label for="euro"> Euro</label>
            <input type="radio" id="euro" name="converter" value=""/>

            
        </div>
        <button>Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>