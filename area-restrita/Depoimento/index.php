
<!doctype html>
<html lang="pt-br">

  <?php
  include ('../../dao/conexao.php');
  $querySelect = "SELECT * FROM  tbdepoimento";

  $resultado = $conexao->query($querySelect);

  $depoimento = $resultado->fetchAll();


  ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> LBL Pratas - Depoimento</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../../img/logo.png" />
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
      <div class="col-md-10  p-4">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de Depoimentos
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="registro.php"><i
                class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class=" row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="col-md-1">ID</th>
                <th class="col-md-2">Tipo</th>
                <th class="col-md-5">Autor</th>
                <th class="col-md-2">Depoimento</th>
                <th class="text-center col-md-1">Alterar</th>
                <th class="text-center col-md-1">Excluir</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($depoimento as $depoimento) { ?>
              <tr>
                <td><?=$depoimento[0]?></td>
                <td><?=$depoimento[1]?></td>
                <td><?=$depoimento[2]?></td>
                <td><?=$depoimento[3]?></td>
                <td class ="text-center">
                <form action="registro.php" method="POST">
                  <input type="hidden" class="form-control" id="id_depoimento" name="id_depoimento" value="<?=$depoimento[0]?>">
                  <button type="submit" class="dropdown-iten"><i class="fas fa-edit fa-lg text-secondary"></i>
                  </button>
                </form>

              </td>
              <td class = "text-center">
              <a class="dropdown-item" onclick="modalRemover(<?=$depoimento[0]?>,'id_depoimentoUp')">
                <i class= "fas fa-trash-alt fa-lg text-danger"></i>        
              
              </td>
              <tr> 

            <?php }  ?>

              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class=" modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  ">
          <form action="remover.php" method="post">
            <input class="form-control" id="id_depoimentoUp" name="id_depoimentoUp" type="hidden">
            <p>Tem certeza que deseja excluir o item selcionado?
            <div class=" text-end">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-warning ms-3">Sim </button>
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