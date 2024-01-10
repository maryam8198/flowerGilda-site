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
    <meta charset="UTF-8">
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
                    <li class="list active">
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
                <!--cards-->
                <div class="CardBox">
                    <!-- باکس نمایش تعداد محصولات-->
                    <a href="products.php">
                        <div class="card">
                            <div>
                                <div class="numbers">
                                    <?php
                                    $countUser = mysqli_query($db,"SELECT id FROM products ");
                                    echo mysqli_num_rows($countUser);
                                    ?>
                                </div>
                                <div class="CardNames">محصولات</div>
                            </div>

                            <div class="icon-case">
                                <img src="../images/producticon.png">
                            </div>
                        </div>
                    </a>
                    <!-- باکس نمایش تعداد کاربران-->
                    <a href="users.php">
                        <div class="card">
                                <div>
                                    <div class="numbers">
                                        <?php
                                        $countUser = mysqli_query($db,"SELECT id FROM users ");
                                        echo mysqli_num_rows($countUser);
                                        ?>
                                    </div>
                                    <div class="CardNames">کاربر</div> 
                                </div>
                                <div class="icon-case">
                                    <img src="../images/usericon.png">
                                </div>
                        </div>
                    </a>
                    <!-- باکس نمایش تعداد کامنت ها-->
                    <a href="comments.php">
                        <div class="card">
                                <div>
                                    <div class="numbers">
                                        <?php
                                        $countUser = mysqli_query($db,"SELECT id FROM usermmessages ");
                                        echo mysqli_num_rows($countUser);
                                        ?>
                                    </div>
                                    <div class="CardNames">نظر</div>
                                </div>
                                <div class="icon-case">
                                    <img src="../images/commenticon.png">
                                </div>
                        </div>
                    </a>
                    <!-- باکس نمایش تعداد سفارشات-->
                    <a href="orders.php">
                        <div class="card">
                            <div>
                                <div class="numbers">   
                                    <?php
                                    $countUser = mysqli_query($db,"SELECT id FROM orders ");
                                    echo mysqli_num_rows($countUser);
                                    ?>
                                </div>
                                <div class="CardNames">سفارش</div>
                            </div>
                            <div class="icon-case">
                                <img src="../images/ordericon.png">
                            </div>
                        </div>
                    </a>
                </div>

                <!--سفارشات اخیر-->
                <div class="details">
                    <div class="RecentOrder">
                        <div class="CardHeader">
                            <h2>سفارشات اخیر</h2>
                            <a href="orders.php" class="btn">دیدن همه</a>
                        </div>
                        <div class="CardBody">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>شماره فاکتور</th>
                                        <th>نام خریدار</th>
                                        <th>وضعیت</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $getOrders = mysqli_query($db, "SELECT * FROM orders order by id desc limit 4");
                                    ?>
                                    <tr>
                                        <td>
                                            <?php while ($row = mysqli_fetch_array($getOrders)) { ?>
                                        <tr></tr>
                                        <td>
                                            <?php echo $row['id'] ;?>
                                        </td>
                                        <td>
                                            <?php echo $row['user_email'] ;?>
                                        </td>
                                        <td>
                                            <?php
                                            if($row['is_paid']==0)
                                            {echo "پرداخت نشده" ;}
                                            else
                                            {echo "پرداخت شده" ;}
                                           ?>
                                        </td>
                                        <td>
                                            <a href="order_detail.php?order-id=<?php echo $row['id'] ?>" class="btn">مشاهده</a>
                                        </td>


                                        </tr>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!--                    مشتریان -->
<!--                    <div class="ResentCustomers">-->
<!--                        <div class="CardHeader">-->
<!--                            <h2>مشتریان اخیر</h2>-->
<!--                            <a href="users.php" class="btn">دیدن همه</a>-->
<!--                        </div> -->
<!--                        <div class="CardBody">-->
<!--                            <div class="table-responsive">-->
<!--                                <table width="100%">-->
<!--                                    <thead>-->
<!--                                        <tr>-->
<!--                                            <th>نام</th>-->
<!--                                            <th>ایمیل</th>-->
<!--                                        </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                        --><?php
//                                        $query = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC");
//                                        while ($row = mysqli_fetch_array($query)) { ?>
<!--                                            <tr>-->
<!--                                                <td>--><?php //echo $row['name1'] ?><!--</td>-->
<!--                                                <td>--><?php //echo $row['email'] ?><!--</td>-->
<!--                                                <td><a href="#" class="btn">مشاهده</a></td>-->
<!--                                            </tr>-->
<!--                                        --><?php //} ?>
<!--                                    </tbody>-->
<!--                                </table>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        -->
<!--                    </div> -->
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
        /*let list =document.querySelectorAll('.navigations li');
        for (let i=0;i=list.length;i++){
            list[i].onclick=function(){
                let i=0;
                while(j<list.length){
                    list[j++].className='navigations li';
                }
                list[i].className='active';
            }

        }
        function activelink(){
            list.forEach((item)=>
            item.classList.remove('hovered'));
            this.classList.add('hovered');   
        }
        list.forEach((item)=>
        item.addEventListener('mouseover',activelink));*/
    </script>

</body>
</html>