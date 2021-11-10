<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname ="restaurant_stadttanne";

$connect = new mysqli($hostname, $username, $password, $dbname);

if ($connect ->connect_error){
    die('Connection failed:' . $connect->connect_error);
/* }  else {
    echo "successfully connected";  */
};

$sql = "SELECT * FROM restaurant_stadttanne";
$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC));

echo "<p>" . $row['name'] . " " . $row['price'] . "€</p>";





?>