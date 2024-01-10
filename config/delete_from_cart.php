<?php
require_once 'config.php';
$product_id = $_GET['product_id'];
$name = $_SESSION['session_login'];

$delete = mysqli_query($db, "DELETE FROM cart WHERE product_id='$product_id' AND user_id='$name'");
if($delete)
{
    header("Location: ../users/cart.php");
}

?>