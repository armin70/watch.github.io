<?php
/**
 * Created by PhpStorm.
 * User: zohal system
 * Date: 1/16/2019
 * Time: 12:46 AM
 */

include 'connection.php';
$products=array();
$amounts=array();
$my_select_id="SELECT * FROM products";
$my_id=$c->query($my_select_id);
while ($r=$my_id->fetch_assoc()){
    $products[]=$r['id'];
    $amounts[]=$r['price'];
}

//sessions


if(!isset($_SESSION['total'])) {
    $_SESSION['total']=0;
    for ($i = 0; $i < count($products); $i++) {
        $_SESSION['qty'][$products[$i]] = 0;
        $_SESSION['amounts'][$amounts[$i]] = 0;
    }
}
//add
if ( isset($_GET["add"]) ) {
    if($log=true){
        $i=$_GET["add"];
        $key=array_search($i,$products);
        $qty = $_SESSION["qty"][$i]+1;
        $_SESSION['amounts'][$i]=$amounts[$key]*$qty;
        $_SESSION['qty'][$i]=$qty;
    }else{

            echo "<script type='text/javascript'>alert('لطفا وارد حساب کاربری خود شوید!!!');</script>";

        header('Refresh:.5;URL=signIn.html');
    }

}
//delete
if(isset($_GET['delete'])){
    $i=$_GET['delete'];
    $qty=$_SESSION['qty'][$i];
    $qty--;
    $_SESSION['qty'][$i]=$qty;
    if( $_SESSION['qty'][$i]=0){
        unset($_SESSION['qty'][$i]);
    }
}
//reset
if(isset($_GET["reset"])){
    if($_GET["reset"]== true){
        unset($_SESSION['qty']);
        unset($_SESSION['amounts']);
        unset($_SESSION['total']);
    }
}