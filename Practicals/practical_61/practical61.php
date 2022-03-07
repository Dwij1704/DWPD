<?php 
    if($_POST['Username'] == 'Dwij' && $_POST['Password'] == 'dwij1704')
    {
        setcookie('user',$_POST['Username']);
        echo 'nice';
        header('Location: practical61-1.php');
    }
    else
    {
        header('Location: practical60.php');
    }
?>