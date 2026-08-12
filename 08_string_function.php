<?php
$firstname="mayank";
$lastname="Shakya";
$paragraph="$firstname  is the good boy";
$new="aryan is a rude boy";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
                                //  | here dot operator(.) is used to join the two string
echo "this the length of mayank :"  . strlen($firstname);//strlen() is used to find th len of the string

echo "<br>";
echo "$paragraph";
echo "<br>";
//str_word_count () is used to count the word including space
echo "there is ".str_word_count($paragraph)." word in the paragraph ";

echo "<br>";
//strrev means string reverse means ye string ko revese kar deta hai
echo strrev($firstname);
echo "<br>";
//strpos means string position means this give the postion of the word in the string
echo strpos($paragraph,"is");
echo "<br>";
//str_replace is used to replace the word
//syntax->  str_replace(new_word,word,where)
echo str_replace("nikhil","aryan",$new);
echo "<br>";
//str_repeat is used to repeat the string 
//syntax-> str_repeat(string,how many time)
echo str_repeat($firstname,5);
echo"<br>";
echo "<pre>";   #this is an html tag that means jo jitni spaces hain utni bani rahne do
echo rtrim("       hello boys     ");   #rtrim function is used to remove the right side spaces of string
echo "<br>";
echo ltrim("       hello boys     ");   #ltrim function is used to remove the left side spaces of string
echo "</pre>";
?>