<?php
$a = 0;
$b=1;
$lim = 15;
for($i =0;$i < $lim; $i++){
    $c = $a + $b;
    echo $c;
    echo "<br>";
    $a = $b;
    $b = $c;
}
?>