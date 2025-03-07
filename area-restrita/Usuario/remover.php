<?php
include('../../dao/conexao.php');
/* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
   if($_POST) {
    $id_usuario = $_POST['id_usuarioUp'];
    $querySelect = "DELETE  FROM tbuser  WHERE idUsuario = $id_usuario";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./');
  exit;

?>