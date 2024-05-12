<?php
require 'connect.php';
$connection = dbConnect();

$id = $_GET['id'];

$viewQuery = "SELECT * FROM items WHERE ID = $id";
$result = $connection->query($viewQuery);

$device = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Rental</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href=".\images\walkman1.png">
</head>

<body>
    <h1>Electronic Device Store</h1>
    <nav>
    </nav>
    <img id="walkman" src="./images/walkman4.png">
    <h2>Details</h2>
    <div class="wrapper">
        <table>
            <tr>
                <th>Device Name</th>
                <td><?php echo $device['DeviceName']; ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><?php echo "$" . number_format($device['Price'], 2); ?></td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td><?php echo $device['Quantity']; ?></td>
            </tr>
        </table>
    </div>
    <button class="back-btn"><a href="view.php">Go Back</a></button>
</body>

</html>