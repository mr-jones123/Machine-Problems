<?php
function dbConnect(){
     $localhost = "localhost";
     $username = "root";
     $password = "Themaclife123@";
     $database = "useraccounts";

     $connection = new mysqli($localhost, $username, $password, $database);
    return $connection;
}

?>