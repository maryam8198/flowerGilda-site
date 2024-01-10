<?php
require_once 'config.php';
//session_start();
$product_id = $_GET['id'];
$name = $_SESSION['session_login'];


    $check_cart = mysqli_query($db, "SELECT * FROM cart WHERE product_id='$product_id' AND user_id='$name'");
    if (mysqli_num_rows($check_cart) > 0)
    {
        header("Location: ../users/cart.php");
    }
    else
    {
        $query = mysqli_query($db, "SELECT * FROM products WHERE id='$product_id'");
        $product = mysqli_fetch_array($query);
        $price=$product['products_price'];
        $add_to_cart = mysqli_query($db, "INSERT INTO cart (user_id, product_id,price) VALUES ('$name', '$product_id','$price')");
        if ($add_to_cart)
        {
            header("Location: ../users/cart.php");
        }
        else
        {
            echo 'مشکلی پیش آمده است.';
        }
    }

?>