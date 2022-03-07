<?php
    function userdef(){
        $a = 10;
        $b =30;
        $c = $a + $b;
        echo $c."<br>";
    }
    function userdefwithargs($a , $b){
        $c = $a + $b;
        echo $c;
    }
    userdef();
    userdefwithargs(10,15);
?>