<?php

if (empty($argv[1])) {
    echo "Geen tijd meegegeven";
    exit;
}

$a = 0;
$s = 0;

foreach ($argv as $c) {
    $t = substr($c, -1);
    switch ($t) {
        case "d":
            $s += (int)$c * 24 * 60 * 60;
            break;
        case "u":
            $s += (int)$c * 60 * 60;
            break;
        case "m": 
            $s += (int)$c * 60;
            break;
        case "s":
            $s += (int)$c;
            break;
    } 
}

$a = $s;
echo "$a seconden";

?>