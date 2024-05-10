
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Rental</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
      <h1>View Devices</h1>
    <div class = "viewTable" >
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Device Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>View Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Buy</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require 'connect.php';
                    $connection = dbConnect();
                    $viewQuery = "SELECT * FROM items";
                    $result = $connection->query($viewQuery);
                    while ($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['DeviceName']?></td>
                <td><?php echo "$" .number_format($row['Price'],2)?></td>
                <td><?php echo $row['Quantity']?></td>
                <td><a href="details.php?id=<?php echo $row['ID']; ?>"><button id = "btn-table">View Details</button></a></td>
                <td><a href="edit.php?id=<?php echo $row['ID']; ?>"><button id = "btn-table">Edit</button></a></td>
                <td><a href="delete.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this device?');"><button id = "btn-table">Delete</button></a></td>
                <td><a href="buy.php?id=<?php echo $row['ID']; ?>"><button id = "btn-table">Buy</button></a></td>
            </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
        <button id ="btn-goback"><a href = "index.php">Go Back</a></button>
        <button id ="btn-goback"><a href = "clear_devices.php">Clear All Devices</a></button>
        <button id ="btn-goback"><a href = "clear_purchase_history.php">Clear All Purchases</a></button>
    </div>

</body>

</html>