<?php  require_once 'config/config.php';?>
<?php
$query = mysqli_query($db, "SELECT * FROM products ");
$product = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/icon.PNG" type="">
    <title> خدمات مشاوره و فروش گل و گیاه گیلدا </title>
<!--    owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />   
    <link  rel="stylesheet" href="css/style.css" type="text/css"/>
    <link  rel="stylesheet" href="css/rtl.css" type="text/css"/>
    <link  rel="stylesheet" href="css/responsive.css" />
    <link  rel="stylesheet" href="css/bootstrap.css"/>
    <link  rel="stylesheet" href="css/font-awesome.min.css"/>
</head>

<body>

<div class="hero_area">
    <div class="hero-bg">
        <img src="images/hero-bg.jpg"alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <div class="logo">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            گیلدا
                        </span>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">خانه <span class="sr-only">(current)</span> </a>
                        </li>
                        <li class="nav-item submenu" >
                            <a class="nav-link">گل</a>
                            <div class="megamenu">
                                <div class="content">
                                    <div class="row">
                                        <h1 class="title">نوع دیزاین:</h1>
                                        <ul class="megamenu-links">
                                            <li><a class="" href="allProduct.php">همه ی گل ها</a></li>
                                            <li><a class="" href="dasteGol.php">دسته گل</a></li>
                                            <li><a class="" href="backsGol.php">سبد گل</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <h1 class="title">نوع گل:</h1>
                                        <ul class="megamenu-links">
                                            <li><a class="" href="rozFlower.php">رز</a></li>
                                            <li><a class="" href="orchidFlower.php">ارکیده</a></li>
                                            <li><a class="" href="mikhakFlower.php">میخک</a></li>
                                            <li><a class="" href="aftabgarddonFlower.php">آفتاب گردان</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <h1 class="title">مناسبت ها:</h1>
                                        <ul class="megamenu-links">
                                            <li><a class="" href="khoustaghari.php">خواستگاری</a></li>
                                            <li><a class="" href="tarhim.php">ترحیم</a></li>
                                            <li><a class="" href="tavalod.php">تولد</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <img src="images/fmm.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link">گیاهان</a>
                            <div class="megamenu">
                                <div class="content">
                                    <div class="row">
                                        <h1 class="title">دسته بندی:</h1>
                                        <ul class="megamenu-links">
                                            <li><a class="" href="sansoriaFlower.php">سانسوریا</a></li>
                                            <li><a class="" href="trariumFlower.php">تراریوم</a></li>
                                            <li><a class="" href="kaktusFlower.php">کاکتوس و ساکولنت</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <h1 class="title">اکسوری:</h1>
                                        <ul class="megamenu-links">
                                            <li><a class="" href="goldan.php">گلدان</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <img src="images/pmm.jpg" alt="" >
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="users/login_users.php">ورود/ثبت نام</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php"> درباره ما</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"> ارتباط با ما</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link cart-link" href="users/cart.php">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                            c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                </g>
                            </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                            C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                            c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                            C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                            c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                    </svg>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 mx-auto ">
                                <div class="detail-box">
                                    <h1>
                                        ناب و طبیعی خرید کنید
                                    </h1>
                                    <p>
                                        کیفیتی که انتظار دارید قیمتی که انتظار ندارید در گیلدا
                                        <br/>
                                        حس تازگی و زندگی در فروشگاه گیلدا
                                        <br>
                                        بزرگترین بازار آنلاین  گل
                                    </p>
                                    <div class="btn-box">
                                        <a href="Consulting.php" class="btn1">
                                            مشاوره
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>
    <!-- end slider section -->
</div>

