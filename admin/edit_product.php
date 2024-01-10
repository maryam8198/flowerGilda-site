<?php
require_once '../config/config.php'; ?>
<?php
if(!isset($_SESSION['admin_login']))
{
    header("Location:login_admin.php");
}

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM products WHERE id=$id");
$productInfo = mysqli_fetch_array($query);

$name = $_SESSION['admin_login'];
$getUsername = mysqli_query($db, "SELECT * FROM admin WHERE name1='$name'");
$username = mysqli_fetch_array($getUsername);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icon.PNG" type="">
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link href="../css/responsive.css" rel="stylesheet" />
    <title>ویرایش محصول </title>
</head>
<body>
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
                    <li class="list">
                        <a href="add_products.php">
                            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="title">اضافه کردن محصول</span>
                        </a>
                    </li>
                    <li class="list active">
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
                                <h3 class="card-title">ویرایش</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="do_edit.php" method="post">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">نام محصول</label>
                                    <input type="text"  class="form-control" name="product-name" value="<?php echo $productInfo['products_name'] ?>" placeholder="نام محصول ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">قیمت محصول</label>
                                    <input type="text"  class="form-control" name="product-price" value="<?php echo $productInfo['products_price'] ?>" placeholder="قیمت محصول ...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">توضیحات محصول</label>
                                    <textarea  class="form-control" name="product-desc" placeholder="توضیحات محصول ..."><?php echo $productInfo['products_desc'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">پیشنهاد</label>
                                    <textarea  class="form-control" name="product-offer" placeholder="پیشنهاد"><?php echo $productInfo['products_offer'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"> عکس محصول</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"  name="image-name" value="<?php echo $productInfo['products_image'] ?>">
                                            <input type="hidden" name="product-id" value="<?php echo $productInfo['id'] ?>">

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="edit-product" class="btn btn-primary">تایید</button>
                                </div>
                            </form>
                        </div>

                </div>
            </div>
        </main>
    

</body>
</html>
