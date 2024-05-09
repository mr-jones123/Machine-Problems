<?php
require 'connect.php';
$connection = dbConnect();

$clearPurchaseHistoryQuery = "DELETE FROM purchase_history";
if ($connection->query($clearPurchaseHistoryQuery) === TRUE) {
    echo "Purchase history cleared successfully";
} else {
    echo "Error clearing purchase history: " . $connection->error;
}

header('Location: view.php');
?>

<!-- no idea how to make this work -->