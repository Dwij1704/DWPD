<?php
    
    $a1=array("Good","Morning");
    $a2=array("Good","Night");
    $numbers=array(4,5,6);
    $tv;
    print_r(array_merge($a1,$a2));
    echo"<br>";

    print_r(array_reverse($a1));
    echo"<br>";
    
   
sort($numbers);

$len=count($numbers);
for($x=0;$x<$len;$x++)
  {
  echo $numbers[$x];
  echo "<br>";
  }
?>