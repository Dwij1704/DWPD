<?php

    $file1= fopen("anand.txt", "a+");
    $file2= fopen("vvn.txt", "r");
    while (!FEOF($file2))
    {   

    $h=fread($file2,1);
    fwrite($file1,$h);

    }

    fclose($file1);
    fclose($file2);

?>