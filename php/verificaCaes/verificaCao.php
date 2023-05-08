<?php
$username = $_POST['username'];
$email = $_POST['email'];

$ler = fopen('../../src/user.csv','r');
while( ($linha = fgetcsv($ler)) !== false){
	if($linha[1] == $username || $linha[2] == $email){
		echo 'essaPorraJaExiste';
		exit();
	}
} 
?>