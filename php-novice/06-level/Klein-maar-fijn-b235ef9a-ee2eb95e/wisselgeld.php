<?php

define("MONEY_UNITS", array(50, 20, 10, 5, 2, 1));
define("MONEY_UNITS_CENT", array(50, 20, 10, 5));
$givenAmount = $argv[1];

if (!intval($givenAmount)) {
    echo "geen wisselgeld";
    exit;
}
// 75.30  --> euro 75, centen 30
$euros = intval(explode('.', $givenAmount)[0]);
$centen = intval(explode('.', $givenAmount)[1]);

calcAndDisplayUnitCount(MONEY_UNITS, $euros, ' euro');
calcAndDisplayUnitCount(MONEY_UNITS_CENT, $centen, ' cent');

function calcAndDisplayUnitCount($units, $total, $unitName)
{
    foreach ($units as $minimoney) {
        $unitCount = floor($total / $minimoney);
        $total = $total - ($unitCount * $minimoney);
    
        if ($unitCount > 0) {
            echo ($unitCount . " x " . $minimoney . $unitName) . PHP_EOL;
        }
    }
}

?>