<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit();
    } 

$email = $_POST('email');
$senha = $_POST('senha');

$meDe = fopen('../../src/user.csv','r');
while(($linha = fgetcsv($meDe)) !== false){
    if($email == $linha[2] && $senha == $linha[3]){
        session_start();
        $_SESSION['verifiqueido'] = true;
        header('location: ../../src/paginaDoUser.php');
        exit();
    }
}
echo "temAnguNesseCaroco";

?>