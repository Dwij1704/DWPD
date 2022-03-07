<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $edit = "UPDATE `student` SET `sid`=66 WHERE sname = 'cypher' ";
    $delete = "DELETE FROM `student` WHERE sid = 1";
    $res = mysqli_query($con,$edit);
    $response = mysqli_query($con,$delete);
    if($res)
    {
        echo "data updated successfully";
    }
    if($response)
    {
        echo "data deleted successfully";
    }
?>