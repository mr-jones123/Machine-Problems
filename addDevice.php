<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $deviceName = $_POST['Device Name'];
    $price = $_POST['Price'];
    $quantity = $_POST['Quantity'];
    $_SESSION['Devices'][]=[
        'Device Name' => $deviceName,
        'Price' => $price,
        'Quantity' => $quantity,
    ];
    header('Location: view.php'); // Redirect to View Devices Page
    exit();
}