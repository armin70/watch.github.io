<?php
session_start();
include 'addToCart.php';

?>

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- css -->
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<title>WATCH GALLERY</title>
</head>
<body>
    <div class="container-fluid">

<!--        top nav-->

            <div class="d-flex justify-content-between ju py-3">
                <!-- search -->
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="جستوجو" aria-label="جستوجو">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">جستوجو</button>
                </form>
                <!-- logo -->
                <h1 class="text-center">WATCH GALLERY</h1>
                <?php include 'logButton.php'; ?>
            </div>

    <!-- navBar -->

    <!-- carousel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <?php $current='home';
        include 'header.php';
        ?>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/img/diesel-watch-e1541106845921_dfa3a43a213c8c68f19a01eb000b24bf.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/img/disel-watch.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/img/obaku-watch_1ef44c0f2b0a3604308afa95cd45f888.jpg" alt="Third slide">
            </div>
        </div>
    </div>




              <!-- brands -->
        <div class="container-fluid fontVazir mt-5">
            <h2 class="text-center brand-title my-5 themeLight textTheme py-5">فروش ویژه</h2>
            <div class="row justify-content-center">
                <div class="col-8">

                    <div class="row m-5 ">
                        <img class="col-md-9" src="./assets/img/brands/ob4.jpg">
                        <div class="col-md-3 my-auto mx-auto">
                            <h3 class="text-right textTheme brand">  فروش ویژه ساعت اوباکو  </h3>
                            <a class="btn btn-outline-primary textTheme py-3 my-3">ورود به صفحه خرید</a>
                        </div>
                    </div>
                    <div class="row my-5 ">

                        <div class="col-md-3 my-auto mx-auto">
                            <h3 class="text-right textTheme brand">فروش ساعت مایکل کورس<br>Michael Kors</h3>
                            <a class="btn btn-outline-primary textTheme py-3 my-3">ورود به صفحه خرید</a>
                        </div>
                        <img class="col-md-9" src="./assets/img/brands/Michael-Kors-Smartwatch-Hero-1.jpg">
                    </div>
                    <div class="row my-5 ">
                        <img class="col-md-9" src="./assets/img/brands/tacs-watch.jpg">
                        <div class="col-md-3 my-auto mx-auto">
                            <h3 class="text-right textTheme brand">فروش ویژه ساعت تکس</h3>
                            <a class="btn btn-outline-primary textTheme py-3 my-3">ورود به صفحه خرید</a>
                        </div>
                    </div>
                </div>
            </div>
              <!-- products -->
            <div class="container-fluid">

              <?php
include 'connection.php';
$my_select_sql ="SELECT * FROM products ORDER BY id DESC LIMIT 12";

$res = $c->query($my_select_sql);
include 'product.php';
          ?> 
            </div>
<!-- Optional JavaScript -->
            <script src="./js/jquery.js"></script>
            <script src="./js/main.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</body>
</html>