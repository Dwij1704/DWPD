<?php 
    $integer = 8849;
    $decimal = 1234.123;
    $string = "9876";
    $integer = strval($integer); 
    echo $integer."<br>";
    echo gettype($integer)."<br>";

    $decimal = intval($decimal);
    echo $decimal."<br>";
    echo gettype($decimal)."<br>";

    $string = floatval($string); 
    echo $string."<br>";
    echo gettype($string)."<br>";
?>