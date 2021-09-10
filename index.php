<?php
require "includes/common.php";
if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

    <!--navbar-->
    <?php
    include "includes/header.php";
    ?>

    <!--background-->
    <div id="banner_image">
        <div class="container-fluid">
            <div id="banner_content" class="center-block">

                <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>


            </div>

        </div>

    </div>

    <!--footer-->
    <?php
    include "includes/footer.php";
    ?>

</body>

</html>
