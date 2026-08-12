<?php
function get_average($marks)
{
    $sum = 0;
    $i = 1;
    foreach ($marks as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}
function get_sum($marks)
{
    $sum = 0;
    foreach ($marks as $value) {
        $sum += $value;
    }
    return $sum;
}
$mayank = [20, 40, 50, 60];
$averagemarks = get_average($mayank);
echo "the average of mayank is $averagemarks <br>";
$totalmarks = get_sum($mayank);
echo "the totalmarks of mayank is $totalmarks";
