<?php 
    function user($a = 15 , $b =20 ){
        $c = $a + $b;
        echo $c."<br>";
    }
    function withvar($c ,$a = 15 , $b =20){
        $d = $a + $b + $c;
        echo $d."<br>";
    }
    user();
    withvar($c = 30);
?>