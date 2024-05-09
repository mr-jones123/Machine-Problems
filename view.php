<?php
session_start();
//Initialize Devices array if not already set
if(!isset($_SESSION['Devices'])){
    $_SESSION['Devices'] = [];
}
//initialize Purchase Array if not already set
if(!isset($_SESSION['Purchases'])){
    $_SESSION['Purchases']=[];
}
// if action is set and the action is clearDevices
if (isset($_GET['action']) && $_GET['action'] == 'clearDevices'){
    unset($_SESSION['Devices']); // Clear the session
    $_SESSION['feedback']="All devices have been cleared successfully.";
    header("Location: view.php");
    exit();
}
// if action is set and the action is clearPurchases
if (isset($_GET['action']) && $_GET['action'] == 'clearPurchases'){
    unset($_SESSION['Purchases']); // Clear the session
    $_SESSION['feedback']="All purchases have been cleared successfully.";
    header("Location: view.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Devices</title>
</head>
<body>
    <h1>Devices Available for Purchase</h1>
    <h2>Devices</h2>
    <table border="1">
        <tr>
            <th>Device Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <?php foreach($_SESSION['Devices'] as $devices): ?>
            <tr>
                <td><?php echo $devices['Device_Name'];?></td>
                <td>$<?php echo number_format($devices['Price'],2);?></td>
                <td><?php echo $devices['Quantity'];?></td>
                <td><button></button></td>
            </tr>
        <?php endforeach;?>
    </table>
    <br>
    <?php
    echo '<form action="view.php" method="get">
        <input type="hidden" name="action" value="clearDevices">
        <button type="submit" onclick="return confirm(\'Are you sure you want to clear all devices?\');">Clear All Devices</button>
    </form>';
    echo '<br>';
        echo '<form action="view.php" method="get">
        <input type="hidden" name="action" value="clearPurchases">
        <button type="submit" onclick="return confirm(\'Are you sure you want to clear all purchases?\');">Clear All Purchases</button>
    </form>';
    ?>
    <a href="index.php">Back to Index</a>
</body>
</html>