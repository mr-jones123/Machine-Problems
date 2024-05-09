<?php
require 'connect.php';
$connection = dbConnect();

$id = $_GET['id'];

$query = "SELECT * FROM items WHERE ID = $id";
$result = $connection->query($query);
$device = $result->fetch_assoc();
?>

<?php echo "<h1>Buy " . $device['DeviceName'] . "</h1>";?>
<form action="process_buy.php" method="post">
    <input type="hidden" name="id" value="<?php echo $device['ID']; ?>">
    <label for="quantity">Quantity to buy:</label><br>
    <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $device['Quantity']; ?>"><br>
    <input type="submit" value="Buy">
</form>
<button id ="btn-goback"><a href = "view.php">Cancel</a></button>