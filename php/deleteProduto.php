<?php

$nome = $_GET['nome'];
$passageiro = tempnam('.','');

$leia = fopen('../src/produto.csv','r');
$naoSeja = fopen($passageiro,'w');
while(($linha =fgetcsv($leia)) !== false){
    if($linha[0] != $nome){
        fputcsv($naoSeja,$linha);
    }
}
$leia = fopen('../src/produto.csv','w');
$naoSeja = fopen($passageiro,'r');
while(($linha =fgetcsv($naoSeja)) !== false){
    fputcsv($leia,$linha);
}

unlink($passageiro);
header('location: /src/verProduto.php')
 ?>