<?php  require_once '../config/config.php';?>
<?php
if(!isset($_SESSION['admin_login']))
{
    header("Location:login_admin.php");
}
$name = $_SESSION['admin_login'];
$getUsername = mysqli_query($db, "SELECT * FROM admin WHERE name1='$name'");
$username = mysqli_fetch_array($getUsername);
?>

<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styleadmin.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../images/icon.PNG" type="">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>پروفایل مدیر</title>
</head>
<body class="body-admin-panel">
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
                    <li class="list active">
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
                            <h3 class="card-title">مشخصات</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  action="admin_chngeInfo.php" method="post">
                            <div class="card-body ">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">نام کاربری</label>
                                    <label type="text" class="form-control" id="exampleInputEmail1" name="username"><?php echo $username['name1']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ایمیل</label>
                                    <label type="text" class="form-control" id="exampleInputEmail1" name="email" ><?php echo $username['email']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">نام و نام خانوادگی</label>
                                    <label type="text" class="form-control" id="exampleInputEmail1" name="fullname"><?php echo $username['display_name']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">شماره همراه</label>
                                    <label type="text" class="form-control" id="exampleInputEmail1" name="phone"><?php echo $username['phone']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">گذرواژه</label>
                                    <label type="text" class="form-control" id="exampleInputEmail1" name="password"><?php echo $username['password']; ?></label>
                                </div>
                            </div>
                        <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="admin_chngeInfo.php" class="btn btn-primary" name="chngeInfo">ویرایش اطلاعات</a>                            </div>
                        </form>
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

<?php

    if (isset($_POST['chngeInfo']))
    {
        $username2 =$_SESSION['session_login'];
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];


        $query = mysqli_query($db, "UPDATE  admin SET name1 ='$username2' , display_name ='$fullname'
                                 , phone ='$phone' , email ='$email' , password='$password'
                                 WHERE name1 ='$username2'");
        if ($query)
        {
            echo '<script>  alert(" ویرایش اطلاعات موفقیت آمیز بود ")</script>';
            $name = $_SESSION['session_login'];
            $getUsername = mysqli_query($db, "SELECT * FROM admin WHERE name1='$name'");
            $username = mysqli_fetch_array($getUsername);


        } else {
            echo '<script>  alert(" خطایی  پیش امده است لطفا مجدد امتحان کنید ")</script>';
        }


}
?>