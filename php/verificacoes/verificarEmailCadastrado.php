<?php
 if($_SERVER['REQUEST_METHOD'] != 'POST'){
	exit();
}

$username = $_POST['username'];
$email = $_POST['email'];

$ler = fopen('../../src/user.csv','r');
while( ($linha = fgetcsv($ler)) !== false){
	if($linha[1] == $username || $linha[2] == $email){
		echo 'jaExiste';
		exit();
	}
} 
?>