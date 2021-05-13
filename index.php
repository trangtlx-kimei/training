<!doctype html>
<html lang="en">

<head>
    <title>Fruits Web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css?v=1.3">
    <link rel="stylesheet" href="bannerStyles.css">
    <link rel="stylesheet" href="cartStyles.css?v=1.3">
</head>
<?php 
  include_once 'connectSQL.php';
  include_once 'dataLogo.php';
  include_once 'dataMenu.php';
  include_once 'dataBanner.php';
  include_once 'dataCart.php';
  $getLogo = getLogo();
  $getMenu = getMenu();  
  $getBanner = getBanner();
  $getCart = getCart();

    // echo '<pre>';
    // print_r($getCart);
    // die();
  ?>

<body>
    <!-- header-->
    <div class="container-fluid">
        <div class="row">
            <div class="body_all">
                <div class="header_all d-flex">
                    <div class="col-2 header-logo d-flex">
                        <img src="./img/logo.jpg" alt="logo">
                        <h4><a href="#"><?php echo $getLogo[0]['title'] ?></a></h4>
                    </div>
                    <div class="col-4 header-menu">
                        <nav>
                            <ul class="menu d-flex ">
                                <?php 
                                            for($i = 0; $i < count($getMenu) ; $i++)
                                            {
                                                echo "<li>" ."<a href='#'>". $getMenu[$i]['name'] ."</a>" . "</li>" ;
                                            }
                                        ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-3 header-search">
                        <form>
                            <input class="form-control" type="text" placeholder="find what you need..">
                            <button class="form-control" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-3 header-icon">
                        <span><i class="fas fa-home"></i></span>
                        <h6>Viet Nam <a href="#"><i class="fas fa-angle-down"></i></a></h6>
                        <span><i class="fas fa-heart"></i></span>
                        <span><i class="fas fa-shopping-cart"></i></span>
                        <span><i class="fas fa-user"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-->
    <div class="container-fluid banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
            <?php 
                    for($i = 0; $i < count($getBanner) ; $i++) {
                      ?>
                        <div class="item <?php if ($i == 0) { echo 'active'; } ?>"style="height:600px">
                          <img src="img/<?php echo $getBanner[$i]['url_img'] ?>" class="banner_size" alt="banner1">
                          <div class="carousel-caption">
                          <h3><?php echo $getBanner[$i]['name'] ?></h3>
                          <p><?php echo $getBanner[$i]['description']  ?><p>
                          </div>
                        </div>
                      <?php
                    }
            ?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>

                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="container cart_cart" id="fromDescription">
        <div class="row justify-content-center">
            <?php 
                    for ($i = 0 ; $i <count($getCart); $i++){
                ?>
                <div class="col-3 cach">
                    <div class="card shadow" style="width: 25rem; height:400px">
                        <div class="inner">
                            <img class="card-img-top" src="./img/<?php echo $getCart[$i]['img'] ?>" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $getCart[$i]['name']?></h5>
                            <p class="card-text"><a href="product-details.php">Product details</a></p>
                            <span class="price_first"><?php echo $getCart[$i]['price_first']?>vnd</span>
                            <span class="price_second"><?php echo $getCart[$i]['price_second']?>vnd</span>
                        </div>
                        <a href="#" class="btn btn-success">Add to card <span><i class="fas fa-shopping-cart"></i></span></a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <!-- <script src="appCart.js"></script> -->
</body>

</html>