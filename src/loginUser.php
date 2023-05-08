<?php
   session_start();
   $_SESSION['verifiqueido'] = true;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Claus</title>
</head>
<body>
<div>
<h1>Iniciar Sessão</h1>
<form id="loginDoUser" method="POST">
<label>
Email:<br>
<input id="email" type="email" name="email" placeholder="Digite seu email" required>
</label><br>
<label>
Senha:<br>
<input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
</label><br><br>
<button type="submit">Entrar</button><br><br>
<button onclick="window.location.href='/'">Voltar</button>
</form>
</div>
<script src defer="/script/autenticaAiOCara.js"></script>
</body>
</html>