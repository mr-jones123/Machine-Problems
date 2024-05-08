<?php
  session_start();

  // Check if there's a video in the session
  if (isset($_SESSION['videos'])) {
    $video = $_SESSION['videos'];
  } else {
    $video = []; // Initialize empty array if no videos in session
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Rental - View Devices</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Video Rental - View Devices</h1>
  <?php if (empty($video)) : ?>
    <p>No videos added yet!</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>Device Name</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
      <?php
                if (count($video) > 0) {
                    foreach ($video as $rentedVideo) {
                        echo "<tr>";
                        echo "<td>" . $rentedVideo['deviceName'] . "</td>";
                        echo "<td>" . $rentedVideo['price'] . "</td>";
                        echo "<td>" . $rentedVideo['quantity'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No videos found</td></tr>";
                }
                ?>
      </tbody>
    </table>
  <?php endif; ?>

</body>
</html>
