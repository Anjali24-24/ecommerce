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
    <title>settings</title>
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
    <?php include "includes/header.php"; ?>
    
    <!--content-->
    <div class="col-xs-6 col-xs-offset-3" style="padding:5%">
        <form class="form-group" action="settings_script.php" method="POST">
            <h2>CHANGE PASSWORD</h2>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="old password" name="op" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="new password" name="np" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="re enter password" name="rp" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Change</button>
            </div>

        </form>

    </div>


    <!--footer-->
    <?php include "includes/footer.php"; ?>
</body>

</html>
