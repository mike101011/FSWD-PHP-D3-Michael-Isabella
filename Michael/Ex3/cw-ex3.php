<?php
function maxArr($arr)
{
    return max($arr);
}
$arr = [];
for ($i = 0; $i < 11; $i++) {
    array_push($arr, rand(0, 100));
}
echo "Array:=[";
foreach ($arr as $val) {
    echo "$val, ";
}
echo "]";
$res = max($arr);
echo "<h3>Maximal value: $res</h3>";
