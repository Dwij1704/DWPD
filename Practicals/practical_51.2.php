<?php

$file = fopen("test1.txt", "w");

$write=fwrite($file,"hi");
fclose($file);
?>