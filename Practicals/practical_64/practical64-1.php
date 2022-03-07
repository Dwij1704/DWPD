<?php 
    if($_POST['Username'] == 'Dwij' && $_POST['Password'] == 'dwij1704')
    {
        setcookie('user',$_POST['Username']);
        echo 'noice';
        header('Location: practical64-2.php');
    }
    else
    {
        header('Location: practical64.php');
    }
?>