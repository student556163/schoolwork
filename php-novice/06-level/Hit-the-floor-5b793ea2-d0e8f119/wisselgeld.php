<?php

$x = $argv[1];

$money = array(10,5,2,1);
if (!intval($x)) {
    echo "geen wisselgeld";
} else {
    foreach ($money as $minimoney) {
        $ammount = floor($x / $minimoney);
        $x = $x - ($ammount * $minimoney);

        if ($ammount > 0) {
            echo $ammount . " x " . $minimoney . " euro" . PHP_EOL;
        }
    }
}

?>