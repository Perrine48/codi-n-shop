<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <<?php header( 'content-type: text/html; charset=utf-8' ); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bxslider/dist/jquery.bxslider.min.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="css/navbar-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar-style.css">
  <link rel="stylesheet" href="css/temp.css">

  <title>Codi-n-shop</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="slider sliderHead">
        <div>
          <img src="img/1stSlide-1.jpg" alt="toto">
        </div>
        <div>
          <img src="img/31959565_2053047888300089_6408062291912163328_n.jpg" alt="toto">
        </div>
        <div>
          <img src="img/31959565_2053047888300089_6408062291912163328_n.jpg" alt="toto">
        </div>
      </div>
    </div>
    <header>
      <div class="row" id="header">
        <!--Navigation bar-->
        <div id="nav-placeholder" class="col-sm-12"></div>
        <!--end of Navigation bar-->
      </div>
    </header>

    <div class="row" id="main">
      <div class="column col-12 col-sm-5 col-md-3" id="filterMenu">
        <div class="col filter">
          <i class="fas fa-caret-right"></i>
        </div>
      </div>
      <div class="column col-12" id="menuArticle">
        <div class="row ">
          <div class="column col-12" id="card-art">
            <div class="row">
                <?php
                    $pdo = new PDO("mysql:host=localhost;dbname=test_boutique", 'admin', 'perrine');
                    $products = $pdo->query('SELECT * FROM product');

                    foreach ($products as $product) { ?>

                    <div class="column col-12 col-sm-6 col-lg-3 articleVente" id="produit">
                    <a href="single.php?id=<?php echo $product['id'] ?>"
                        <h2> <?php echo $product ['name'];?> </h2>
                        <img src="http://via.placeholder.com/400x400" alt="random">
                        <p>
                            <?php
                                echo $product ['prix'];
                             ?>
                        </p>
                        <p>
                            <?php
                                echo($product ['description']);
                             ?>
                        </p>
                    </a>
                    </div>
                <?php
                    }
                 ?>
            </div>
          </div>
          <div class="column col-12" id="pub">
            <div class="row">
              <div class="column col-12 col-sm-6 col-lg-3">Publicité</div>
              <div class="column col-12 col-sm-6 col-lg-3">Publicité</div>
              <div class="column col-12 col-sm-6 col-lg-3">Publicité</div>
              <div class="column col-12 col-sm-6 col-lg-3">Publicité</div>
            </div>
          </div>
        </div>
      </div>
    </div>








    <footer>
      <div class="row" id="footer">
        <!--footer-->
        <div id="footer-placeholder" class="col-sm-12"></div>
        <!--end of footer-->
      </div>
    </footer>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/bxslider/dist/jquery.bxslider.min.js"></script>
  <!-- <script src="js/catalog_x100.js"></script> -->
  <script src="js/catalogue.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/app.js"></script>
  <script>
    $(function() {
      $("#nav-placeholder").load("nav.html");
      $("#footer-placeholder").load("footer.html");
    });
  </script>
</body>

</html>
