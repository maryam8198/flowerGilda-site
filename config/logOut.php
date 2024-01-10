<?php

require_once 'config.php';
if (isset($_SESSION['session_login']))
{
    unset($_SESSION['session_login']);
    header("Location:../users/login_users.php");
}

else if (isset($_SESSION['admin_login']))
{
    unset($_SESSION['admin_login']);
    header("Location:../admin/login_admin.php");
}
?>