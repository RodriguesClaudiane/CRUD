<?php
session_start();
    if( !isset($_SESSION['autentiqueido']) || !$_SESSION['autentiqueido']){
        header('location: /');
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
    <h2>Bem Vindo a sua pagina!</h2>
    <div>
        <button onClick="window.location.href= './cadastroDoCoiso.php'">Cadastre seu coiso</button>
        <button onclick="window.location.href= './vejaSeusCoiso.php'">Veja seus coisos</button>
    </div>
</body>
</html>