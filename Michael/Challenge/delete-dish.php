<?php
require_once 'library/db_connect.php';
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="DELETE FROM dishes WHERE dish_id=$id";
    if (mysqli_query($connect, $sql) == true) {
        echo "dish deleted <br>
        <a href='index.php'>Home</a>";
    }
}
