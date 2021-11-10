<?php
for ($i = 1; $i < 101; $i++) {
    if ($i % 15 === 0) {
        echo "Full-Stack" . "<br>";
    } elseif ($i % 3 === 0) {
        echo "Back-End" . "<br>";
    } elseif ($i % 5 === 0) {
        echo "Front-End" . "<br>";
    } elseif ($i % 37 === 0) {
        continue;
    } else {
        echo "$i" . "<br>";
    }
}
