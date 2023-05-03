<?php
// $myfile = fopen("File Handling/text.txt", "r") or die("Unable to open file!");

//file open/read
// echo fread($myfile,filesize("File Handling/text.txt"));
// echo fgets($myfile);
// echo fgetc($myfile);
// while(!feof($myfile)) {
//     echo fgets($myfile) . "\n";
// }
//file create/write

$myfile = fopen("File Handling/text.txt", "w") or die("Unable to open file!");
$txt = "John Doeeeeeeee\n";
fwrite($myfile, $txt);
$txt = "Jane Doeeeeeee\n";
fwrite($myfile, $txt);

$myfile = fopen("File Handling/text.txt", "a") or die("Unable to open file!");
$txt = "John Doeeeeeeee\n";
fwrite($myfile, $txt);
$txt = "Jane Doeeeeeee\n";
fwrite($myfile, $txt);

fclose($myfile);
?>