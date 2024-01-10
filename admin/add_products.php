<?php  require_once
'../config/config.php';
?>

<?php
if(!isset($_SESSION['admin_login']))
{
    header("Location:login_admin.php");
}
$name = $_SESSION['admin_login'];
$getUsername = mysqli_query($db, "SELECT * FROM admin WHERE name1='$name'");
$username = mysqli_fetch_array($getUsername);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>افزودن محصولات</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icon.PNG" type="">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link href="../css/responsive.css" rel="stylesheet" />
</head>
<body class="body-admin-panel1">
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><img  src="../images/icon.PNG" width="50px" height="50px"><span>گیلدا</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li class="list">
                        <a href="adminPanel.php">
                            <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                            <span class="title">داشبورد</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="../index.php">
                            <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                            <span class="title">مشاهده فروشگاه</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="admin_about.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">مشخصات</span>
                        </a>
                    </li>
                    <li class="list active">
                        <a href="add_products.php">
                            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="title">اضافه کردن محصول</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="products.php">
                            <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                            <span class="title">لیست محصولات</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="orders.php">
                            <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                            <span class="title">لیست سفارشات</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="users.php">
                            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="title">لیست کاربران</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="comments.php">
                            <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                            <span class="title">نظرات</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="../config/logOut.php">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">خروج</span>
                        </a>
                    </li>
                </ul>
            </div>        
        </div>
        <!--main-->
        <div class="main-content">
            <header>
                    <h1>
                        <label for="nav-toggle">
                            <span><ion-icon name="menu-outline"></ion-icon></span>
                        </label>    
                    </h1>
                <!--search-->
                <div class="search-wrappar">
                    <label>
                        <span><ion-icon name="search-outline"></ion-icon></span>
                        <input type="Search" placeholder="Search here"/>
                    </label>
                </div>
                <!--AdminImg-->
                <div class="user-wrappar">
                    <img src="../images/usericon.png" width="40px" height="40px"> 
                    <div>
                        <h4>
                            <?php echo $username['display_name']?>

                        </h4>
                    </div>
                </div>
            </header>
            <main>
                <div class="content">
                    <div class="content-2">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">افزودن محصول</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="add_products.php" method="post">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">نام محصول</label>
                                    <input type="text"  class="form-control" name="product-name" placeholder="نام محصول ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">قیمت محصول</label>
                                    <input type="text"  class="form-control" name="product-price" placeholder="قیمت محصول ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">توضیحات محصول</label>
                                    <textarea  class="form-control" name="product-desc" placeholder="توضیحات محصول ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">پیشنهاد</label>
                                    <input type="text"  class="form-control" name="product-offer" placeholder="پیشنهاد"><br>
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">نوع گل</label>
                                    <input type="text"  class="form-control" name="product-type" placeholder="نوع گل"><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"> عکس محصول</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image-name" class="custom-file-input" id="exampleInputFile">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="add-product" class="btn btn-primary">تایید</button>
                                </div>
                            </form>
                        </div>
                        <!--<form action="/admin/add_products.php" method="post" class="form">
                            <input type="text"  class="ProductName" name="product-name" placeholder="نام محصول ..."><br>
                            <input type="text"  class="ProductPrice" name="product-price" placeholder="قیمت محصول ..."><br>
                            <textarea  class="ProductDesc" name="product-desc" placeholder="توضیحات محصول ..."></textarea><br>
                            <input type="text"  class="ProductOffer" name="product-offer" placeholder="پیشنهاد"><br>
                            <input type="file"  class="ImageName" name="image-name" placeholder="نام عکس محصول .."><br>
                            <input type="submit"  class="AddProduct" name="add-product" value="افزودن محصول">
                        </form>-->
                    </div>
                </div>
            </main>

        </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script>
        // add active class in selected list item
        let list =document.querySelectorAll('.list');
        for (let i=0;i<list.length;i++){
            list[i].onclick=function(){
                let j=0;
                while(j<list.length){
                    list[j++].className='list';
                }
                list[i].className='list active';
            }
        }
    </script>

</body>
</html>

<?php
if (isset($_POST['add-product']) && isset($_POST['product-name']) && !empty($_POST['product-name']) && isset($_POST['product-price']) && !empty($_POST['product-price'])
    && isset($_POST['product-desc']) && !empty($_POST['product-desc']) && isset($_POST['image-name']) && !empty($_POST['image-name'])
    && isset($_POST['product-offer']) && isset($_POST['product-type']))
{
        $productName = $_POST['product-name'];
        $productPrice = $_POST['product-price'];
        $productDesc = $_POST['product-desc'];
        $productOffer = $_POST['product-offer'];
        $image_name = $_POST['image-name'];
        $productType = $_POST['product-type'];

        $addProduct1=mysqli_query($db,"SELECT products_name FROM products  WHERE products_name='$productName'");
        if(mysqli_num_rows($addProduct1)>0)
        {
            echo '<script>  alert("نام محصول تکراری است.")</script>';
        }
        else
        {
            $addProduct = mysqli_query($db, "INSERT INTO products (products_name, products_price, products_desc,products_offer, products_image,type)
                  VALUES ('$productName','$productPrice','$productDesc','$productOffer', '$image_name','$productType')");
            if ($addProduct)
            {
                echo '<script>  alert("محصول با موفقیت افزوده شد.")</script>';

            }
            else
            {
                echo '<script>  alert("برخی از فیلد ها مقدار دهی نشده!!!!")</script>';
            }

    }

}

?>