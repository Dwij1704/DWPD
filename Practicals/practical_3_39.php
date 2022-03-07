<?php 
    $a = 1;
    $b = "world";
    $c = 123.12;
    $d = true;

    echo gettype($a)."<br>";
    echo gettype($b)."<br>";
    echo gettype($c)."<br>";
    echo gettype($d)."<br>";

    echo settype($a,"float");
    var_dump($a);

    if(isset($a)){
        echo  "Variable A is there <br>";
    }
    unset($a);
    if(!isset($a)){
        echo  "Variable A is now unset <br>";
    }
?>