<?php
 if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit();
}

$nomeCoiso= $_POST['nomeCoiso'];
$tipoCoiso= $_POST['tipoCoiso'];
$corDoCoiso= $_POST['corDoCoiso'];


$ler= fopen('../src/coisos.csv','a');
fputcsv($ler, array($_POST['nomeCoiso'],$_POST['tipoCoiso'],$_POST['corDoCoiso']));
fclose($ler);
?>