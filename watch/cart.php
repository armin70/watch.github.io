<?php
session_start();
include 'addToCart.php';
include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Title</title>
</head>
<body>
<table class="table table-hover table-primary text-center">
    <thead>
    <tr >
        <th scope="col">کد محصول</th>
        <th scope="col">نام محصول</th>
        <th scope="col">تعداد</th>
        <th scope="col">فی</th>
        <th scope="col">قیمت</th>
    </tr>
    </thead>
    <tbody>

        <?php
        $total=0;
        foreach ($products as $id) {
            if(isset($_SESSION['qty'][$id])) {
                if ($_SESSION['qty'][$id] != 0) {
                    $quantity = $_SESSION['qty'][$id];
                    $my_select_product = "SELECT * FROM products WHERE id=$id";
                    $response = $c->query($my_select_product);
                    while ($r = $response->fetch_assoc()) {
                        echo '<tr>
                <th scope="row">' . $r['id'] . '</th>
                <td >' . $r['description'] . '</td>
                <td>' . $quantity . '</td>
                <td>' . $r['price'] . '</td>
                <td>' . $quantity * $r['price'] . '</td>
                <td><a href="?delete=' . $id . '" class="btn btn-danger">حذف</a></td>
            </tr>';
                        $total = $total + $quantity * $r['price'];
                    }
                }
            }
        }
        echo '<td>قیمت کل</td>
              <td>'.$total.'</td>';


        ?>
            </tbody>
        </table>
<?php
if(isset($_SESSION['total'])){
    echo '<a href="?reset=true" class="btn btn-danger container-fluid">حذف تمام محصولات</a>';
}
?>
</body>
</html>