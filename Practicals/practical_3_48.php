<?php
    echo date("l,d-M-Y")."<br>";
    echo time()."<br>";
    print_r(getdate())."<br>";
    if(checkdate(24, 10, 2002)){
        echo "<br>"."its now";
    }
    else{
        echo "<br>"."or never";
    }
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0,24, 10, 2002))."</br>";
?>      