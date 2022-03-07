<?php
    $a = "Pubg";
    $b = "pubg";
    $c = "Valorant";
    $d = "Rant";
    $e = "rant";

    echo strcmp($a,$b)."<br>";
    echo strcasecmp($a, $b)."<br>";
    echo strpos($c,$e,0)."<br>";
    echo strstr($c,$e)."<br>";
    echo stristr($c,$e);
?>
