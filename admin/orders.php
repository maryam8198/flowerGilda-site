<?php require_once '../config/config.php'; ?>
<?php
if (isset($_SESSION['admin-login'])) {
  header("Location: login_admin.php");
}
$getOrders = mysqli_query($db, "SELECT * FROM orders");

$name = $_SESSION['admin_login'];
$getUsername = mysqli_query($db, "SELECT * FROM admin WHERE name1='$name'");
$username = mysqli_fetch_array($getUsername);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>سفارشات</title>
  <link href="../css/styleadmin.css" rel="stylesheet" />
  <link href="../css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../images/icon.PNG" type="">
</head>
<body class="prders">
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
                    <li class="list">
                        <a href="products.php">
                            <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                            <span class="title">لیست محصولات</span>
                        </a>
                    </li>
                    <li class="list active">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">لیست سفارشات</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><ion-icon name="search-outline"></ion-icon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>شماره‌ی فاکتور</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php while ($row = mysqli_fetch_array($getOrders)) { ?>

                                            <tr>
                                                    <td>
                                                        <a class="btn" href="order_detail.php?order-id=<?php echo $row['id'] ?>">  فاکتور شماره   <?php echo $row['id'] ?></a>
                                                    </td>
                                            </tr>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
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
