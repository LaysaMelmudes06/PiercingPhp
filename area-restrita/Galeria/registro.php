



<?php

include('../../dao/conexao.php');
/*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
      $id_joia = $_POST['id_joia'];
      $querySelect = "SELECT * FROM tbgaleria  WHERE idJoia = $id_joia";
      $resultado = $conexao->query($querySelect);
      $joia = $resultado->fetch();
      
      $id_joia = $joia["idJoia"];
      $nome = $joia["nomeJoia"];
      $categoria = $joia["categoriaJoia"];
      $marca = $joia["marcaJoia"];
      $foto_joia = $joia["imgJoia"];
    }else{
      $id_joia = "";
      $nome = "";
      $categoria = "";
      $marca = "";
      $foto_joia = "";
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
          <form method="post" action="salvargaleria.php" enctype="multipart/form-data">
            <div class="card-header">
              <strong>INFORMAÇÕES DA JOIA</strong>
            </div>
            <div class="card-body row " style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <img id="preview" src="../../fotos/joias/<?=$foto_joia!="" ? $foto_joia : '';?>"
                    alt="..." class=" w-75" value="<?=$id_joia?>">
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="recipient-name" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" value="<?=$nome?>">
                  </div><br><br>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">Categoria:</label>
                    <select class="form-select" name="categoria" >
                    <option value="Anel" <?=$categoria=='Anel'?'selected':''?>>Anéis </option>
                    <option value="Pulseira" <?=$categoria=='Pulseira'?'selected':''?>>Pulseira</option>
                    <option value="Colar" <?=$categoria=='Colar'?'selected':''?>>Colar </option>
                    <option value="Tornozeleira" <?=$categoria=='Tornozeleira'?'selected':''?>>Tornozeleira</option>
                    <option value="Brinco" <?=$categoria=='Brinco'?'selected':''?> >Brinco</option>
                    <option value="Kits" <?=$categoria=='Kits'?'selected':''?>>Kits</option>
                  </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">Marca:</label>
                    <select class="form-select" name="marca">
                    <option value="Pandora" <?=$marca=='Pandora'?'selected':''?>> Pandora </option>
                    <option value="Vivara" <?=$marca=='Vivara'?'selected':''?>>Vivara</option>
                    <option value=" Tiffany&CO" <?=$marca==' Tiffany&CO'?'selected':''?>> Tiffany & CO </option>
                    <option value="Iguatemi365" <?=$marca=='Iguatemi365'?'selected':''?>>Iguatemi 365</option>
                    <option value="Buccellati" <?=$marca=='Buccellati'?'selected':''?> >Buccellati</option>
                    <option value=" Dolce&Gabbana" <?=$marca=='Dolce&Gabbana'?'selected':''?>> Dolce & Gabbana</option>
                  </select>
                  </div>
                </div>
                <div class="row  ">
                 
                  
                </div>
                <div class="col-md-3 mt-5">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
                <input type="hidden" id="foto_usuario" name="foto_joia">

              </div>
              <div class=" text-end p-3">
                <input type="hidden" id="id_joia" name="id_joia"   value="<?=$id_joia?>">
                <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="galeria.php">Voltar</i></a>
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




<!-- <label for="recipient-name" class="col-form-label">Categoria:</label>
                  <select class="form-select" name="categoria">
                    <option value="Elogio" >Anéis </option>
                    <option value="Reclamação" >Pulseira</option>
                    <option value="Elogio" >Colar </option>
                    <option value="Reclamação" >Tornozeleira</option>
                    <option value="Elogio" >Brinco</option>
                    <option value="Reclamação" >Kits</option>
                  </select>
                </div>
              </div>
              <div class="col mb-3">
                <label for="recipient-name" class="col-form-label">Marca</label>
                <select class="form-select" name="marca">
                    <option value="Elogio" > Pandora </option>
                    <option value="Reclamação" >Vivara</option>
                    <option value="Elogio" > Tiffany & CO </option>
                    <option value="Reclamação" >Tornozeleira</option>
                    <option value="Elogio" >Iguatemi 365</option>
                    <option value="Reclamação" >Buccellati</option>
                    <option value="Reclamação" > Dolce & Gabbana</option>
                  </select>

 -->






















