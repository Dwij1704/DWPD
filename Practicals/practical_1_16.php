<?php
    $temp= 0;
    $sum = 0;
    $arm = 155;
    $arms = $arm;
    while ($arms != 0){
        $temp = $arms%10;
        $sum = $sum + ($temp * $temp * $temp);
        $arms = (int)floor($arms/10);
    }
if($arm == $sum)
{
    echo "number is armstrong";
}
else{
    echo "number is not armstrong";
}
?>