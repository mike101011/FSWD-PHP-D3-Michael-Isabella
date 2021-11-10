<?php
require_once 'library/db_connect.php';
$sql_1 = "SELECT * FROM dishes";
$result_1 = mysqli_query($connect, $sql_1);
$rows_1 = mysqli_fetch_all($result_1, MYSQLI_ASSOC);
$sql_2 = "SELECT * FROM beverages";
$result_2 = mysqli_query($connect, $sql_2);
$rows_2 = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Challenge-Restaurant</title>
</head>

<body>
    <h1 class="text-center text-dark">Restaurant Page</h1>
    <div class="container">
        <h2 class="text-center">Dishes</h2>
        <div class="row">
            <?php
            foreach ($rows_1 as $val) {
                echo "<div class=\"col-12 col-md-6 col-lg-3\"><div class=\"card\" style=\"width: 18rem;\">
  <img src=\"{$val["image"]}\" class=\"card-img-top\" alt=\"Error\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">{$val["name"]}</h5>
    <p class=\"card-text\">{$val["description"]}</p>
    <h6>{$val["price"]}</h6>
    <a href=\"delete-dish.php?id=" . $val["dish_id"] . "\" class=\"btn btn-primary\">Delete</a>
  </div>
</div></div>";
            }
            ?>

        </div>
    </div>
    <hr>
    <div class="container">
        <h2 class="text-center">Beverages</h2>
        <div class="row">
            <?php
            foreach ($rows_2 as $val) {
                echo "<div class=\"col-12 col-md-6 col-lg-3\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img src=\"{$val["image"]}\" class=\"card-img-top\" alt=\"Error\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{$val["name"]}</h5>
                        <h6>{$val["price"]}</h6>
                        <a href=\"delete-beverage.php?id=" . $val["bev_id"] . "\" class=\"btn btn-primary\">Delete</a>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
    <div class="container"><a href="create-res.php" class="btn btn-dark">Add item</a></div>

    <!-- Scripts! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>