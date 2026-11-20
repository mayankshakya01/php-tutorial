<?php
// $file = fopen("myfile.txt", "r");
// echo fread($file, filesize("myfile.txt"));

// if file is not exist it will create it and it append the taxt at the end of the file
// $newfile = fopen("myfile.txt", "a+");
// fwrite($newfile, "  I know it is too boring to read so why are you reading it? ");
//---------
// rewind is used to move the cursor to the starting of the file because the file reading started the cursor location and if after appending the text the cursor will at the end so we can not read the file without the rewind
//---------
// rewind($newfile);   
// echo fread($newfile, filesize("myfile.txt"));
// fclose($newfile);


// if file is not exist it will create it and it overwrite the taxt at the starting of the file

// $newfile2 = fopen("myfile2.txt", "w+");
// fwrite($newfile2, "  I know it is too boring to read so why are you reading it? ");
// rewind($newfile2);
// echo fread($newfile2, filesize("myfile2.txt"));
// fclose($newfile2);
