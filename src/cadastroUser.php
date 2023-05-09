<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Claus</title>
</head>
<body>
<div>
<h1>Cadastro</h1>
<form id='formulario' action="/php/adicionarNovoUser.php" method="POST">
<label>
Nome:<br>
<input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
</label><br>
<label>
Escolha um Username:<br>
<input id="username" type="text" name="username" placeholder="Digite aqui o seu username" required>
</label><br>
<label>
Email:<br>
<input id="email" type="email" name="email" placeholder="Digite seu email" required>
</label><br>
<label>
Escolha uma senha:<br>
<input id="senha" type="password" name="senha" placeholder="Digite aqui sua senha" required>
</label><br><br>
<input type="submit" value="pronto">

</form>
<script defer src="/script/verificacaoNovoUser.js"></script>
</div>
	
</body>
</html>