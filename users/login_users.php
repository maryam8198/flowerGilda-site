
<?php  require_once '../config/config.php';?>
<?php
if(isset($_SESSION['session_login']))
{
    header("Location:usersPanel.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود کاربر</title>
    <link rel="shortcut icon" href="../images/icon.PNG" type="">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="main">
        <p class="login">ورود</p>
        <form  method="post" action="login_users.php">
            <input type="text" class="UserName" name="name" placeholder="نام کاربری">
            <input type="password" class="password"  name="password" placeholder="گذرواژه">
            <input type="submit" name="login_user" class="submit" value="ورود">

            <p class="singuppage"><a href="singup_users.php">تا به حال ثبت نام کردید؟</p>
    </div>
</body>
</html>

<?php

if(isset($_POST['login_user']) && isset($_POST['name']) && isset($_POST['password']))
{
    $name = $_POST['name'];
    $password =$_POST['password'];

    $loginCheck = mysqli_query($db,"SELECT * FROM users WHERE name1 ='$name' AND password = '$password'");
    if(mysqli_num_rows($loginCheck)>0)
    {
        $_SESSION['session_login'] = $name;
        echo "ثبت نام با موفقیت انجام شد ...";
        header("Location: usersPanel.php");


    }
    else{
        echo '<script>  alert("!!! نام کاربری یا گذرواژه اشتباه است")</script>';
    }

}

?>