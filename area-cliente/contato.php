<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatos.css">
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
                <a class="item col-6 col-md-2 mt-3 mt-md-0" href="">
                    <li class="w-100 text-center">CONTATO</li>
                </a>
            </ul>
        </nav>
        <div class="row prinForm">
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <h1 class="tituloContForm px-4">Em caso de dúvida, entre em contato conosco:</h1>
            </div>
            <div class="col-12 col-md-8 bg-light form-rounded-right">
                <form method="post" action="../area-restrita/Email/salvarEmail.php">
                    <div class="row p-5">
                        <div class="col-12 mb-3">
                            <h1 class="tituForm">Nossos especialiastas estão sempre a disposição para ajudar.</h1>
                        </div>
                        <div class="col-12">
                            <div class="floating-label">
                                <input type="text" inputmode="numeric" value="" class="form-control" id="autor" name="autor" placeholder=" ">
                                <label for="input">Nome completo</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="floating-label">
                                <input type="text" inputmode="numeric" value="" class="form-control" id="email" name="email" placeholder=" ">
                                <label for="input">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="floating-label">
                                <input type="text" inputmode="numeric" value="" class="form-control" id="email" name="email" placeholder=" ">
                                <label for="input">Comentário</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="botaoForm mb-5">Enviar</button>
                        </div>
                        <hr>
                        <div class="redesFormPrin">
                            <div class="redesInsta"><a href="#contato"><img src="img/sociais.png" width="150px"
                                        height="80px" alt=""></a></div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>