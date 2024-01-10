<?php
require_once 'config.php';

if (isset($_POST['add_comment']))
{
    $username = $_POST['nameUser'];
    $email = $_POST['emailUser'];
    $commentText = $_POST['messageUser'];
    $id = $_POST['product_id'];

    $query = mysqli_query($db, "INSERT INTO comments (users_name,users_email,comment_text,product_id)
               VALUE ('$username', '$email', '$commentText','$id')");
    if ($query)
    {
        $queryy = mysqli_query($db, "SELECT * FROM products WHERE id='$id'");
        $product = mysqli_fetch_array($queryy);


        header("Location:../product.php?id=".$product['id']);
        echo '<script>  alert(" نظر شما با موفقیت ثبت شد ")</script>';
    }
    else
    {
        echo '<script>  alert(" خطایی هنگام ثبت نظر پیش امده است ")</script>';
        header("Location:../product.php");

    }
}

?>