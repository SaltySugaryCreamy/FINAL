<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Item Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Item Information</h2>

<table>
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Item ID</th>
        <th>Status</th>
        <th>Date Time</th>
    </tr>
    <?php
    // Assuming you have a database connection established already
    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbname = "store";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the user_item table
    $sql = "SELECT id, user_id, item_id, status, date_time FROM user_item";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["item_id"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "<td>" . $row["date_time"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No data found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
