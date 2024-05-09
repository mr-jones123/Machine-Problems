<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $deviceName = $_POST['Device_Name'];
    $price = $_POST['Price'];
    $quantity = $_POST['Quantity'];
    $_SESSION['Devices'][]=[
        'Device_Name' => $deviceName,
        'Price' => $price,
        'Quantity' => $quantity,
    ];
    header('Location: view.php'); // Redirect to View Devices Page
    exit();
}