<?php
require 'connect.php';
$connection = dbConnect();

// Get the ID
$id =  $_GET['id'];

// Delete
$deleteQuery = "DELETE FROM items WHERE ID = $id";
$connection->query($deleteQuery);

// Redirect
header('Location: view.php');
?>