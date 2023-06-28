<?php

$x = array();
echo "Wie zit er in de klas?" . PHP_EOL;
$y = readline();
array_push($x, $y);
foreach ($x as $a) {
    print_r(explode(" ", $y));
    echo $y;
}

?>