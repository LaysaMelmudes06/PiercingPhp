<?php
include('../../dao/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
    $id_depoimento = $_POST['id_depoimentoUp'];
    $querySelect = "DELETE  FROM tbdepoimento  WHERE idDepoimento = $id_depoimento";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./index.php');
  exit;

?>