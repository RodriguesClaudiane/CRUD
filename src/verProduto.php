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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Claus</title>
</head>
<body>
	<div>
	<h2>Aqui estão seus Produtos!</h2>
		<table>
		<tr>
			<th>Nome</th>
			<th>Marca</th>
			<th>Categoria</th>
			<th>Preço</th>
		</tr>
		<?php $leia = fopen('./produto.csv','r')?>
		<?php while (($laine = fgetcsv($leia)) !== false): ?>
			<tr>
			<td><?= $laine[0] ?></td>
			<td><?= $laine[1] ?></td>
			<td><?= $laine[2] ?></td>
			<td><?= $laine[3] ?></td>
			<td>
				<form action="/php/deleteProduto.php" method="GET">
				<input type="hidden" name="nome" value="<?= $laine[0] ?>">
				<button>Remover Produto</button>
			</form>
		    </td>
			<td>
				<form action="/php/editProduto.php" method="GET">
					<input type="hidden" name="nome" value="<?= $laine[0] ?>">
					<button>Editar Informações</button>
				</form>
			</td>
		</tr>
		<?php endwhile ?>
	</table>
	<button onclick="window.location.href='./paginaDoUser.php'">Voltar</button>
</div>
</body>
</html>