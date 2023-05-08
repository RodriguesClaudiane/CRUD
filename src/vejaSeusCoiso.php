<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Claus</title>
</head>
<body>
	<div>
	<h2>Aqui estão seus coisos!</h2>
		<table>
		<tr>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Cor</th>
		</tr>
		<?php $leia = fopen('coiso.csv','r')?>
		<?php while (($laine = fgetcsv($leia)) !== false): ?>
			<tr>
			<td><?= $laine[0] ?></td>
			<td><?= $laine[1] ?></td>
			<td><?= $laine[2] ?></td>
		</tr>
		<?php endwhile ?>
	</table>
</div>
</body>
</html>