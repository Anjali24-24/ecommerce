<?php
require "includes/common.php";   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    <?php
    include "includes/header.php";
    ?>

    <!--login form-->
    <div class="col-xs-4 col-xs-offset-4" style="padding-top:10%" >
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p>LOGIN</p>
            </div>
            <div class="panel-body">
                <p class="text-warning">login to make purchase!!</p>
                <form action="login_submit.php" method="POST">
                    <div class="form-group">
                        <input type="email" placeholder="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Login
                        </button>
                    </div>

                </form>
            </div>
            <div class="panel-footer">
                <p>Don't have an account?? <a href="signup.php">Register</a></p>
            </div>

        </div>
    </div>

    <!--footer-->
<?php
include "includes/footer.php";
?>

</body>

</html>
