<?php
/**
 * Created by PhpStorm.
 * User: zohal system
 * Date: 1/14/2019
 * Time: 11:56 AM
 */
session_start();
include 'connection.php';
$user= $_POST['userName'];
$fullName= $_POST['fullName'];
$pass1= $_POST['password1'];
$pass2= $_POST['password2'];
$mail= $_POST['email'];
$cell= $_POST['cellphone'];
if(!empty($user and $fullName and $pass1 and $pass2 and $mail and $cell)) {
    if ($pass1 == $pass2) {
        $password = password_hash($pass1, PASSWORD_DEFAULT);
        $username = "SELECT * FROM users WHERE username LIKE '$user'";
        $res = $c->query($username);
        if ($res->num_rows > 0) {
            echo 'این نام کاربری قبلا استفاده شده است';
        } else {
            $my_sql_str = "INSERT INTO users VALUES (null,'$user','$fullName','$password','$mail','$cell')";
            if ($c->query($my_sql_str)) {
                echo "شما با موفقیت ثبت نام شدید" .$fullName;
                $_SESSION['logIn']= true;
                header('Refresh:3 ; URL=index.php');
            } else {
                $c->error;
            }
        }
    }
}else{
    echo 'لطفا تمام گزینه را پر کنید';
}
$c->close();
