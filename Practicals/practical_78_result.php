<?php 
    $con = mysqli_connect('localhost','root');
    $db = mysqli_select_db($con,'mysql');
    $sid = $_GET['sid'];
    $query = "DELETE FROM `student` WHERE sid =$sid ";
    $res = mysqli_query($con,$query);
    if($res) {
        echo "Data deleted successfully";
    }
?>