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
    <link rel="stylesheet" href="styles.css?v=1.0">
    <link rel="stylesheet" href="bannerStyles.css">
</head>
<?php 
  include_once 'connectSQL.php';
  include_once 'dataLogo.php';
  include_once 'dataMenu.php';
  include_once 'dataBanner.php';
  $getLogo = getLogo();
  $getMenu = getMenu();  
  $getBanner = getBanner();
  ?>

<body>
    <!-- header-->
    <div class="container-fluid">
        <div class="row">
            <div class="body_all">
                <div class="header_all d-flex">
                    <div class="col-2 header-logo d-flex">
                        <img src="./img/logo.jpg" alt="logo">
                        <h4><?php echo $getLogo[0]['title'] ?></h4>
                    </div>
                    <div class="col-4 header-menu">
                        <nav>
                            <ul class="menu d-flex">
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
            <div class="carousel-inner khoa">
            <?php 
                    for($i = 0; $i < count($getBanner) ; $i++) {
                      ?>
                        <div class="item <?php if ($i == 0) { echo 'active'; } ?>">
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
</body>

</html>