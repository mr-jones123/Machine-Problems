<?php
require 'connect.php';
$connection = dbConnect();

// Query to delete all records from the purchase_history table
$clearPurchaseHistoryQuery = "TRUNCATE TABLE purchase_history";
if ($connection->query($clearPurchaseHistoryQuery) === TRUE) {
    echo "Purchase history cleared successfully";
} else {
    echo "Error clearing purchase history: " . $connection->error;
}

// Redirect back to view.php
header('Location: view.php');
?>