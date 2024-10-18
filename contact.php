<?php
// Initialize variables
$success_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields are not empty
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['feedback'])) {
        // Form fields are not empty, set success message
        $success_message = "Thank you for your feedback!";
    } else {
        // Form fields are empty, set error message
        $success_message = "Please fill in all the fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | AEON</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .p1 {
            text-align: justify;
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<br><br><br><br>
<div class="container" id="content">
    <div class="row">
        <div class="col-lg"></div><br><br>
        <div class="col-lg">
            <div style="float: right;">
                <h1>COMPANY INFORMATION</h1><br>
                <p id="p1">Polomolok, South Cotabato, Philippines - 9504</p><br>
                <p id="p1">Phone : +63 9506437334</p><br>
                <p id="p1">Email : nashjustincastor@gmail.com</p>
            </div>
            <h1>CONTACT US</h1>
            <div style="float: left;">
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" cols="60" name="feedback" placeholder="Feedback" class="form-control" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success my-5">
                        <?php echo $success_message; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><br><br><br><br><br><br><br>
<?php include 'includes/footer.php'; ?>
</body>
</html>
