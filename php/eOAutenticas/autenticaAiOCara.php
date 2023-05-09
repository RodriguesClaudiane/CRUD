<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit();
    } 

$email = $_POST['email'];
$senha = $_POST['senha'];

$meDe = fopen('../../src/user.csv','r');
while(($linha = fgetcsv($meDe)) !== false){
    if($linha[2] == $email && $linha[3] == $senha){
        session_start();
        $_SESSION['verifiqueido'] = true;
        header('location: /src/paginaDoUser.php');
        exit();
    }
}
echo "temAnguNesseCaroco";

?>