S<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit();
    } 

$email = $_POST['email'];
$senha = $_POST['senha'];

$ler = fopen('../../src/user.csv','r');
while(($linha = fgetcsv($ler)) !== false){
    if($linha[2] == $email && $linha[3] == $senha){
        session_start();
        $_SESSION['verifiqueido'] = true;
        header('location: /src/paginaDoUser.php');
    }
}
echo "algodeerradocertonaoesta";
header('location: /src/loginUser.php');

?>