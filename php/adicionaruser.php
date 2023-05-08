<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit();
    }

$nome= $_POST['nome'];
$username= $_POST['username'];
$email= $_POST['email'];
$senha= $_POST['senha'];


$ler= fopen('../src/user.csv','a');
fputcsv($ler, array($_POST['nome'],$_POST['username'],$_POST['email'],$_POST['senha']));
fclose($ler);

header('location:../src/loginUser.php');
?>