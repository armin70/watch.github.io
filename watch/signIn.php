<?php
/**
 * Created by PhpStorm.
 * User: zohal system
 * Date: 1/14/2019
 * Time: 1:04 PM
 */
session_start();
//$_SESSION['logIn']= false;

include 'connection.php';
$pass=$_POST['password'];
$user=$_POST['userName'];
$my_sql_data="SELECT * FROM users WHERE username ='$user'";

$res = $c->query($my_sql_data);
if($res->num_rows >0) {
    while ($r = $res->fetch_assoc()) {

        if (password_verify($pass, $r['password'])) {
            echo $r['fullname'] . 'سلام';
            $_SESSION['logIn'] = true;
            header('Refresh:3 ; URL=index.php');
        } else {
            echo 'نام کاربری یا رمز عبور اشتباه است';
            header('Refresh:3 ; URL=signIn.html');
        }
    }
}
else{
        echo 'سلام مهمان';
        header('Refresh:3 ; URL=index.php');
    }



