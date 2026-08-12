<?php
$required_age=18;
$age=25;
echo "hello";
if ($age<$required_age){
    echo "you can't drive";
}
elseif ($age>$required_age){
    echo "did you have licence";
}
else{
    echo "you can drive";
}
?>