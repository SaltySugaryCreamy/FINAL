<?php 
session_start();
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?> 
<style>
    /* Center the table */
    .table-container {
        display: flex;
        justify-content: center;
    }

    table {
        width: 100%;
        max-width: 200px; /* Adjust the maximum width as needed */
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .remove_item_link {
        color: red;
        text-decoration: none;
    }

    .remove_item_link:hover {
        text-decoration: underline;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | AEON</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <br><br><br>
          
            
                <div class="table-container">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;$id='';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr>
                                    <td>" . "#" . $row["id"] . "</td>
                                    <td>" . $row["Name"] . "</td>
                                    <td>Php " . $row["Price"] . "</td>
                                    <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td>
                                  </tr>";
                        } 
                                $id = rtrim($id, ", ");
                                ?>
                                <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Php <?php 
                            $formatted_sum= number_format($sum); 
                            echo $formatted_sum?></td>
                            <td><a href='success.php?itemsid=<?php echo $id; ?>' class='btn btn-primary'>Confirm Order</a></td>
                        </tr>
                            </tbody>
                            <?php
                        } else {
                            
                        
                            echo "
                           
                                <div class='row'> <br><br><br><br>
                                    <div style='text-align: center; font-size: 50px; padding-left: 700px;'>
                                    <a href='products.php' style='text-decoration: none; color: inherit;'>
                                    <img src='img/cart.jpg'> 
                                       </a>
                                        </div>
                                
                            </div>";
                        
                            
                            


                        }
                        ?>
                        
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br>
        <?php include("includes/footer.php"); ?>
    </body>
</html>