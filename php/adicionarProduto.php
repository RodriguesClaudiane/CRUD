<?php
 if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit();
}

$nome= $_POST['nome'];
$marca= $_POST['marca'];
$categoria= $_POST['categoria'];
$preco= $_POST['preco'];

$ler= fopen('../src/produto.csv','a');
fputcsv($ler, array($_POST['nome'],$_POST['marca'],$_POST['categoria'],$_POST['preco']));
fclose($ler);

header('location: /src/verProduto.php')
?>