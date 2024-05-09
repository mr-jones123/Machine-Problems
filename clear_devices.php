<?php
require 'connect.php';
$connection = dbConnect();

$connection->query('SET FOREIGN_KEY_CHECKS=0');

$clearItemsQuery = "DELETE FROM items";
if ($connection->query($clearItemsQuery) === TRUE) {
    echo "All devices cleared successfully";
} else {
    echo "Error clearing devices: " . $connection->error;
}

$connection->query('SET FOREIGN_KEY_CHECKS=1');

header('Location: view.php');
?>