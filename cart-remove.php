<?php

require "include/common.php";
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$q="DELETE FROM user_items where user_id= '$user_id' AND item_id='$item_id'";
$qresult=mysqli_query($con,$q) or die(mysqli_error($con));
header("location:cart.php");


?>

