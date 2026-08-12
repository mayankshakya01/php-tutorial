<?php
function microsoft()
{
    //    this is local variable
    $a = 80;
    echo "This is the value of a =>$a";
}
$b = 76;
function globalname()
{
    global $b;
    echo "<br>This is the value of b =>$b";
}
microsoft();
globalname();
