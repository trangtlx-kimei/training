<<<<<<< HEAD

<!doctype html>
<?php 
include 'dbBanner.php';
?>

                            
                 
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="col-12 banner">
                <img src="./img/banner.png" alt="hinh cong ty">
            </div>
            <div class="col-12 logo">
                <img src="./img/logo.jpg" alt="hinh cong ty">
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="container">
        <div class="topnav">
            <?php 
                include 'db.php'
            ?>
        </div>
    </div>
    </br>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/banner.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <?php
                            $khoa = getSQL();
                        ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/banner.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Day la slider thu hai</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/banner.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Day la slider thu ba</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/banner.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Day la slider thu tu</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
=======
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
  include 'connectSQL.php';
  include 'dataLogo.php';
  include 'dataMenu.php';
  include 'dataBanner.php';
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
                                <li><a href="#"><?php echo $getMenu[0]['name'] ?></a></li>
                                <li><a href="#"><?php echo $getMenu[1]['name'] ?></a></li>
                                <li><a href="#"><?php echo $getMenu[2]['name'] ?></a></li>
                                <li><a href="#"><?php echo $getMenu[3]['name'] ?></a></li>
                                <li><a href="#"><?php echo $getMenu[4]['name'] ?></a></li>
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
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./img/<?php echo $getBanner[0]['url_img']?>" class="banner_size" alt="banner1">
                    <div class="carousel-caption">
                        <h3><?php echo $getBanner[0]['name']?></h3>
                        <p><?php echo $getBanner[0]['description']?></p>
                    </div>
                </div>

                <div class="item">
                    <img src="./img/<?php echo $getBanner[1]['url_img']?>" class="banner_size" alt="banner1">
                    <div class="carousel-caption">
                        <h3><?php echo $getBanner[1]['name']?></h3>
                        <p><?php echo $getBanner[1]['description']?></p>
                    </div>
                </div>

                <div class="item">
                    <img src="./img/<?php echo $getBanner[2]['url_img']?>" class="banner_size" alt="banner1">
                    <div class="carousel-caption">
                        <h3><?php echo $getBanner[2]['name']?></h3>
                        <p><?php echo $getBanner[2]['description']?></p>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/<?php echo $getBanner[3]['url_img']?>" class="banner_size" alt="banner1">
                    <div class="carousel-caption">
                        <h3><?php echo $getBanner[3]['name']?></h3>
                        <p><?php echo $getBanner[3]['description']?></p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
>>>>>>> issues-16
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
=======
</body>



>>>>>>> issues-16
</html>