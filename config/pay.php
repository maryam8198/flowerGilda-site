<?php
require_once  'config.php';
//session_start();

$userId = $_SESSION['session_login'];
$prdouctIds = $_POST['product-ids'];
$total = 0;

$ids = explode(',', $prdouctIds, -1);
foreach ($ids as $id) {
    $sql = mysqli_query($db, "SELECT * FROM products WHERE id='$id'");
    $fetch = mysqli_fetch_array($sql);
    $getPrice = $fetch['products_price'];
    $total += $getPrice;
}


$addOrder = mysqli_query($db, "INSERT INTO orders (total, product_ids, user_email, is_paid)
                            VALUES ('$total', '$prdouctIds', '$userId', '1')");

if ($addOrder)
{
    echo '<script>  alert("سفارش شما با موفقیت ثبت و پرداخت شد. ")</script>';


    $sql2=mysqli_query($db,"DELETE FROM cart WHERE user_id='$userId' ");
    if ($sql2)
    {
        header("Location: ../users/orders.php");
    }

}
else
{
    echo 'مشکلی پیش آمده است.';
}



?>