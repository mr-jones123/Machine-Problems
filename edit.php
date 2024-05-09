<?php
require 'connect.php';
$connection = dbConnect();

$id = $_GET['id'];

$viewQuery = "SELECT * FROM items WHERE ID = $id";
$result = $connection->query($viewQuery);

$device = $result->fetch_assoc();
?>
<h1>Edit Device</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $device['ID']; ?>">
    <label for="name">Device Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $device['DeviceName']; ?>"><br>
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" value="<?php echo $device['Price']; ?>"><br>
    <label for="quantity">Quantity:</label><br>
    <input type="text" id="quantity" name="quantity" value="<?php echo $device['Quantity']; ?>"><br>
    <input type="submit" value="Update">
    <button id ="btn-goback"><a href = "view.php">Go Back</a></button>
</form>