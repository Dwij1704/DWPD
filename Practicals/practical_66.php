<?php 
    $con = mysqli_connect('localhost','root');
    $query ="create DATABASE prctical66";
    $res = mysqli_query($con,$query);
    if($res)
    {
        echo "Database created";
    }
    else{
        echo "table already exists";
    }
    $destroy = "drop database prctical66";
    $res1 = mysqli_query($con,$destroy);
    if($res1)
    {
        echo "Database destroyed";
    }
    else{
        echo "Already deleted";
    }
?>