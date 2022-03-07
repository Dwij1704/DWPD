<?php
    $test= fopen("test.txt", "r");
    $test1= fopen("test1.txt", "r");
    $merged= fopen("merged.txt", "w+");
    while (!FEOF($test))
    { 
        $h=fread($test,1);
        fwrite($merged,$h);
    }
fclose($test);

while (!FEOF($test1))
    { 
        $h=fread($test1,1);
        fwrite($merged,$h);

    }
fclose($test1);
fclose($merged);
?>