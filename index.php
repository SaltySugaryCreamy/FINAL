<?php
session_start();
//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.


?>


<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Welcome | AEON</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1 style='color: white; font-size: 45px;'>Elevate Your Style, <br>One Watch at a Time.</h1>
                            <p style='color: #f8f8f8; font-size: 15px;'>Time elevated, Style defined </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div><br><br><br><br><br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#omegs" >
                            <div class="thumbnail">
                                <img src="img/omegafly.jpg" alt="">
                                <div class="caption">
                                    <h3>Omega</h3>
                                    <p>Omega is a brand with a rich heritage and a reputation for precision and excellence.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#rolex" >
                            <div class="thumbnail">
                                <img src="img/rolexfly.webp" alt="">
                                <div class="caption">
                                    <h3>Rolex</h3>
                                    <p>Rolex is synonymous with luxury, precision, and status conveying its timeless appeal. </p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#cartier" >
                            <div class="thumbnail">
                                <img src="img/cartierfly.jpg" alt="">
                                <div class="caption">
                                    <h3>Cartier</h3>
                                    <p>Cartier is renowned for its elegance, sophistication, and timeless luxury. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>