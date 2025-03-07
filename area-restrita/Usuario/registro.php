<?php

include('../../dao/conexao.php');
/*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
      $id_usuario = $_POST['id_usuario'];
      $querySelect = "SELECT * FROM tbuser  WHERE idUsuario = $id_usuario";
      $resultado = $conexao->query($querySelect);
      $usuario = $resultado->fetch();
      $id_usuario = $usuario["idUsuario"];
      $nome_usuario = $usuario["nome"];
      $email_usuario = $usuario["email"];
      $cpf_usuario = $usuario["cpf"];
      $rg_usuario = $usuario["rg"];
      $senha_usuario = $usuario["senha"];
      $foto_usuario1 = $usuario["imgUser"];
    }else{
      $id_usuario = "";
      $nome_usuario = "";
      $cpf_usuario = "";
      $rg_usuario = "";
      $email_usuario = "";
      $senha_usuario = "";
      $foto_usuario1 = "";
    }



?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Escola Virtual - Registro</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('../../Componentes/cabecalho.php');
    ?>
  <div class="container-fluid " style="height: 90%;">
    <div class="row h-100">
      <?php
          include('../../Componentes/menu.php');
        ?>
      <div class="col-md-10  p-4">
        <div class="card">
          <form method="post" action="salvar.php" enctype="multipart/form-data">
            <div class="card-header">
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
            </div>
            <div class="card-body row " style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <img id="preview" src="../../fotos/usuarios/<?=$foto_usuario1!="" ? $foto_usuario1 : 'perfil.png';?>"
                    alt="..." class=" w-75"  >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="recipient-name" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" value="<?=$nome_usuario?>">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">CPF:</label>
                    <input oninput="maskCPF(this)" type="text" class="form-control" name="cpf" maxLength="11"
                      value="<?=$cpf_usuario?>">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">RG:</label>
                    <input oninput="maskRG(this)" type="text" class="form-control" name="rg" maxLength="9"
                      value="<?=$rg_usuario?>">
                  </div>
                </div>
                <div class="row  ">
                  <div class="col-md-9">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="50" value="<?=$email_usuario?>">
                  </div>
                  <div class="col-md-3">
                    <label for="recipient-name" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" maxlength="8" value="<?=$senha_usuario?>">
                  </div>
                </div>
                <div class="col-md-3 mt-5">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
                <input type="text" id="foto_usuario" name="foto_usuario" value="<?=$foto_usuario1?>">

              </div>
              <div class=" text-end p-3">
                <input type="text" id="id_usuario" name="id_usuario" value="<?=$id_usuario?>">
                <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                <input type="submit" class=" btn btn-success" value="Salvar">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src='../../js/personalizar.js'></script>

</body>

</html>