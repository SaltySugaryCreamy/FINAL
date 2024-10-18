<?php
session_start();
require './includes/common.php';


// Redirect to login page if user is not logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings | AEON</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .input-group-addon {
            cursor: pointer;
            z-index: 2;
            color: #aaa;
            border: none;
            background: none;
        }
        .input-group-addon input {
            position: absolute;
            visibility: hidden;
        }
        .input-group-addon i {
            position: relative;
            z-index: 1;
            cursor: pointer; /* Add cursor pointer for the eye icon */
        }
        .input-group-addon input:checked + i:before {
            content: "\f070"; /* Eye icon for showing password */
        }
        .input-group-addon i:before {
            content: "\f06e"; /* Eye-slash icon for hiding password */
            font-family: 'Font Awesome 5 Free';
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <br><br><br><br><br><br>
    <div class="container-fluid" id="content">
        <div class="col-lg-4 col-md-6">
        
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" id="settings-container">
                <h4>Change Password</h4>
                <form action="settings_script.php" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Old Password" required>
                            <span class="input-group-addon">
                                <input type="checkbox" id="show-old-password" onclick="toggleVisibility('old-password')"> 
                                <label for="show-old-password"><i class="fas fa-eye-slash"></i></label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="new-password" placeholder="New Password" required>
                            <span class="input-group-addon">
                                <input type="checkbox" id="show-new-password" onclick="toggleVisibility('new-password')"> 
                                <label for="show-new-password"><i class="fas fa-eye-slash"></i></label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password1" id="new-password1" placeholder="Re-type New Password" required>
                            <span class="input-group-addon">
                                <input type="checkbox" id="show-new-password1" onclick="toggleVisibility('new-password1')"> 
                                <label for="show-new-password1"><i class="fas fa-eye-slash"></i></label>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                </form>
            </div>
        </div>
    </div><br><br><br><br><br>
    <?php include("includes/footer.php"); ?>
    
    <script>  
        function toggleVisibility(passwordId) {  
            var passwordField = document.getElementById(passwordId);
            if (passwordField.type === "password") {  
                passwordField.type = "text";  
            } else {  
                passwordField.type = "password";  
            }  
        }  
    </script>  
</body>
</html>
