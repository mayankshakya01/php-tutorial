<?php
$matrix = array(
    array(1, 4, 2, 6),
    array(2, 6, 3, 7),
    array(3, 7, 4, 8)
);
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo $matrix[$i][$j];
        echo " ";
    }
    echo "<br>";
}
