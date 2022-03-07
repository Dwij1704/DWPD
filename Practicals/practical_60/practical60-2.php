<form method="post" action="practical60-3.php">
    <?php
    session_start(); 
        if(isset($_SESSION['Username']))
        {
        
            echo "Your username: " .$_SESSION['Username'];
    
        }
        else {
            header('Location:practical60.php');
        }
    ?>
        <input type="submit" value="Logout" value="logout">
    </form>