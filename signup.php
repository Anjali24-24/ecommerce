<?php
require "includes/common.php";
if(isset($_SESSION['email'])){
    header("location:product.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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

<body>

    <!--navbar-->
    <?php
    include "includes/header.php"
    ?>

    <div style="padding:5%">
        <form method="POST" action="signup_script.php" class="col-xs-4 col-xs-offset-4">

            <h3><b>SIGN UP</b></h3>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="name" name="name" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" placeholder="email" name="email" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="password" name="pass" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" placeholder="contact" name="no" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="city" name="city" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="address" placeholder="address" name="address" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit
                </button>
            </div>


        </form>

    </div>

    <!--footer-->
    <?php
    include "includes/footer.php";
    ?>
    
</body>

</html>
