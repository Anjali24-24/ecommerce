<?php

function check_if_added_to_cart($item_id){
    require "common.php";
    $user_id = $_SESSION['id'];
    $q="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $q_execute = mysqli_query($con,$q);
    //$fetch_array=mysqli_fetch_array($q_execute);
    $rows=mysqli_num_rows($q_execute);
   
    if($rows>=1){
        return 1;
    }
    else{
        return 0;
    }
    
}

?>

