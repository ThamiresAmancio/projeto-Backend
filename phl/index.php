<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
    <link rel="stylesheet" href="../style-global.css">
</head>
<body>
    <form method="GET" action="calcula-Frete.php">
        <h1>Calculo de Fretes</h1>
        <div class="input-group">
            <label for="origem">Cidade de Origem</label>
            <input type="text" id="origem" name="origem" required/>
        </div>

        <div class="input-group">
            <label for="destino">Cidade de Destino</label>
            <input type="text" id="destino" name="destino" required/>

        </div>

        <div class="input-group">
            <label for="distancia">Distância em KM</label>
            <input type="number" id="distancia" name="distancia" required/>

        </div>

        <div class="input-group">
            <label for="pedagios">Quantidades de Pedágio</label>
            <input type="number" id="pedagios" name="pedagios" required/>
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>