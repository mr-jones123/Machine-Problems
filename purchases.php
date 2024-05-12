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
    <img id="walkman" src="./images/walkman.png">
    <h2>Purchased Items</h2>
    <div class="wrapper">
        <?php
    require 'connect.php';
    $connection = dbConnect();

    $SelectQuery = "SELECT purchase_history.DeviceName, purchase_history.Quantity, purchase_history.TotalCost, purchase_history.PurchaseDate FROM purchase_history";
    $result = $connection->query($SelectQuery);

    echo '<table>';
    echo '<tr><th>Device Name</th><th>Quantity</th><th>Total Cost</th><th>Purchase Date</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['DeviceName'] . '</td><td>' . $row['Quantity'] . '</td><td>$' . number_format($row['TotalCost'], 2) . '</td><td>' . $row['PurchaseDate'] . '</td></tr>';
    }
    echo '</table>';
    ?>
    </div>

    <button class="back-btn"><a href="index.php">Go Back</a></button>


</body>

</html>