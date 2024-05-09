<?php
function dbConnect(){
     $localhost = "localhost";
     $username = "root";
     $password = "password";
     $database = "devices";

     // Set the default MySQLi socket (for Mac)
     ini_set('mysqli.default_socket', '/tmp/mysql.sock');

     $connection = new mysqli($localhost, $username, $password, $database);

     if ($connection->connect_error) {
         die("Connection failed: " . $connection->connect_error);
     }

     return $connection;
}
?>