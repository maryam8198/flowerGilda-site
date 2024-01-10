<?php
require_once 'config.php';

$id=$_GET['id'];
$name = $_SESSION['session_login'];

$delete = mysqli_query($db, "DELETE FROM favariteflower WHERE product_id='$id' AND user_name='$name'");
if($delete)
{
    header("Location: ../favaritFlower.php");

}
else
{
    echo  "no";
}

?>