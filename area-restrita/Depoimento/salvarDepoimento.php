<?php

include('../../dao/conexao.php');

 if($_POST) {
    $id_depoimento = trim($_POST['id_depoimento']);
$tipo = trim($_POST['tipo']);
$depoimento = trim($_POST['depoimento']);
$autor =trim($_POST['autor']);




if(is_numeric($id_joia)) {
    $sql = " UPDATE tbdepoimento SET tipo = '$tipo',  autor = '$autor',  depoimento = '$depoimento' WHERE idDepoimento = $id_depoimento";
    } else {
$sql = "

INSERT INTO tbdepoimento (tipo , autor , depoimento) VALUES
(

'$tipo','$autor', '$depoimento'

)
";

    }
$query = $conexao->prepare($sql);


 $query->execute();

}

 header('Location: ./');

exit;






?>