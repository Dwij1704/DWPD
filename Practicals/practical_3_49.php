<?php 
    $lastprog = array("Good","Morning","People");
    echo count($lastprog)."<br>";
   // echo list($lastprog);
    if(in_array("People",$lastprog))
    {
        echo "In_Array";
    }
    else{
        echo "not in array";
    }
    echo next($lastprog);
    echo current($lastprog);
    echo prev($lastprog);
    echo end($lastprog);
    //print_r(each($lastprog));
    echo reset($lastprog);
    list(, , $a) = $lastprog;
    echo $a;
?>