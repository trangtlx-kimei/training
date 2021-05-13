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
    <link rel="stylesheet" href="styles.css?v=1.1">
    <link rel="stylesheet" href="products-detail.css?v=1.0">
</head>
<?php 
  include_once 'connectSQL.php';
  include_once 'dataLogo.php';
  include_once 'dataMenu.php';
  include_once 'dataDetail.php';

  $getLogo = getLogo();
  $getMenu = getMenu();  
  $getDatail = getDatail();
//   echo '<pre>';
//   print_r($getCart);
  ?>
<body>
    <!-- header-->
    <div class="container-fluid">
        <div class="row">
            <div class="body_all">
                <div class="header_all d-flex">
                    <div class="col-2 header-logo d-flex">
                        <img src="./img/logo.jpg" alt="logo">
                        <h4><a href="index.php"><?php echo $getLogo[0]['title'] ?></a></h4>
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
    <div>
        <h1 class="title_detail">Product Detail</h1>
    </div>
    <div class="container product_detail">
            <div class="row">
                <div class="col-6">
                    <img src="./img/<?php echo $getDatail[0]['img'] ?>"alt="product-detail" style="width:500px">
                </div>
                <div class="col-6">
                    <h2><?php echo $getDatail[0]['name']?></h2>
                    <span class="price_first"><?php echo $getDatail[0]['price_first']?>vnd</span>
                    <span class="price_second"><?php echo $getDatail[0]['price_second']?>vnd</span>
                    <select>
                        <option>Select Size</option>
                        <option><?php echo $getDatail[0]['size']?></option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                    <input type="number" value="1">
                    <a href="#" class="add_to_cart">Add To Cart </a>
                    <h4>Product Detail</h4>
                    <p><?php echo $getDatail[0]['description']?></p>
                </div>
            </div>
    </div>
    <!-- <script src="appCart.js"></script> -->
</body>

</html>