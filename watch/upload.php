<?php
include 'connection.php';
$product = $_POST['product'];
$price = $_POST['price'];
$des = $_POST['description'];
$qty = $_POST['qty'];
$tmpName = $_FILES['img']['tmp_name'];
$ext = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
$dir = "http://".$_SERVER['SERVER_NAME'].trim($_SERVER['PHP_SELF'],"upload.php")."uploads/".$product.".".$ext;
move_uploaded_file($tmpName,'./uploads/'.$product.'.'.$ext);
echo $product;
echo '.'.$ext;
echo $dir;
$my_sql_str = "INSERT INTO products VALUES (null,'$product','$price','$des','$dir','$qty')";
if($c->query($my_sql_str)){
    echo 'successfull';
}else{
    echo $c->error;
}
$c->close();