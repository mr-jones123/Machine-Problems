<?php
require 'connect.php';
$connection = dbConnect();

$id = $_GET['id'];

$query = "SELECT * FROM items WHERE ID = $id";
$result = $connection->query($query);
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
    <h2>Buy</h2>
    <div class="wrapper">
        <form action="process_buy.php" method="post">
            <input type="hidden" name="id" value="<?php echo $device['ID']; ?>">
            <label for="quantity">Quantity to buy:</label><br>
            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $device['Quantity']; ?>"><br>
            <input type="submit" value="Buy">
        </form>
    </div>
    <button class="back-btn"><a href="view.php">Go Back</a></button>
</body>

</html>