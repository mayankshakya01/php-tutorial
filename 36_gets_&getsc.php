<?php
$file = fopen("myfile.txt", "r");

//fgets check the file line by line means one fgets check the the one line and move to the next line 

// echo fgets($file);
// echo fgets($file);


//same work do with looping

// while ($a = fgets($file)) {
//     echo $a;  //give all the lines of the file
// }

//fgetc functions give all the characters one by one means it read charcter by character

// echo fgetc($file);// give the first letter of the file 

// while ($a = fgetc($file)) {
//     echo $a;// give all the characters of the file
// }
fclose($file);
