<?php
require 'connect.php';
$connection = dbConnect();

$id = mysqli_real_escape_string($connection, $_POST['id']);
$quantityToBuy = (int) $_POST['quantity'];

$query = "SELECT Quantity, Price FROM items WHERE ID = $id";
$result = $connection->query($query);
$row = $result->fetch_assoc();
$currentQuantity = $row['Quantity'];
$price = $row['Price'];

if ($currentQuantity >= $quantityToBuy) {
    $totalCost = $price * $quantityToBuy;

    $insertQuery = "INSERT INTO purchase_history (DeviceID, Quantity, TotalCost, PurchaseDate) VALUES ($id, $quantityToBuy, $totalCost, NOW())";
    $connection->query($insertQuery);

    $newQuantity = $currentQuantity - $quantityToBuy;

    $updateQuery = "UPDATE items SET Quantity = $newQuantity WHERE ID = $id";
    $connection->query($updateQuery);
}

header('Location: view.php');
?>