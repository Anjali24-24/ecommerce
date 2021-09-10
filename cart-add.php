<?php
require "includes/common.php";
$item_id =$_GET['id'];
$user_id = $_SESSION['id'];
$q ="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$q_result=mysqli_query($con,$q) or die(mysqli_error($con));
header("location:product.php");
?>