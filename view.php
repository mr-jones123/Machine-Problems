
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
    <div class = "viewTable" >
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Device Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Update</th>
                    <th>Purchase</th>
                    <th>Delete</th>
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
                <td><?php echo "$" .$row['Price']?></td>
                <td><?php echo $row['Quantity']?></td>
                <td><a href="update.php"><button id = "btn-table">Update</button></a></td>
                <td><a href="buy.php"><button id = "btn-table">Buy</button></a></td>
                <td><a href="delete.php"><button id = "btn-table">Delete</button></a></td>
            </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
        <button id ="btn-goback"><a href = "index.php">Go Back</a></button>
    </div>

</body>

</html>