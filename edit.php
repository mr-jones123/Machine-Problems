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
    <h1>Edit Purchases</h1>
    <div id="view">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $device['ID']; ?>">
            <label for="name">Device Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $device['DeviceName']; ?>"><br>
            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price" value="<?php echo $device['Price']; ?>"><br>
            <label for="quantity">Quantity:</label><br>
            <input type="text" id="quantity" name="quantity" value="<?php echo $device['Quantity']; ?>"><br>
            <input type="submit" value="Update" id="update">
            <button id="btn-goback"><a href="view.php">Go Back</a></button>
        </form>
    </div>
    <button class="back-btn"><a href="view.php">Go Back</a></button>
</body>

</html>