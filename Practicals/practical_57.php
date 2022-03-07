<html>
    <body>
    <form method="post" action="display()">
        <input type="text" name="studentfname">
        <input type="submit" value="click">
</br>
        <input type="text" name="studentlname">
        <input type="submit" value="click">
    </form>
    <?php
        function display()
        {
            echo "hello".$_POST["studentname"];
        }
    ?>
    </body>
</html>