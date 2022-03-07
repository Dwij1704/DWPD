<?php
$num = 654;
$sum = 0;
while ($num>0)
{
    $temp = $num %10;
    $sum = $sum*10 + $temp;
    $num = floor($num/10);
}
echo $sum;
?>