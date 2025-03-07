<?php
/*     echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

    include('../../dao/conexao.php');

    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
        //passando todos os itens do post para as sua variaveis
        $id_usuario = trim($_POST['id_usuario']);
        $nome = trim($_POST['nome']);
        $cpf = str_replace('.','', trim($_POST['cpf']));
        //remover os pontos do cpf
        $cpf = str_replace('-','', $cpf);
        //remover o traço do cpf
        $rg = str_replace('.','', trim($_POST['rg']));
        $rg = str_replace('-','', $rg);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $novo_nome =trim($_POST['foto_usuario']);

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
            $diretorio = "../../fotos/usuarios/";
            //juntando o nome com o diretorio
            $nomeCompleto = $diretorio.$novo_nome;
            //efetuando o upload
            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
         } ;
      /*    echo $novo_nome;
         echo $nomeCompleto; */
    
       if(is_numeric($id_usuario)) {
        $sql = "
        UPDATE tbuser SET
        nome = '$nome',
        email	 = '$email',
        cpf= '$cpf',
        rg= '$rg',  
        senha	 = '$senha',
        imgUser	 = '$novo_nome'
        WHERE idUsuario = $id_usuario
        ";
        } else {
        $sql = "
        INSERT INTO tbuser (nome , email , cpf , rg, senha, imgUser ) VALUES
        (
            '$nome',
            '$email',
            '$cpf',
            '$rg',
            '$senha',
            '$novo_nome'
        )
        ";
    }
    $query = $conexao->prepare($sql);
    $query->execute(); 
    }
    header('Location: ./');
    exit;
 

    
?>