<?php
include('../../dao/conexao.php');
$querySelect = "SELECT * FROM tbgaleria";
$resultado = $conexao->query($querySelect);
$joia =$resultado->fetchALL();
$n_joia = count($joia);


$querySelect = "SELECT * FROM tbuser";
$resultado = $conexao->query($querySelect);
$usuario =$resultado->fetchALL();
$n_usuario = count($usuario);


$querySelect = "SELECT * FROM tbdepoimento WHERE tipo = 'Reclamação'";
$resultado = $conexao->query($querySelect);
$depoimentoRecla =$resultado->fetchALL();
$n_depoRecla = count($depoimentoRecla);


$querySelect = "SELECT * FROM tbdepoimento WHERE tipo = 'Elogio'";
$resultado = $conexao->query($querySelect);
$depoiElogio =$resultado->fetchALL();
$n_depoElogio = count($depoiElogio);

$querySelect = "SELECT * FROM email";
$resultado = $conexao->query($querySelect);
$email =$resultado->fetchALL();
$n_emails = count($email);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Document</title>
</head>


<body style="justify-content: center; align-items: center; height: 100vh ">
 <!-- cabeçalho -->
  <?php
  include ("../../Componentes/cabecalho.php")
  ?>
  <div class="container-fluid " style="height: 90%;">
    <div class="row h-100">
 <!-- depoimento -->
 <?php
  include ("../../Componentes/menu.php")
  ?>
    
    <div  class="col-md-10  p-4">
        <div class="qntjoia">
            <h3 class="count"><?=$n_joia?></h3>
            <h4>Joias Cadastradas</h4>
        </div>
        <div class="qntusuarios">
            <h3 class="count"><?=$n_usuario?></h3>
            <h4>Usuarios Cadastradas</h4>
        </div>
        <div class="qntdepoimentoRecla">
        <h3 class="count"><?=$n_depoRecla?></h3>
            <h4>Depoi Reclamação</h4>
        </div>
        <div class="qntdepoimentoElo">
        <h3 class="count"><?=$n_depoElogio?></h3>
            <h4>Depoimento Elogio</h4>
        </div>
        <div class="qntemail">
        <h3 class="count"><?=$n_emails?></h3>
            <h4>Emails recebidos</h4>
        </div>
        
    </div>

  <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src='../../js/personalizar.js'></script>

</body>

</html>