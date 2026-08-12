<?php
echo "HELLO SIR,<br>";
$time = date("d-m-y");
$day = date("l");
$short = date("jS D M Y");
echo "today  date : $time<br>";
echo "and day :$day<br>";
echo "or we can say:$short<br>";
date_default_timezone_set("Asia/Kolkata");
$time = date("H:i:s");
echo "and the time is :$time<br>";

$get_time = time();
echo "the current time is :$get_time";
