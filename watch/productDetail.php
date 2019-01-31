<?php
/**
 * Created by PhpStorm.
 * User: zohal system
 * Date: 1/16/2019
 * Time: 1:46 AM
 */
session_start();
if(isset($_GET['p_id'])) {
    $product_id = $_GET['p_id'];
}else{
    $product_id = $_GET['add'];
}
include "connection.php";
include "addToCart.php";

$my_sql_data="SELECT * FROM products WHERE id='$product_id' ";
$res=$c->query($my_sql_data);
$r = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery.js"></script>
    <title></title>
</head>
<body>
<?php
include "header.php";
?>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-3 mt-5"><img src="<?php echo $r['img']?>"> </div>
        <div class="col-md-9 my-5">
            <div class="row ">
                <div class="col-md-6 text-white my-2 "><h2> <?php echo $r['description']?>  کد-  <?php echo $r['name']?></h2></div>
            </div>
            <div class="row">
                <div class="col-md-6 text-white my-2 brand"><?php echo $r['price']?> تومان</div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-5">
                    <a  href="?add=<?php echo $r['id']?>" class="btn btn-success col-8">اضافه کردن به سبد</a>
                </div>

            </div>
        </div>

    </div>
</div>
</body>
</html>