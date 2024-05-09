<?php 
    //for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    
    require 'connect.php';
    function addDevice($deviceName, $devicePrice, $deviceQuantity){
        $connection = dbConnect();
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);//debug statement
        }
        $insertQuery = "INSERT INTO items (DeviceName, Price, Quantity) VALUES ('$deviceName', '$devicePrice', '$deviceQuantity')";
        $connection->query($insertQuery);
    }
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        addDevice($_POST['deviceName'],$_POST['devicePrice'],$_POST['deviceQuantity']);
        header('Location: view.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Rental</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href=".\images\walkman1.png">
</head>
<body> 
    <h1>Electronic Device Store</h1>   
    <nav>
    </nav>
    <img id="walkman" src="./images/walkman1.png">
    <h2>Your Go-To Tech Store</h2>
    <div class="wrapper">
        <form method="POST" action="index.php">
            <label for="Name">Device Name:</label>
            <input class ="input" name="deviceName" required> <br><br>
            <label for="Price">Price:</label>
            <input class ="input" name="devicePrice" required> <br><br>
            <label for="Price">Quantity:</label>
            <input class ="input" name="deviceQuantity" required> <br><br>
            <button type="submit" class="btn">Add Device</button>
            <!-- links for viewing devices and purchase history -->
            <ul>
                <li><a href="view.php">View All Devices</a></li>
                <li><a href="purchases.php">View Purchase History</a></li>
            </ul>
        </form> 

    </div>

</body>
</html>