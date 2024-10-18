<?php
session_start();
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO `user_item`(`user_id`, `item_id`, `status`) VALUES($user_id, $item_id, 1)";
    mysqli_query($conn, $query)  or die(mysqli_error($conn));
    header('location: products.php');
}
?>   