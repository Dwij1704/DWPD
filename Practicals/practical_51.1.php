<?php
$file = fopen("test.txt", "r");

if($file)
    echo"file opened"."<br>";
else
    echo"file not opened"."<br>";

$read=fread($file,10);
echo $read;

$getchar=fgetc($file);
echo $getchar;


?>