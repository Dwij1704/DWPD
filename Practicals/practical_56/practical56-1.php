<?php
    echo"Your Full Name is:- ".$_POST['fname']." ".$_POST['lname']."<br>"."<br>";
    echo"Your Selected Carrer Option is:- ";
    foreach($_POST ['cars'] as $val)
    {
        echo <br>.$val;
    }
    echo"<br>"."<br>";
    echo"your gender is:";
    echo $_POST['gender'];
?>