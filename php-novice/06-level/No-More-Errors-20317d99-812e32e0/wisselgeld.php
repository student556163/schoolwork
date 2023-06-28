<?php

define("MONEY_UNITS", array(50, 20, 10, 5, 2, 1));
define("MONEY_UNITS_CENT", array(50, 20, 10, 5));
try {
    $givenAmount = $argv[1];
} catch (Exception $e) {
    echo "wisselgeld.php <bedrag>";
}

function gelijkaanzero($givenAmount)
{
    if ($givenAmount == 0) {
        throw new Exception("Geen wisselgeld");
    }
}
try {
    gelijkaanzero($givenAmount);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
try {
    checknull($givenAmount);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
function checknull($givenAmount)
{
    if ($givenAmount == null) {
        throw new Exception("Geen wisselgeld");
    }
}

function geengeld($givenAmount)
{
    if (!is_numeric($givenAmount)) {
            throw new Exception("Geen wisselgeld");
        exit;
    }
}
try {
    geengeld($givenAmount);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

function checkamount($givenAmount)
{
    if ($givenAmount <= 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
}

try {
    checkamount($givenAmount);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

$givenAmount = round5cent($givenAmount);

function round5cent($givenAmount)
{
    $givenAmount = round($givenAmount * 2, 1) / 2;
    return $givenAmount;
}

$givenAmount = number_format((float)$givenAmount, 2, ".", " ");
            
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