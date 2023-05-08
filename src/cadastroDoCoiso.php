<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claus</title>
</head>
<body>
    <div>
        <form id="formDoCoiso" action="/php/adicionarOCoiso.php" method="POST">
            <label>
                <input id="nomeDo" type= "text" name="nomeCoiso" placeholder="digite aqui nome do seu coiso" required>
            </label><br>
            <label>
                <input id="tipoDo" type="text" name="tipoCoiso" placeholder="descreva o seu coiso" required>
            </label><br>
            <label>
                <input id="corDo" type="text" name="corDoCoiso" placeholder="digite a cor do seu coiso" required>
            </label>
            <button type="submit">sub meter a informação</button>
            <button onclick="window.location.href='/vejaSeusCoiso.php'">Ver seus coiso</button>
        </form>
        <script defer src="/script/verifiqueOCoiso.js"></script>
    </div>
    </body>
</html>