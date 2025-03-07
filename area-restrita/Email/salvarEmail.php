<?php

include('../../dao/conexao.php');

 if($_POST) {

$email = trim($_POST['email']);
$autor = trim($_POST['autor']);
$comentario =trim($_POST['comentario']);

$sql = "

INSERT INTO email (email , autor , comentario) VALUES
(

'$email','$autor', '$comentario'

)
";

$query = $conexao->prepare($sql);


 $query->execute();

}

 header('Location: ../../area-cliente/home.php');

exit;






?>