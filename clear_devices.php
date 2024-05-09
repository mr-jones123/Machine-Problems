<?php
require 'connect.php';
$connection = dbConnect();

// Disable foreign key constraint check
$connection->query('SET FOREIGN_KEY_CHECKS=0');

// Query to delete all records from the items table
$clearItemsQuery = "DELETE FROM items";
if ($connection->query($clearItemsQuery) === TRUE) {
    echo "All devices cleared successfully";
} else {
    echo "Error clearing devices: " . $connection->error;
}

// Re-enable foreign key constraint check
$connection->query('SET FOREIGN_KEY_CHECKS=1');

// Redirect back to view.php
header('Location: view.php');
?>