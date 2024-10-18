<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        /* Add CSS for parallax effect */
        .parallax {
            /* Set a specific height */
            height: 500px;
            
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Style for the content inside parallax sections */
        .parallax-content {
            padding-top: 100px; /* Adjust as needed */
            color: #ffffff; /* Text color */
        }

        /* Other styles */
        h5 {
            color: blue;
        }

        .p1 {
            text-align: justify;
        } .scroll-to-top {
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us | AEON</title>
    <!-- Bootstrap and jQuery libraries -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Parallax section 1 -->
    <div class="parallax" style="background-image: url('img/wall1.jpg');">
        <div class="container parallax-content">
        <br><br>
            <h1>ABOUT AEON</h1><br>
            <div class="row">
                <div class="col-lg-6">
                  </div>
            </div>
        </div>
    </div>

    <!-- Content section -->
    <div class="container" id="content">
      
        <div class="container parallax-content" style="font-size:40px; color:#544c4a">
        <div class="row">
        <div class="col-lg-6"> 
            <br><br><br> 
           <p>An unparalleled legacy of excellence and mastery
    </p>
        </div>
            <div class="col-lg-6" style="text-align:justify; font-size:20px ;color:black">
            <br> <br><br><br><br>
            <p>
            Welcome to Aeon, where opulence and refinement converge.
            We meticulously curate a selection of exquisite watches that epitomize timeless elegance and unparalleled craftsmanship.
             Each piece undergoes a stringent vetting process to ensure it meets the pinnacle of luxury standards. 
            Immerse yourself in a world of refined taste and bespoke service at Aeon. </p><p> Thank you for entrusting us with your pursuit of timeless luxury.
            </p> <br><br><br> <br><br><br><br><br>
            </div>
        </div>
    </div>
    </div>

    <!-- Parallax section 2 -->
    <div class="parallax" style="background-image: url('img/wall2.jpg');">
        <div class="container parallax-content">
        <br><br><br><h1>BUILDING THE FUTURE</h1><br>
           
        </div>
    </div>

    <div class="container" id="content">
      
      <div class="container parallax-content" style="font-size:50px; color:#544c4a">
      <div class="row">
      <div class="col-lg-6"> 
          <br><br>
         <p>BUILDING THE FUTURE </p>
      </div>
          <div class="col-lg-6" style="text-align:justify; font-size:20px ;color:black">
          <br> <br><br><br><br>
          <p>
          <p id="p1">
          At AEON, we are committed to shaping a tomorrow filled with innovation, progress, and sustainability. 
          Our relentless pursuit of excellence drives us to embrace cutting-edge technologies, foster a culture of creativity, and forge meaningful partnerships that propel us towards a brighter future.</p>
        </div>
                </ul>
            </p> <br><br><br> <br><br><br><br><br>
          </div>
      </div>
  </div>
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

    

    <div class="parallax" style="background-image: url('img/wall3.jpg'); height: 900px;">
        <div class="container parallax-content">
            
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
