<?php
require_once 'library/db_connect.php';
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM beverages WHERE bev_id=$id";
    if (mysqli_query($connect, $sql) == true) {
        echo "Beverage deleted <br>
        <a href='index.php'>Home</a>";
    }
}
