<?php
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart page</title>
    <!--bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--adding css-->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body style="padding:5%">
    <!--navbar-->
    <?php
        require "includes/header.php";
        $user_id= $_SESSION['id'];
        $q="SELECT p.name,p.price,p.id from items p INNER JOIN user_items up ON up.item_id = p.id where up.user_id='$user_id' AND up.status = 'Added to Cart'";
        $execute=mysqli_query($con,$q) or die(mysqli_error($con));
        $r=mysqli_num_rows($execute);
        if($r==0){
            echo '<h3 class="text-center" style="padding-bottom:2%">Add items to the cart first!! <a href="product.php">Add items!</a></h3>'; 
            $sum=0;
            
        }
        else
        {
            $sum=0;
        }
    ?>

    <!--table-->
    <div class="col-xs-6 col-xs-offset-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th >item number</th>
                    <th>item name</th>
                    <th>price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while($item=mysqli_fetch_array($execute)){
                    ?>
                
                <tr>
                    <td><?php echo $item['id'] ?> </td>
                    <td><?php echo $item['name'] ?></td>
                    <td>
                        <?php 
                            $sum += $item['price']; 
                            echo $item['price'];
                        ?>
                    </td>
                    <td>
                        <a href="cart-remove.php?id= <?php echo $item['id']; ?> "Remove></a>
                    </td>
                </tr>
                <?php
                        }
                ?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rs. <?php echo $sum; ?> </td>
                    <td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!--footer-->
    <?php
        include 'includes/footer.php';
    ?>
    
</body>

</html>

