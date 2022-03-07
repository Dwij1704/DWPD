<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $create = "CREATE TABLE `mysql`.`student` ( `sid` INT(6) NOT NULL , `sname` VARCHAR(15) NOT NULL , `address` VARCHAR(20) NOT NULL , `department` VARCHAR(15) NOT NULL ) ENGINE = MyISAM";
    $query = "INSERT INTO `student` (`sid`, `sname`, `address`, `department`) VALUES ('1', 'Vraj', 'Haash bunglow', 'Computer'), ('2', 'Reyna', 'Ascent', 'Defence'), ('3', 'Cypher', 'haven', 'Cyber Sec')";
    $res  = mysqli_query($con,$create);
    if($res)
    {
        echo "Table created successfully";
    } 
    $response = mysqli_query($con, $query); 
        if($response)
        {
            echo "data inserted successfully";
        }
    ?>
