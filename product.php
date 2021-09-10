<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
        include "includes/header.php";
        include "includes/check-if-added.php";
    ?>
    
    <!--content-->

    <div class="container" style="padding:2%;">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras,watches and shirts for you. no need to hunt around, we have all in one place.
            </p>
        </div>
    </div>


    <div class="container">
        <row class="text-center">
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/5.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>DSLR</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(1)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/4.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>DSLR</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(2)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>                        
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/3.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>DSLR</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(3)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/2.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>DSLR</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(4)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>

        </row>

    </div>

    <!--row for watches-->

    <div class="container" style="padding-top:2%;">
        <row class="text-center">
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/9.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>watches</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(5)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/10.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>hand watch</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(6)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/11.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>watch</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(7)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/12.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>watch pro</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(8)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>

        </row>

    </div>

    <!--shirts-->

    <div class="container" style="padding:2%">
        <row class="text-center">
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/6.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>shirt 1</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(9)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/81.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>shirt 2</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(10)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/14.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>shirt</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(11)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/13.jpg" alt="camera" class="img-thumbnail">
                    <caption>
                        <h3>shirt 4</h3>
                        <p>Price Rs. 4000.00</p>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(12)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                    </caption>
                </thumbnail>

            </div>

        </row>

    </div>
    <div class="container ">
        <row class="text-center">
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/cam1.jpg" alt="camera" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>cannon eos</h3>
                        <p>price: Rs.39000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(13)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/sony.jpg" alt="camera" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>sony</h3>
                        <p>price: Rs.30000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(14)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/nicon.jpg" alt="camera" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>nicon</h3>
                        <p>price: Rs.49000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(15)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/olympus.jpg" alt="camera" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>olympus</h3>
                        <p>price: Rs.35000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(16)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
        </row>
    </div>
    <row class="text-center">
        <div class="container " style="padding:2%">
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/s1.jpg" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>H&H</h3>
                        <p>price: Rs. 5000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(17)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/s2.jpg" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>R&H</h3>
                        <p>price: Rs. 4000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(18)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/s5.jpg" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>just wow</h3>
                        <p>price: Rs. 2000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(19)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
            <div class="col-md-3 col-sm-6">
                <thumbnail>
                    <img src="images/s4.jpg" class="img-responsive img-thumbnail">
                    <caption>
                        <h3>zara</h3>
                        <p>price: Rs. 5000.00</p>
                    </caption>
                        <?php
                            if (!isset($_SESSION['email'])) 
                            { 
                        ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                            } 
                                else 
                                    {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(20)) 
                                        { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } 
                                        else 
                                        {
                        ?>
                            <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                                        }
                                    }
                        ?>
                </thumbnail>
            </div>
        </div>
    </row>



    <!--footer-->
    <footer>
        <center>
            <p>copyright &copy lifestyle store. all rights reserved. | contact us : +911782453672</p>
        </center>
    </footer>
</body>

</html>
