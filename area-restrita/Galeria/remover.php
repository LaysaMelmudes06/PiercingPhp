<?php
include('../../dao/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
    $id_galeria = $_POST['id_galeriaUp'];
    $querySelect = "DELETE  FROM tbgaleria  WHERE idJoia = $id_galeria";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./galeria.php');
  exit;

?>