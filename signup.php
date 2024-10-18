<?php
require_once("includes/common.php");

$name = $email = $password = $contact = $address = "";
$name_err = $email_err = $password_err = $contact_err = $address_err ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
        if (strlen($name) < 1) {
            $name_err = "Name can only contain letters, hyphens, and apostrophes.";
        }
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email address.";
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } else {
        $password = trim($_POST["password"]);
        if (strlen($password) < 8) {
            $password_err = "Password must be at least 8 characters long.";
        }
    }

    if (empty(trim($_POST["contact"]))) {
        $contact_err = "Please enter mobile/telephone number.";
    } else {
        $contact = trim($_POST["contact"]);
        if (strlen($contact) < 1) {
            $contact_err = "(ex. 09506437334)";
        }
    }
    
    if (empty(trim($_POST["address"]))) {
        $address_err = "Please provide your address.";
    } else {
        $address = trim($_POST["address"]);
        if (strlen($address) < 1) {
            $address_err = "Please provide your address.";
        }
    }


    if (empty($name_err) && empty($address_err) && empty($contact_err) && empty($email_err) && empty($password_err) ) {
        $sql = "INSERT INTO users (name, email, password, contact, address) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_email, $param_password, $param_contact, $param_address);
            $param_name = $name;
            $param_email = $email;
            $param_password = $password;
            $param_contact = $contact;
            $param_address = $address;
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Registration completed successfully. Please log in.');window.location.href='./login.php';</script>";
                exit;
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | AEON</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <br><br><br><br><br><br>
    <div class="container" style="width: 400px";>
        <div class="row min-vh-50 justify-content-center align-items-center">
            <div class="panel panel-primary" style="color: black; background-color: white;">
                <div class="panel-heading" style="color: white; background-color: black;">
                    <h2>SIGN UP</h2>
                    </div>
                    <div class="panel-body">
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" autofocus="on" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            <?php if (!empty($name_err)) echo "<span class='text-danger'>$name_err</span>"; ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <?php if (!empty($email_err)) echo "<span class='text-danger'>$email_err</span>"; ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            <?php if (!empty($password_err)) echo "<span class='text-danger'>$password_err</span>"; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact (ex. 09506437334)" maxlength="13" size="13" name="contact" required="true">
                            <?php if (!empty($contact_err)) echo "<span class='text-danger'>$contact_err</span>"; ?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required="true">
                            <?php if (!empty($address_err)) echo "<span class='text-danger'>$address_err</span>"; ?>
                        </div>
                       
                        
                        <button type="submit" name="submit" style="color: white; background-color: black;" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "includes/footer.php"; ?>
</body>

</html>
