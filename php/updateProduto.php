<?php
$nome = $_POST['nome'];
$deita = array($_POST['nome'],$_POST['marca'],$_POST['categoria'],$_POST['preco']);

$passageiro = tempnam('.','');

$naoSeja = fopen($passageiro,'w');
$leia = fopen('../src/produto.csv','r');
while(($linha = fgetcsv($leia)) !== false){
    if($linha[0] == $nome){
        fputcsv($naoSeja, $deita);
        continue;
    }
    fputcsv($naoSeja, $linha);
}
fclose($naoSeja);
fclose($leia);
rename($passageiro,'../src/produto.csv');
header('location: /src/verProduto.php');
?>