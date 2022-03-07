<?php 
    session_start();
    if(strcmp($_POST['Username'],'Dwij')==0 && strcmp($_POST['Password'],'dwij1704')==0){
        $_SESSION['Username'] = $_POST['Username'];
        header('Location: practical60-2.php');
    }
    else{
        header('Location:practical60.php');
    }
?>