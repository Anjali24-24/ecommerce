<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header("location:index.php");
    }
    else{
        $user_id=$_SESSION['id'];
        $email=$_SESSION['email'];
        $new_pass=md5(mysqli_real_escape_string($con,$_POST['np']));
        $retype_pass=md5(mysqli_real_escape_string($con,$_POST['rp']));
        if($new_pass == $retype_pass){
            $qu="UPDATE users SET pass='$new_pass' WHERE email = '$email' AND id = '$user_id'";
            $res=mysqli_query($con,$qu);
            header("location:pass_changed.php");
        }
        else{
            
            echo "password do not match. TRY AGAIN";
            header("location:settings.php");
        }
    }
?>
