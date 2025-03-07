
<?php
  include ('../dao/conexao.php');

  if($_GET['categoria']=='Anel'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Anel'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

  }else if($_GET['categoria']=='Pulseira'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Pulseira'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='joias'){
    $querySelect = "SELECT * FROM  tbgaleria"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='Colares'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Colar'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='Tornozeleira'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Tornozeleira'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='Brincos'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Brinco'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='Kits'){
    $querySelect = "SELECT * FROM  tbgaleria WHERE categoriaJoia='Kits'"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
else if($_GET['categoria']=='Todos'){
    $querySelect = "SELECT * FROM  tbgaleria"  ;

    $resultado = $conexao->query($querySelect);
  
    $joia = $resultado->fetchAll();

}
  
 



  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatos.css">
    <link rel="stylesheet" href="galerias.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>LBL Pratas</title>
</head>

<body>
    <div class="container">
        <nav class="row">
            <ul class="row justify-content-center menu">
                <li class="col-6 col-md-2 logo1">
                    <img src="img/logolbl.png" alt="">
                </li>
                <a class="item col-6 col-md-2" href="home.php">
                    <li class="w-100 text-center">HOME</li>
                </a>
                <a class="item col-6 col-md-2" href="depoimento.php">
                    <li class="w-100 text-center">DEPOIMENTOS</li>
                </a>
                <a class="item col-6 col-md-2 mt-3 mt-md-0" href="galeria.php?categoria=joias">
                    <li class="w-100 text-center">GALERIA</li>
                </a>
                <a class="item col-6 col-md-2 mt-3 mt-md-0" href="contato.php">
                    <li class="w-100 text-center">CONTATO</li>
                </a>
               
            </ul>
        </nav>
        <div class="row prinForm mt-5 mt-md-0">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Todos">
                            <img src="img/tudo.png" width="60px" heigh="40px">
                            <h6 class="">Todos os Produtos</h6>
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Anel">    
                            <img class="mr-3" src="img/anel1.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Anéis</h6>
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Pulseira">
                            <img src="img/pulseira1.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Pulseiras</h6>
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Colares">
                            <img src="img/colar.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Colares</h6>
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Tornozeleira">
                            <img src="img/tornozeleira.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Tornozeleiras</h6>
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Brincos">    
                            <img src="img/brinco.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Brincos</h6> 
                        </a>
                    </div>
                    <div class="col-12 d-flex align-items-center mt-3 categoria-item">
                        <a href="galeria.php?categoria=Kits">
                            <img src="img/kits.png" width="50px" heigh="40px">
                            <h6 class="categoria-titulo">Kits de Prata </h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 bg-light form-rounded-right">
                <div class="row">
                <?php foreach($joia as $joia) { ?>
                    <div class="col-12 col-md-4">
                        <div class="card product-card">
                            <img src="../fotos/joias/<?=$joia[4]?>" class="card-img-top"
                                alt="Imagem do card">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?=$joia[1]?></h5>
                                <p class="m-0 price"> R$ 900,00</p>
                                <p class="price"> <?=$joia[3]?></p>
                                <button class="custom-button">Ver Produtos</button>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>