<?php  require_once '../config/config.php';?>
<?php
if(isset($_SESSION['admin_login']))
{
    header("Location:adminPanel.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام مدیر</title>
    <link rel="shortcut icon" href="../images/icon.PNG" type="">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="mainsinguppage1">
    <p class="singup"> ثبت نام </p>
    <form class="form2"  method="post" action="singUpAdmin.php">
        <input type="text" name="name" class="emailsingup" placeholder="نام کاربری">
        <input type="text" name="display_name" class="emailsingup" placeholder="نام و نام خانوادگی">
        <input type="text" name="phone" class="emailsingup" placeholder="شماره موبایل">
        <input type="email" name="email" class="emailsingup" placeholder="ایمیل">
        <input type="password"  name="password" class="passwordsingup" placeholder="گذرواژه">
        <input type="password" name="password_conf" class="passwordsingup" placeholder="تکرار گذرواژه">
        <br>
        <input type="submit" class="submitsingup" name="regester" value="ثبت نام">
        <p class="ForgetThePassword"><a href="login_admin.php">ورود به سایت </a></p>
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['regester']) && isset($_POST['name'])&& !empty($_POST['name'])
    && isset($_POST['display_name'])&& !empty($_POST['display_name'])&& isset($_POST['phone'])&& !empty($_POST['phone'])
    && isset($_POST['email'])&& !empty($_POST['email'])&& isset($_POST['password'])&& !empty($_POST['password'])
    && isset($_POST['password_conf'])&& !empty($_POST['password_conf']))
{
    $name = $_POST['name'];
    $display_name = $_POST['display_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    $Check = mysqli_query($db, "SELECT * FROM admin WHERE name1 ='$name'");
    if (mysqli_num_rows($Check) > 0)
    {
        echo '<script>  alert("شما قبلا ثبت نام کرده اید....")</script>';
    }
    else
    {
        if ($password != $password_conf)
        {
            echo '<script>  alert("!!!اطلاعات وارد شده صیحیح نیست")</script>';
        }
        else {
            session_start();
            $_SESSION['admin_login'] = $name;
            mysqli_query($db, "INSERT INTO admin (name1,display_name,phone,email,password)
            VALUE ('$name','$display_name','$phone','$email','$password')");

            echo "ثبت نام با موفقیت انجام شد ...";
            header("Location: adminPanel.php");

        }
    }
}

?>
