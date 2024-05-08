<?php 
    session_start();
    function addVideos($deviceName, $price, $quantity){
        // Check if 'videos' session variable is not set or not an array
        if (!isset($_SESSION['videos']) || !is_array($_SESSION['videos'])) {
            $_SESSION['videos'] = array();
        }

        // Add the new video to the 'videos' session variable
        $_SESSION['videos'][] = array(
            'deviceName' => $deviceName,
            'price' => $price,
            'quantity' => $quantity
        );
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $deviceName = $_POST['deviceName'];
        $devicePrice = $_POST['devicePrice'];
        $deviceQuantity = $_POST['deviceQuantity'];
        addVideos($deviceName, $devicePrice, $deviceQuantity);
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
</head>
<body>
    <h1>Video Rental</h1>
    <div class="wrapper">
        <form method="POST" action="index.php">
            <label for="Name">Device Name:</label>
            <input class ="input" name="deviceName" required> <br><br>
            <label for="Price">Price:</label>
            <input class ="input" name="devicePrice" required> <br><br>
            <label for="Price">Quantity:</label>
            <input class ="input" name="deviceQuantity" required> <br><br>
            <button type="submit" class="btn">Add Device</button>
        </form>

    </div>

</body>
</html>