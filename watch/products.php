<?php
session_start();

if(isset($_SESSION['logIn'])) {
    $log = $_SESSION['logIn'];
    if ($log == true) {
        echo '<p class="text-white">logged<a href="?log" class="btn btn-danger">خروج از حساب کاربری</a></p>';
    } else {
        include 'signInForm.php';

    }
    if (isset($_GET['log'])) {
        $_SESSION['logIn'] = false;
    }
}else{
    include 'signInForm.php';
}
include 'addToCart.php';
?>
<!doctype html>
<html lang="en">

<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- css -->
<link rel="stylesheet" href="css/index.css">
<title>فروشگاه ساعت</title>
</head>
<body>
    <?php
    $current='product';
    include 'header.php';

$my_select_sql ="SELECT * FROM products ORDER BY id DESC";

$res = $c->query($my_select_sql);
include 'product.php';
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>



