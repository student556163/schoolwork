<?php

$y = readline("hoeveel stapels wil je hebben?");

for ($i = 1; $i <= $y; $i++) {
    $x .= "*";
    echo $x . PHP_EOL;
}

?>