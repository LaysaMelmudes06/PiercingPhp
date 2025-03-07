
<?php
  include ('../dao/conexao.php');
  $querySelect = "SELECT * FROM  tbdepoimento" ;

  $resultado = $conexao->query($querySelect);

  $depoimentos = $resultado->fetchAll();


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="depoimentos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>LBL Depimentos</title>
</head>
<body>
<div class="navbar-home">
        <nav>
            <div class="logo1">
                <img src="img/logolbl.png" alt="" width="190px" height="170px">
            <!-- Alpha Tecnology-->
            </div>

            <ul class="menu">
                <a class="item" href="home.php"><li>HOME</li></a>
                <a class="item" href="#"><li>DEPOIMENTOS</li></a>
                <a class="item" href="galeria.php?categoria=joias"><li>GALERIA</li></a>
                <a class="item" href="contato.php"><li>CONTATO</li></a>

            </ul>
           <!-- <a class="botao" href="#">LOGOUT</a>-->
        </nav>

        <div class="prinDepoi">
            <div class="tituloDepoi"><h1>Depoimentos</h1></div>
            <div class="dentroDepoi">
            <?php foreach($depoimentos as $depoimento) { ?>

              <div class="depoimentosPrin">
                    <h3><?=$depoimento[3]?></h3>

                    <h3><?=$depoimento[2]?></h3>

              </div>

            <?php }  ?>
            </div>

        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>