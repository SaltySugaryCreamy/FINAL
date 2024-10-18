<?php
session_start();
require("includes/common.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = mysqli_real_escape_string($conn, $_POST['old-password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['password1']);
    
    $user_id = $_SESSION['user_id'];
    
    // Check if the current password matches the one in the database
    $query = "SELECT password FROM users WHERE id='$user_id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];
    
    if ($current_password === $stored_password) {
        // Current password is correct
        if ($new_password === $confirm_password) {
            // Update password
            $update_query = "UPDATE users SET password='$new_password' WHERE id='$user_id'";
            mysqli_query($conn, $update_query) or die(mysqli_error($conn));
            echo "<script>alert('Password updated successfully.'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('New password and confirm password do not match.'); window.location='settings.php';</script>";
        }
    } else {
        echo "<script>alert('Current password is incorrect.'); window.location='settings.php';</script>";
    }
}
?>
