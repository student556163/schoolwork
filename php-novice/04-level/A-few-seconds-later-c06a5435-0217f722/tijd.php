<?php

$t = $argv[1];

$l = substr($t, -1, 1);

$c = (int) $t;

if ($l == "d") {
    $u = $c * 86400;
    echo "$u seconden";
} elseif ($l == "u") {
    $u = $c * 3600;
    echo "$u seconden";
} elseif ($l == "m") {
    $u = $c * 60;
    echo "$u seconden";
} else {
    echo "$c seconden";
}

?>