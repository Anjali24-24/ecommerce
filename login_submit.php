<?php
require "includes/common.php";
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);
$hashed_pass=md5($pass);
$select_query = "SELECT id,email FROM users WHERE email='$email' AND pass='$hashed_pass'";
$query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$rows=mysqli_num_rows($query_result);
if($rows==0){
    echo "Sorry no such user exists!!"."<br>";
}
else{
    $fetch = mysqli_fetch_array($query_result);
    //$fetch['id']=$fetch['id']+1;
    //$fetch['email']=$email;
    $_SESSION['email']=$email;
    $_SESSION['id']=$fetch['id'];
    echo $fetch['id'];
    header("location:product.php");
}
?>

