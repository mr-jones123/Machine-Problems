<?php
require 'connect.php';
$connection = dbConnect();

$query = "SELECT purchase_history.Quantity as PurchasedQuantity, items.DeviceName, purchase_history.TotalCost, purchase_history.PurchaseDate FROM purchase_history JOIN items ON purchase_history.DeviceID = items.ID";
$result = $connection->query($query);

echo '<h1>Purchased Items</h1>';

while ($row = $result->fetch_assoc()) {
    echo $row['DeviceName'] . ' - Quantity: ' . $row['PurchasedQuantity'] . ' - Total Cost: $' . number_format($row['TotalCost'], 2) . ' - Purchased on: ' . $row['PurchaseDate'] . '<br>';
}

$query = "SELECT SUM(TotalCost) as TotalCost, SUM(Quantity) as TotalQuantity FROM purchase_history";
$result = $connection->query($query);
$row = $result->fetch_assoc();

echo '<h2>Total Summary</h2>';
echo 'Total cost of purchases: $' . number_format($row['TotalCost'], 2) . '<br>';
echo 'Total quantity of items sold: ' . $row['TotalQuantity'] . '<br>';

echo '<a href="index.php">Back to index</a>';
?>