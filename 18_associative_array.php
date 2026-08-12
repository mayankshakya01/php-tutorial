<?php
//  this is called indexed array
$roll_no = array(18, 48, 27);
echo "$roll_no[0]";
echo "$roll_no[1]";
echo "$roll_no[2]";

// this is called associative array
$fruits = array('mayank' => "mango", 'arpit' => "orange", 'adhya' => "pomegranate");
foreach ($fruits as $key => $value) {
    echo "<br> $key's fav fruit is $value";
}
