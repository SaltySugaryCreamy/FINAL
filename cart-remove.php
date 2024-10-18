<?php
session_start();
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
    
    // Modify the SQL query to delete only one row
    $query = "DELETE FROM user_item WHERE item_id='$item_id' AND user_id='$user_id' AND status= 1 LIMIT 1";
    $res = mysqli_query($conn, $query) or die($mysqli_error($conn));
    header("location:cart.php");
}
?>
