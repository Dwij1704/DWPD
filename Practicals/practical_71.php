<?php
$con = mysqli_connect('localhost','root');
$db = mysqli_select_db($con,'practical');
$select="SELECT * FROM `practical70` ";
$show=mysqli_query($con,$select);

$see=mysqli_fetch_array($show,MYSQLI_ASSOC);
print_r($see);
?>