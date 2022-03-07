<?php
    $a = 9;
    for($i = 2 ; $i < $a ; $i++)
    {
        if($a % $i == 0){
            $flag = 1;
            break;
        }
    }
    if($flag == 1){
        echo "the number is not prime";
    }
    else
    {
        echo "the number is prime";
    }
    
?>


