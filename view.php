<?php
function viewDevices()
{
    $localhost = "localhost";
    $username = "root";
    $password = "Themaclife123@";
    $database = "useraccounts";

    $connection = new mysqli($localhost, $username, $password, $database);
    $sql = "SELECT * FROM items";
    $result = $connection->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Start an HTML table
        echo "<table>";
        echo "<tr><th>Device Name</th><th>Price</th><th>Quantity</th></tr>";

        // Loop through each row and display the data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["DeviceName"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "<td>" . $row["Quantity"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Rental</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Video Rental</h1>
    <div id="viewWrapper">
        <form method="POST" action="view.php">
            <?php viewDevices()   ?>
        </form>

    </div>

</body>

</html>