<!-- plant section -->
<section class="plant_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                جدید ترین ها
            </h2>
        </div>
        <div class="row">
            <?php  $query=mysqli_query($db,"select * from products order by id desc limit 4");
            while ($row = mysqli_fetch_array($query))
            {?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="product.php?id=<?php echo $row['id']?>">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                    </g>
                                        <g>
                                            <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                  </svg>
                                </a>
                                <a href="config/add_to_favarite.php?id=<?php echo $row['id']?>">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/<?php echo $row['products_image'] ?>">
                        </div>
                        <div class="detail-box">
                            <a href="">
                                <?php echo $row['products_name'] ?>
                            </a>
                            <h6>
                                <?php echo "تومان". " ". $row['products_price'] ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>

    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                پیشنهادات
            </h2>
        </div>
        <div class="row">
        <?php  $query=mysqli_query($db,"select * from products WHERE products_offer=1 order by id desc limit 4 ");
        $count=0;

        while ($row = mysqli_fetch_array($query))
        {?>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="product.php?id=<?php echo  $row['id']?>">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                    </g>
                                        <g>
                                            <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                  </svg>
                                </a>
                                <a href="config/add_to_favarite.php?id=<?php echo $row['id']?>">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/<?php echo $row['products_image'] ?>">
                        </div>
                        <div class="detail-box">
                            <div>
                                <a href="">
                                    <?php echo $row['products_name'] ?>
                                </a>
                            </div>
                            <h6>
                                <?php echo "تومان". " " .$row['products_price']?>
                            </h6>
                        </div>
                    </div>
                </div>
        <?php }
        ?>
            </div>

    </div>
    </div>
</section>
<!-- end plant section -->

<!-- why section -->
<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                چرا ما ؟
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/w4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            انتخاب گل یا گیاه
                        </h5>
                        <p>
                            دسته گل، سبد گل، گیاه گلدانی یا ... انتخاب با شماست
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/w5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            انتخاب زمان و مکان تحویل
                        </h5>
                        <p>
                            دوست دارید سفارشتان امروز یا فردا ارسال شود؟ انتخاب زمان با شما..
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="images/w3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            تحویل در نهایت احترام
                        </h5>
                        <p>
                            در زمان انتخابی شما تازه‌ترین گل‌ها و گیاهان را تحویل می‌دهیم.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end why section -->

<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                ارتباط با ما
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container contact-form">
                    <form action="index.php" method="post">
                        <div>
                            <input type="text" name="nameUser" placeholder="نام " />
                        </div>
                        <div>
                            <input type="text" name="phoneUser" placeholder=" تلفن" />
                        </div>
                        <div>
                            <input type="email" name="emailUser" placeholder="ایمیل" />
                        </div>
                        <div>
                            <input type="text" name="messageUser" class="message-box" placeholder="متن پیام " />
                        </div>
                        <div class="btn_box">
                            <button name="send_message">
                                ارسال
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->


<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <a href="" class="footer-brand">
            گیلدا
        </a>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="footer_items">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box ">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        بهترین ها را با ما تجربه کنید
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box ">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        +98 9134567890
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        gildaGol@gmail.com
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-box">
            <h4>
                دنبال کردن ما
            </h4>
            <div class="box">
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-info">
        <div class="container">
            <p>

        </div>
    </div>
</footer>
<!-- footer section -->
<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->

</body>

</html>

<?php

if (isset($_POST['send_message']))
{
    $nameUse = $_POST['nameUser'];
    $phoneUser = $_POST['phoneUser'];
    $emailUser = $_POST['emailUser'];
    $messageUser = $_POST['messageUser'];

    $query = mysqli_query($db, "INSERT INTO usermmessages (user_name,user_phone,user_email,text_message,is_confirm)
               VALUE ('$nameUse', '$phoneUser', '$emailUser','$messageUser','0')");

    if ($query)
    {
        echo '<script>  alert(" پیام شما با موفقیت ارسال گردید ")</script>';
    }
    else
    {
        echo '<script>  alert(" خطایی هنگام ارسال پیام پیش امده است لطفا مجدد امتحان کنید ")</script>';

    }

}


?>