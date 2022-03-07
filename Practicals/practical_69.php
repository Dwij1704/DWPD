<?php
    $con=mysqli_connect("localhost","root");
    if ($con)

    echo "successfully connected";

    else

    die(mysqli_error());

?>