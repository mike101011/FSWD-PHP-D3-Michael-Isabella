<?php
require_once 'library/db_connect.php';
if (isset($_POST["submit-1"])) {
    $dish_img = $_POST["dish_img"];
    $dish_name = $_POST["dish_name"];
    $dish_price = $_POST["dish_price"];
    $dish_description = $_POST["dish_description"];
    $sql_1 = "INSERT INTO `dishes`(`dish_id`, `image`, `name`, `price`, `description`) VALUES ('NULL','$dish_img','$dish_name','$dish_price','$dish_description')";
    if (mysqli_query($connect, $sql_1) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo "New dish added!<br>
            <a href='index.php'>Home</a>";
    }
}
if (isset($_POST["submit-2"])) {
    $bev_img = $_POST["bev_img"];
    $bev_name = $_POST["bev_name"];
    $bev_price = $_POST["bev_price"];
    $sql_2 = "INSERT INTO `beverages`(`bev_id`, `image`, `name`, `price`) VALUES ('NULL','$bev_img','$bev_name','$bev_price')";
    if (mysqli_query($connect, $sql_2) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo "New beverage added!<br>
            <a href='index.php'>Home</a>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Res</title>
</head>

<body>
    <h2>Add a dish:</h2>
    <form action="create-res.php" method="POST">
        <textarea name="dish_img" id="txt-1" cols="30" rows="5"></textarea>
        <input type="text" name="dish_name" placeholder="Name of the dish">
        <input type="number" name="dish_price" placeholder="Price of the dish">
        <textarea name="dish_description" id="txt-2" cols="30" rows="5"></textarea>
        <input type="submit" name="submit-1">
    </form>
    <hr>
    <h2>Add a beverage:</h2>
    <form action="create-res.php" method="POST">
        <textarea name="bev_img" id="txt-3" cols="30" rows="5"></textarea>
        <input type="text" name="bev_name" placeholder="Name of the beverage">
        <input type="number" name="bev_price" placeholder="Price of the beverage">
        <input type="submit" name="submit-2">
    </form>
</body>

</html>