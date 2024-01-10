<?php
require_once 'config.php';
//session_start();
$product_id = $_GET['id'];
$name = $_SESSION['session_login'];

$check_cart = mysqli_query($db, "SELECT * FROM favariteflower WHERE product_id='$product_id' AND user_name='$name'");
if (mysqli_num_rows($check_cart) > 0)
{
    header("Location: ../favaritFlower.php");
}
else
{
    $query = mysqli_query($db, "SELECT * FROM products WHERE id='$product_id'");
    $product = mysqli_fetch_array($query);
    $price=$product['products_price'];
    $products_name=$product['products_name'];
    $products_image=$product['products_image'];

    $add_to_favarite = mysqli_query($db, "INSERT INTO favariteflower (products_name,product_price,product_image,user_name,product_id) 
                                   VALUES ('$products_name','$price','$products_image','$name','$product_id')");
    if ($add_to_favarite)
    {
        header("Location: ../favaritFlower.php");
    }
    else
    {
        echo 'مشکلی پیش آمده است.';
    }
}

?>