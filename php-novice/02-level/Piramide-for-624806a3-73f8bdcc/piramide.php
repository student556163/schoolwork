<?php

$input = readline("Input: ");
for ($x = 1; $x <= $input; $x++) {
    for ($star = 0; $star < $x; $star++) {
        echo "*";
    }
    echo PHP_EOL; 
}

?>