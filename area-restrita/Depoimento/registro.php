<?php

include('../../dao/conexao.php');
/*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
      $id_depoimento = $_POST['id_depoimento'];
      $querySelect = "SELECT * FROM tbdepoimento  WHERE idDepoimento = $id_depoimento";
      $resultado = $conexao->query($querySelect);
      $depoimento = $resultado->fetch();
      
      $id_depoimento = $depoimento["idDepoimento"];
      $tipo = $depoimento["tipo"];
      $autor = $depoimento["autor"];
      $depoimentos = $depoimento["depoimento"];
    }else{
      $id_depoimento ="";
      $tipo = "";
      $autor ="";
      $depoimentos ="";
    }
 
?>





<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> LBL Pratas - Registro</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <!-- cabeçalho -->
  <?php 
      include('../../Componentes/cabecalho.php');
    ?>
  <div class="container-fluid " style="height: 90%;">
    <div class="row h-100">
 <!-- menu -->
 <?php 
      include('../../Componentes/menu.php');
    ?>
      <div class="col-md-10  p-4">
        <div class="card">
          <form method="post" action="salvarDepoimento.php">
            <div class="card-header">
              <strong>INFORMAÇÕES DO DEPOIMENTO</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class=" col">
                  <label for="recipient-name" class="col-form-label">Tipo:</label>
                  <select class="form-select" name="tipo">
                    <option value="Elogio"  <?=$tipo=='Elogio'?'selected':''?> >Elogio</option>
                    <option value="Reclamação"  <?=$tipo=='Reclamação'?'selected':''?> >Reclamação</option>
                  </select>
                </div>
                <div class="col mb-3">
                  <label for="recipient-name" class="col-form-label">Autor:</label>
                  <input type="text" class="form-control" name="autor"  value="<?=$autor?>">
                </div>
              </div>
              <div class="col mb-3">
                <label for="recipient-name" class="col-form-label">Depoimento:</label>
                <input type="text" class="form-control" name="depoimento"  value="<?=$depoimentos?>">
              </div>
            </div>
            <div class=" text-end p-3">
              <input type="hidden" id="id_usuario" name="id_depoimento"   value="<?=$id_depoimento?>">
              <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
              <button type="submit" class=" btn btn-success"> Salvar </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>