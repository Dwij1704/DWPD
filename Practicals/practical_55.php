<?php
    $time=getdate();
    print_r($time);
    
    if ($time['hours']<=12)
    {
        echo"good morning";
    }
    elseif($time['hours']<=16)
    {
        echo"good afternoon";
    }

    elseif($time['hours']<=22)
    {
        echo"good evening";
    }

    else
    {
        echo"good night";
    }
?>