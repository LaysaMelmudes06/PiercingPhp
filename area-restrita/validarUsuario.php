<?php
include('../dao/conexao.php');

$email_usuario = $_POST['email'];
$senha_usuario = $_POST['senha'];

$querySelect = "SELECT * FROM tbuser WHERE email = '$email_usuario' and senha = '$senha_usuario'";
$resultado = $conexao->query($querySelect);
$usuario = $resultado->fetchAll();
$n = count($usuario);

if($n == 1){
    session_start();
    $_SESSION['idUsuario'] = $usuario[0]['idUsuario'];
    $_SESSION['nome'] = $usuario[0]['nome'];
    $_SESSION['imgUser'] = $usuario[0]['imgUser'];
    $_SESSION['autenticado'] ='SIM';
    header('Location: ./Usuario/index.php');
}
else{
    header('Location: login.php?login=erro');
    $_SESSION['autenticado'] = "NAO";
}
    
?>



