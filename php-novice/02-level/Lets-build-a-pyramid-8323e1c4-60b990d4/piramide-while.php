<?php

echo "hoevel stapels wil je hebben?" . PHP_EOL;

$ytotal = readline("");
$x = 1;
 
while ($x <= $ytotal) {
    $y = 1;
    while ($y <= $x) {
        echo"*";
        $y++;
    }
    echo PHP_EOL;
    $x++;
} 
  
?>