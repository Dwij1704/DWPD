<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'practical');
    $query = "CREATE TABLE `practical`.`practical67` ( `Name` VARCHAR(15) NOT NULL ) ENGINE = MyISAM;";
    $res = mysqli_query($con,$query);
    if($res)
    {
        echo "table created";
    }
    else{
        echo "Table already exists";
    }
?>