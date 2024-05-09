<?php
require 'connect.php';
$connection = dbConnect();

$id = $_GET['id'];

$viewQuery = "SELECT * FROM items WHERE ID = $id";
$result = $connection->query($viewQuery);

$device = $result->fetch_assoc();
?>
<h1>Device Details</h1>
<p><?php echo "Device Name: ".$device['DeviceName']; ?></p>
<p>Price: <?php echo "Price: $". number_format($device['Price'],2); ?></p>
<p>Quantity: <?php echo $device['Quantity']; ?></p>
<button id ="btn-goback"><a href = "view.php">Go Back</a></button>