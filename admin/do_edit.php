<?php
require_once '../config/config.php';
if (isset($_POST['edit-product'])) {
    $productId = $_POST['product-id'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productDesc = $_POST['product-desc'];
    $productImage = $_POST['image-name'];

    $editProduct = mysqli_query($db, "UPDATE products SET products_name='$productName' , products_price='$productPrice',
                    products_desc='$productDesc', products_image='$productImage' WHERE id='$productId'");
    if ($editProduct)
    {
        echo "yessss";
        header("Location: products.php");
    }
    else
    {
        echo "fdabgefhb";
    }
}
?>