<?php
 if($_SERVER['REQUEST_METHOD'] != 'POST'){
	exit();
}

$nomeCoiso = $_POST['nomeCoiso'];

$ler = fopen('../../src/coisos.csv','r');
while( ($linha = fgetcsv($ler)) !== false){
	if($linha[0] == $nomeCoiso){
		echo 'essaPorraJaExiste';
		exit();
	}
} 
?>