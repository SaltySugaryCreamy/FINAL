<?php
session_start();
require './includes/common.php';


// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<style>
    .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #808080; /* Luxurious gray color */
            color: #fff; /* White text color */
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            z-index: 9999;
            /* Adding some box shadow for a more luxurious look */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Transition for smoother hover effect */
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Hover effect for the button */
        .scroll-to-top:hover {
            background-color: #a9a9a9; /* Lighter shade of gray */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
</style>
<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of products page-->
        <title>Watches | AEON</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
            
    </head>

    <body>   
    

    <?php
        include 'includes/header.php';
        ?>
      
        <!-- Your other HTML content here -->

      
        <div class="container" id="content" >
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron" style="background-image: url('./img/goldbanner.webp');">
                <a href='index.php' style='text-decoration: none; color: #808080;'>
                    <h1>AEON<span style="color: red;">.</span></h1>
    </a>
                <p>Elevate Your Style, <br>One Watch at a Time.</p>

            </div>
            <hr>

            <div class="row text-center" id="omega">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/omega_constellation.avif" alt="">
                        <div class="caption">
                            <h3>Omega Constellation </h3>
                            <p>Price: Php 351,799.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                  
                                }
                            
                            
                            ?>
                                

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/omega_seamaster.avif" alt="">
                        <div class="caption">
                            <h3>Omega <br>Seamaster </h3>
                            <p>Price: Php 221,815.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/omega_speedmaster.webp" alt="">
                        <div class="caption">
                            <h3>Omega <br>Speedmaster </h3>
                            <p>Price: Php 282,478.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/omega_de_ville_tourbillon.avif" alt="">
                        <div class="caption">
                            <h3>Omega de ville tourbillon</h3>
                            <p>Price: Php 7,889,647.00</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="rolex">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/rolex_yachtmaster40.avif" alt="">
                        <div class="caption">
                            <h3>Rolex<br>Yacht-Master 40 </h3>
                            <p>Price: Php 2,537,500.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/rolex_daydate40.avif" alt="">
                        <div class="caption">
                            <h3>Rolex<br>Day-Date 40</h3>
                            <p>Price: Php 2,273,000.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/rolex_deepsea.avif" alt="">
                        <div class="caption">
                            <h3>Rolex<br>Deepsea</h3>
                            <p>Price: Php 2,852,500.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/rolex_cosmographdaytona.avif" alt="">
                        <div class="caption">
                            <h3>Rolex<br>Cosmograph </h3>
                            <p>Price: Php 2,232,500.00 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="cartier">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/cartier_santos.avif" alt="">
                        <div class="caption">
                            <h3>Cartier<br>Santos </h3>
                            <p>Price: Php 445,547.50 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/cartier_dumont.avif" alt="">
                        <div class="caption">
                            <h3>Cartier<br>Dumont</h3>
                            <p>Price: Php 224,211.00</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/cartier_tanklouis.avif" alt="">
                        <div class="caption">
                            <h3>Cartier<br>Tank Louis</h3>
                            <p>Price: Php 747,370.00</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/cartier_ballonbleu.avif" alt="">
                        <div class="caption">
                            <h3>Cartier<br>Ballon Bleu</h3>
                            <p>Price: Php 388,057.50</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                           
                                } else {
                                    ?>
                                    
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            
                            ?> 
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>
        


        <button class="scroll-to-top" onclick="scrollToTop()">^</button>


<script>
    // Function to scroll to the top of the page with smooth animation
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Show scroll-to-top button when scrolling down
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector('.scroll-to-top').style.display = "block";
        } else {
            document.querySelector('.scroll-to-top').style.display = "none";
        }
    }
</script>

 
        <?php include("includes/footer.php"); ?>
  
       
<!-- Your other HTML content here -->

<!-- CSS for custom alert -->
<style>
    .custom-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    .custom-alert-content {
        font-size: 18px;
        color: #333;
    }
</style>

<!-- JavaScript to show the custom alert when an item is added to cart -->
<script>
    // Function to show custom alert
    function showCustomAlert() {
        var alertBox = document.createElement('div');
        alertBox.classList.add('custom-alert');
        alertBox.innerHTML = `
            <div class="custom-alert-content">Successfully added to cart</div>
        `;
        document.body.appendChild(alertBox);
        // Hide the alert after a certain time (e.g., 3 seconds)
        setTimeout(function() {
            alertBox.style.display = 'none';
        }, 3000); // 3000 milliseconds = 3 seconds
    }

    // Add event listener to all 'Add to cart' buttons
    document.querySelectorAll('.btn[name="add"]').forEach(btn => {
        btn.addEventListener('click', function() {
            // Call the function to show custom alert when a button is clicked
            showCustomAlert();
        });
    });
</script>


    </body>

</html>