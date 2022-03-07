<?php
    $a = 10;
    function illustration(){
        $a = 50;
        echo "This will print the local scope variable " . $a . "<br>";
        echo "This will print the global scope variable " .$GLOBALS['a']; 
    }
    illustration();
?>