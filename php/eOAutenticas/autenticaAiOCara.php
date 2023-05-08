<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit();
    }
session_start(); 
$email = $_POST('email');
$senha = $_POST('senha');

$meDe = fopen('../../src/user.csv','r');
while(($linha = fgetcsv($meDe)) !== false){
    if($email == $linha[2] && $senha == $linha[3]){
        $_SESSION['verifiqueido'] = true;
        header('location: /src/paginaDoUser.php');
        exit();
    }
}
echo "temAnguNesseCaroco";

?>