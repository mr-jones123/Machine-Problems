
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Rental</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Video Rental</h1>
    <div class="wrapper">
        <form method="POST" action="addDevice.php">
            <label for="Name">Device Name:</label>
            <input class ="input" name="Device_Name" required> <br><br>
            <label for="Price">Price:</label>
            <input class ="input" name="Price" required> <br><br>
            <label for="Quantity">Quantity:</label>
            <input class ="input" name="Quantity" required> <br><br>
            <button type="submit" class="btn">Add Device</button>
        </form>

    </div>
    <div class="wrapper2">
        <ul>
            <li><a href="view.php">View All Devices</a></li>
            <li><a href="purchases.php">View Purchase History</a></li>
        </ul>
    </div>

</body>
</html>