<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/logo2.jpg" type="image/x-icon">
  <title> LBL Pratas </title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="icon" />
  <link rel="stylesheet" href="galeriaS.css">

  <style>
    .carousel{
      height: 100vh!important;
      width: 100%!important;
      top: 0!important;
    }

    .carousel-item img{
      width: 100%;
      height: 100vh;
    }

    .navbar-home{
      background: white;
      position: fixed;
      z-index: 1;
    }
  </style>
</head>

<body>
  <div class="row row-navbar">
    <nav class="navbar-home">
        <div class="logo1">
            <img src="img/logolbl.png" alt="" width="190px" height="170px">
        <!-- Alpha Tecnology-->
        </div>
  
        <ul class="menu">
            <a class="item" href="home.php"><li>HOME</li></a>
            <a class="item" href="depoimento.php"><li>DEPOIMENTOS</li></a>
            <a class="item" href="galeria.php?categoria=joias"><li>GALERIA</li></a>
            <a class="item" href="contato.php"><li>CONTATO</li></a>
  
        </ul>
        <!-- <a class="botao" href="#">LOGOUT</a>-->
    </nav>
  </div>
  <div class="row m-0 p-0">
    <div class="col-12 m-0 p-0">
      <div id="" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
              aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/alianca.png"  alt="">
            </div>
            <div class="carousel-item">
              <img src="img/relogio.png"  alt="">
            </div>
            <div class="carousel-item">
              <img src="img/colares.png" alt="">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row p-5">
      <div class="col-12 p-5">
        <h1 class="text-center">Bem vindos á LBL Pratas</h1>
      </div>
      <div class="col-12 justify-content-center d-flex">
        <a href="galeria.php">
          <button class="btn btn-outline-dark" type=" submit">Ver Produtos </button>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span> Veja nossos outros produtos:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>LBL Pratas
            </h6>
            <p>
                Jóias especialmente pensadas para quem quer estar na moda.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Produtos
            </h6>
            <p>
              <a href="#!" class="text-reset">Acessórios</a>
            </p>
            <p>
              <a href="#!" class="text-reset"> Colares </a>
            </p>
            <p>
              <a href="#!" class="text-reset">Feminino </a>
            </p>
            <p>
              <a href="#!" class="text-reset"> Masculino </a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              More
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Anéis</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Tornozeleiras</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Braceletes</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Brasil, BR, São Paulo</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@guaianases.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> 11 97766-0000</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> 11 98283-0000</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgb(255, 255, 255);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Beatriz, Laís & Laysa</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>
</html>