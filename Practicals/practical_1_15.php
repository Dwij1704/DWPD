<?php
$num = 123;
$pal = $num;
$sum = 0;
while ($num>0)
{
    $temp = $num %10;
    $sum = $sum*10 + $temp;
    $num = floor($num/10);
}
if($pal == $num)
{
    echo "the number you entered is palindrome";
}
else{
    echo "the number you entered is not palindrome";
}
?>