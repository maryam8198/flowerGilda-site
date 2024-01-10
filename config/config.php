<?php
$db = mysqli_connect('localhost','root','','poroject');
if(!$db)
{
    echo mysqli_connect_error();
}

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();


?>


