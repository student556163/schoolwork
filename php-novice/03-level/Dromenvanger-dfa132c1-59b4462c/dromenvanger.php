<?php

$alldreams = array();
$friendsdreams = array();

echo ("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);
$lijst = readline();

if (is_numeric($lijst)) {
    for ($x = 0; $x < $lijst; $x++) {
        $friendsdreams = [];
        echo "wat is jou naam?" . PHP_EOL;
        $name = readline();
        array_push($friendsdreams, $name);
        echo "hoeveel dromen ga je opgeven?" . PHP_EOL;
        $dreamsamount = readline();

        if (is_numeric($dreamsamount)) {
            for ($y = 0; $y < $dreamsamount; $y++) {
                echo "wat is jou droom?" . PHP_EOL;
                $dream = readline();
                array_push($friendsdreams, $dream);
            }
        }
        array_push($alldreams, $friendsdreams);
    }
}
for ($row = 0; $row < count($alldreams); $row++) {
    for ($col = 1; $col < count($alldreams[$row]); $col++) {
        echo $alldreams[$row][0] . "heeft dit als droom:" . $alldreams[$row][$col] . PHP_EOL;
    }
}

?>