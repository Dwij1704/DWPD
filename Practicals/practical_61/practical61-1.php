<?php 
    if(isset($_COOKIE['user']))
    {
        echo "You are old user".$_COOKIE['user'];
    }
    else{
        echo "Its your first time";
    }
?>