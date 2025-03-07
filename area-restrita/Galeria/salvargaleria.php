<?php
/*     echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

    include('../../dao/conexao.php');

    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
        //passando todos os itens do post para as sua variaveis
        $id_joia = trim($_POST['id_joia']);
        $nome = trim($_POST['nome']);
        $categoria = trim($_POST['categoria']);
        $marca =trim($_POST['marca']);
        $novo_nome =trim($_POST['foto_joia']);;



        echo empty($_FILES['foto']['size']) ;    
        //a foto vem com a extenção $_FILES
        if(empty($_FILES['foto']['size']) != 1){
            //pegar as extensão do arquivo
            $extensao = strtolower(substr($_FILES['foto']['name'],-4)) ;
            if ($novo_nome ==""){
                //Ciando um nome novo
                $novo_nome = md5(time()). $extensao;
            }
            //definindo o diretorio
            $diretorio = "../../fotos/joias/";
            //juntando o nome com o diretorio
            $nomeCompleto = $diretorio.$novo_nome;
            //efetuando o upload
            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
         }       
    
      if(is_numeric($id_joia)) {
        $sql = " UPDATE tbgaleria SET nomeJoia = '$nome',  categoriaJoia = '$categoria',  marcaJoia = '$marca', imgJoia	 = '$novo_nome' WHERE idJoia = $id_joia";
        } else {
        $sql = "
        INSERT INTO tbgaleria (nomeJoia , categoriaJoia , marcaJoia , imgJoia) VALUES
        (
            '$nome',
            '$categoria',
            '$marca',
            '$novo_nome'
        )
        ";
        }
   /* }*/
    $query = $conexao->prepare($sql);
    $query->execute(); 
    }
    header('Location: ./galeria.php');
    exit;



?>

