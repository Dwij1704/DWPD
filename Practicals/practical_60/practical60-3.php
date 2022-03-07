<?php 
    session_start();
    session_destroy();
    header("Location: practical60.php");
?>