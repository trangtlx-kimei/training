<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css?v=1.0">
  </head>
  <?php 
  include 'connectSQL.php';
  include 'dataLogo.php';
  include 'dataMenu.php';
  $getLogo = getLogo();
  $getMenu = getMenu();   
  ?> 
  <body>
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
                    <form >
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
  </body>
</html>