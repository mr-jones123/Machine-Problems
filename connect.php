<?php
function dbConnect(){
     $localhost = "localhost";
     $username = "root";
     $password = "Themaclife123@";
     $database = "useraccounts";

     $connection = new mysqli($localhost, $username, $password, $database);

     if ($connection->connect_error) {
         die("Connection failed: " . $connection->connect_error);
     }

     return $connection;
}
?>