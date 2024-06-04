<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FK Street</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../style/style.css" type="text/css" rel="StyleSheet">
  <link href="../style/carrosel.css" type="text/css" rel="StyleSheet">

</head>

<body>



  <div class="nav">
    <?php
    include_once("../components/navbar.php");
    ?>
  </div>




  <div class="container" id="container">
    <div class="row" id="carrosel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/bannersHome/CampusBanner.jpeg " class="d-block w-100"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bannersHome/VansKnuBanner.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bannersHome/Jordan4Banner.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <section class="hidden2">
        <div class="container">
          <div class="banner">
            <div class="row">
              <div class="col-4" id="lancamentos-card"> <a type="button" href="./tenis.php" id="click-card"> <img src="../img/cardHome/camisetas.jpeg" class="img-thumbnail" id="img_banner">
              <h1 id="cardText"> camisetas </h1>
                </a></div>
              <div class="col-4" id="lancamentos-card"> <a type="button" href="./tenis.php" id="click-card"> <img src="../img/cardHome/tenis.jpeg" class="img-thumbnail" id="img_banner">
              <h1 id="cardText"> tenis </h1>
            </a></div>
              <div class="col-4" id="lancamentos-card"> <a type="button" href="./tenis.php" id="click-card"> <img src="../img/cardHome/conjuntos.jpeg" class="img-thumbnail" id="img_banner">
              <h1 id="cardText"> conjuntos </h1>
              </a></div>
            </div>
          </div>
        </div>
      </section>

      <div class="lancamento">
        <div class="row">
          <div class="col-12">
            <h2 id="title-lancamento">Lançamento</h2>

          </div>
        </div>
      </div>


      <section class="hidden">
        <div class="container">
          <div class="row">
            <div class="col-6"><img src="../img/home/ForumLowLancamento.jpeg" class="img-thumbnail"></div>
            <div class="col-6" id="texto">
              <h1>Conheça o Adidas Forum Low</h1>
              <p> Com design atemporal, o Adidas Forum Low oferece conforto e versatilidade em cada passo.</p>
            </div>

          </div>
        </div>
      </section>


      <div class="container" id="container-nike">

        <div class="row" id="row-nike">

          <h1 id="titlo-nike"> Calças Cargo </h1>
          <p> Conforto e estilo encontram-se na versatilidade prática da calça cargo.</p>
        </div>
        <a class="btn-nike" href="../area_user/tenis.php">Ver coleção</a>

      </div>


      <section class="hidden">
        <div class="container">
          <h1 id="container-titlo"> Os Mais Desejados: </h1>
          <div class="row">
            <div class="col-4" id="lancamentos-card"> <a href="../area_user/tenis.php" id="click-card"> <img src="../img/home/desejados/asunaHome.jpeg" class="img-thumbnail" id="mais_vendidos"></a></div>
            <div class="col-4" id="lancamentos-card"> <a href="../area_user/tenis.php" id="click-card"> <img src="../img/home/desejados/homeCargo.png" class="img-thumbnail" id="mais_vendidos"></a></div>
            <div class="col-4" id="lancamentos-card"> <a href="../area_user/tenis.php" id="click-card"> <img src="../img/home/desejados/homeCargoJeans.jpeg" class="img-thumbnail" id="mais_vendidos"></a></div>
          </div>
        </div>


    </div>
    </section>

  </div>
    <div class="footer">
      <?php
      include_once("../components/footer.php");
      ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

</body>

</html>