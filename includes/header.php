<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>header</title>
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
    
        <nav class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container">
                    <!--header-->
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">LifeStyle Store!</a>
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#col" >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                <div class="collapse navbar-collapse" id="col">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['email'])){
                        ?>
                            <!--logged in-->
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php                         
                                                          }
                            else{
                        ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                        <?php
                                }
                        ?>
                        
                    </ul>
                </div>
            
            </div>
        
        </nav>

    </body>
</html>
