
<h2 class="text-center mt-5 pt-5 pb-5 themeLight brand-title textTheme">محصولات</h2>
<div class="container-fluid">
    <div class="row justify-content-start mt-5">
<?php
while($r=$res->fetch_assoc()){
    $name=$r['name'];
    $id=$r['id'];
    echo  '
<div class="col-lg-3 col-md-4 col-sm-6 col-12 my-5">
    <div class="card mx-auto themeLight " style="width: 18rem;">
            <a href="productDetail.php?p_id='.$id.'"><img  id="' . $id . '" class="card-img-top"  src="' .$r["img"].'"></a>
            <div class="card-body">
              <h5 class="card-title text-center">'.$name.'</h5>
              <p  class="card-text text-center">'.$r["price"].' تومان</p>
              <p class="card-text text-center">'.$r["description"].'</p>
              <p class="card-text text-center">تعداد '.$r["qty"].' عدد موجود در انبار </p>
              <a  href="?add='.$id.'" class="btn btn-success col-8">اضافه کردن به سبد</a>
              <a  href="productDetail.php?p_id='.$id.'" class="btn btn-info mt-2 col-8">مشاهده محصول</a>
            </div>
          </div>
 </div>
 
 ';
}

?>
</div>
      </div>
