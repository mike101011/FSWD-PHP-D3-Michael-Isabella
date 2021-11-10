<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "db_restaurant";
$connect = new mysqli($hostname, $username, $password, $db_name);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {

    //echo "Successfully Connected";
}
