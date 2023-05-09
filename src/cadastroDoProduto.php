
<?php
session_start();
    if( !isset($_SESSION['verifiqueido']) || !$_SESSION['verifiqueido']){
        header('location: /src/loginUser.php');
        exit();
    } 
?>
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
        <form id="formDoCoiso" action="/php/adicionarProduto.php" method="POST">
            <label>
                nome:
                <input id="nome" type= "text" name="nome" placeholder="Digite o nome do produto" required>
            </label><br>
            <label>
                marca:
                <input id="marca" type="text" name="marca" placeholder="Digite a marca do produto" required>
            </label><br>
            <label>
                categoria:
                <input id="categoria" type="text" name="categoria" placeholder="digite a categoria do produto" required>
            </label><br>
            <label>
                preço:
                <input id="preco" type="number" step="0.01" name="preco" placeholder="Digite o valor do produto" required>
            </label><br><br>
            <button type="submit">sub meter a informação</button><br>
            <button onclick="window.location.href='/verProduto.php'">Ver produtos</button><br>
            <button onclick="window.location.href='./paginaDoUser.php'">Voltar</button>
        </form>
        <script defer src="/script/verificarProduto.js"></script>
    </div>
    </body>
</html>