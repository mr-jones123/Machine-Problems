<?php
require 'connect.php';
$connection = dbConnect();

$id = mysqli_real_escape_string($connection, $_POST['id']);
$name = mysqli_real_escape_string($connection, $_POST['name']);
$price = mysqli_real_escape_string($connection, $_POST['price']);
$quantity = mysqli_real_escape_string($connection, $_POST['quantity']);

$updateQuery = "UPDATE items SET DeviceName = '$name', Price = $price, Quantity = $quantity WHERE ID = $id";
$connection->query($updateQuery);

header('Location: view.php');
?>