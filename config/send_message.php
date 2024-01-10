<?php
require_once 'config.php';

if (isset($_POST['send_message']))
{
    $nameUse = $_POST['nameUser'];
    $phoneUser = $_POST['phoneUser'];
    $emailUser = $_POST['emailUser'];
    $messageUser = $_POST['messageUser'];

    $query = mysqli_query($db, "INSERT INTO usermmessages (user_name,	user_phone,user_email,	text_message)
               VALUE ('$nameUse', '$phoneUser', '$emailUser','$messageUser')");

    if ($query)
    {
        header("Location:../contact.php");
        echo '<script>  alert(" پیام شما با موفقیت ارسال گردید ")</script>';
    }
    else
    {
        echo '<script>  alert(" خطایی هنگام ارسال پیام پیش امده است لطفا مجدد امتحان کنید ")</script>';
        header("Location:../contact.php");

    }

}


?>