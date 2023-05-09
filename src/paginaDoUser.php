
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
    <h2>Bem Vindo a pagina principal!</h2>
    <div>
        <button onclick="window.location.href= './cadastroDoProduto.php'">Cadastre um produto</button><br>
        <button onclick="window.location.href= './verProduto.php'">Veja os produtos</button><br>
        <button onclick="window.location.href='./sair.php'">Encerrar sessão</button><br>
    </div>
</body>
</html>