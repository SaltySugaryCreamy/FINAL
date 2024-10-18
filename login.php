<?php
session_start();
require("includes/common.php");

// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
    exit; // Add exit to prevent further execution
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the user through login page
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement with placeholders
    $query = "SELECT id, email FROM users WHERE email=? AND password=?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if the query returns any row
        if (mysqli_stmt_num_rows($stmt) == 1) {
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $user_id, $user_email);

            // Fetch result
            mysqli_stmt_fetch($stmt);

            // Store user data in session variables
            $_SESSION['email'] = $user_email;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['loggedin'] = TRUE;

            // Redirect to products page
            header('location: products.php');
            exit; // Add exit to prevent further execution
        } else {
            // If the email and password are not present in the database, redirect with error message
            $error = "<span class='red'>Please enter correct Email and Password</span>";
            header('location: login.php?error=' . $error);
            exit; // Add exit to prevent further execution
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AEON</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="./js/script.js"></script>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <br><br><br><br><br><br>    
    <div class="container" style="width: 400px";>
        <div class="row min-vh-50 justify-content-center align-items-center">
            <div class="panel panel-primary" style="color: black; background-color: white;">
                <div class="panel-heading" style="color: white; background-color: black;">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning"><i>Login to make a purchase</i></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <input id="email" class="form-control" placeholder="Email" autofocus="on" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="togglePassword" onclick="togglePassword()">
                            <label for="togglePassword" class="form-check-label">Show Password</label>
                        </div>
                        <button type="submit" name="submit" style="color: white; background-color: black;" class="btn btn-primary">Login</button>
                        <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form>
                </div>
       
                <div class="panel-footer" style="color: black;">Don't have an account? <a href="signup.php">Register</a></div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
