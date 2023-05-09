<?php
session_start();
    if( !isset($_SESSION['verifiqueido']) || !$_SESSION['verifiqueido']){
        header('location: /src/loginUser.php');
        exit();
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./updateProduto.php" method= "POST">
    <?php 
    $leia= fopen("../src/produto.csv","r"); ?>
    <?php while(($linha = fgetcsv($leia)) !== false):?>
    <?php if($linha[0] == $_GET['nome']):?>
        <input type="hidden" name="nome" value="<?=$linha[0]?>">
        <input type="text" name="marca" placeholder="marca" value="<?=$linha[1]?>">
        <input type="text" name="categoria" placeholder="categoria" value="<?=$linha[2]?>">
        <input type="number" step="0.01" name="preco" placeholder="Preço" value="<?=$linha[3]?>">
        <button>editar</button>
        <?php endif ?>
        <?php endwhile ?>
    </form>
    <button onclick="window.location.href='/src/verProduto.php'">Voltar</button>
</body>
</html>