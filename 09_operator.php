<?php
echo "there are several types of operators in php <br>";
/*
1.logical operator
2.comparision operator
3.arithmatic operator
4.Assignment operator
*/
$a= 34;
$b=6;
//Arithmatic operator
echo "$a+$b =".($a+$b)."<br>";
echo "$a-$b =".($a-$b)."<br>";
echo "$a*$b =".($a*$b)."<br>";
echo "$a/$b =".($a/$b)."<br>";
echo "$a%$b =".($a%$b)."<br>"; // give the reminder
echo "$a**$b =".($a**$b)."<br>";

//Assignment Operator
$x=0;
$x+=$a;
echo "the value for x is".($x+=$a)."<br>";
echo "the value for x is".($x-=$a)."<br>";
echo "the value for x is".($x*=$a)."<br>";
echo "the value for x is".($x/=$a)."<br>";

//Comparision operator
var_dump($a == $b);
echo "<br>";
var_dump($a<$b);
echo "<br>";
var_dump($a>$b);
echo "<br>";
var_dump($a<=$b);
echo "<br>";
var_dump ($a>=$b);
echo "<br>";
var_dump ($a!=$b);//php me ye not equal hai
echo "<br>";
var_dump ($a<>$b);// ye bhi not equal hi hai dono valid hain
echo "<br>";

//logical operator 

$m=true;
$n=false;
var_dump($m and $n);// return true when both are true
echo "<br>";
var_dump($m && $n);// same and
echo "<br>";
var_dump($m or $n);//return true when even one is true
echo "<br>";
var_dump($m || $n);//same or
echo "<br>";
var_dump(!$m);//print oposite the value
?>