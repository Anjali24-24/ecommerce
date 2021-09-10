<?php
require "includes/common.php";
$mail= mysqli_real_escape_string($con,$_POST['email']);
$slc_query ="SELECT id FROM users WHERE email='$mail' ";
$slc_query_result=mysqli_query($con,$slc_query) or die(mysqli_error($con));
$data = mysqli_fetch_array($slc_query_result);
$r= mysqli_num_rows($slc_query_result);
$n =$_POST['name'];
$p = md5($_POST['pass']);
$cont = $_POST['no'];
$city = $_POST['city'];
$adr = $_POST['address'];
if($r>0){
    echo "error!! email already exists";
}
else{
    
    $q="INSERT into users(name,email,pass,contact,city,address) values('$n','$mail','$p','$cont','$city','$adr')";
    $execute=mysqli_query($con,$q) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['id']=$id;
    header("location:product.php");
}
?>