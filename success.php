<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <!--css and bootstrap links-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--adding css-->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <!--header-->
    <?php
        include "includes/header.php";
        $user_id=$_SESSION['id'];
        $q="SELECT item_id FROM user_items WHERE user_id='$user_id'";
        $res=mysqli_query($con,$q);
        
        while($row=mysqli_fetch_array($res)){
            $item_id=$row['item_id'];
            $q1="UPDATE user_items SET status ='confirmed' WHERE item_id ='$item_id'";
            $res1=mysqli_query($con,$q1);
            
        }
    ?>
    <div class="container text-center btn-success jumbotron" style="margin-top:10%">
        <h3>your order is confirmed</h3>
        <p>Thank you for shopping with us. <a href="product.php">Click here​</a> to purchase any other item.</p>

    </div>
    
    <?php
        include "includes/footer.php";
        ?>
</body>

</html>
