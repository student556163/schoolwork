<?php

$x = $argv[1];

define("MONEY_UNITS", array(50,20,10,5,2,1));
if (!intval($x)) {
    echo "geen wisselgeld";
} else {
    foreach (MONEY_UNITS as $minimoney) {
        $ammount = floor($x / $minimoney);
        $x = $x - ($ammount * $minimoney);

        if ($ammount > 0) {
            echo $ammount . " x " . $minimoney . " euro" . PHP_EOL;
        }
    }
}

?>