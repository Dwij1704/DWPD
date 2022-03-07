<?php
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'practical');
    $query = "CREATE TABLE `practical`.`practical70` ( `rollno` INT(10) NOT NULL , `name` VARCHAR(10) NOT NULL ,
             `standard` INT(2) NOT NULL , `division` CHAR(1) NOT NULL , `city` VARCHAR(10) NOT NULL ) ENGINE = MyISAM;";
    $res=mysqli_query($con,$query);
    if($res)
    {
        echo"table created"."<br>";
    }
    else 
    {
        echo"table already exist"."<br>";
    }

    $insert = "INSERT INTO `practical70` (`rollno`, `name`, `standard`, `division`, `city`)
                 VALUES ('1234567890', 'abcdefg', '10', 'B', 'anand')";

    $res1=mysqli_query($con,$insert);
    if($res1)
    {
        echo "data inserted";
    }
?>