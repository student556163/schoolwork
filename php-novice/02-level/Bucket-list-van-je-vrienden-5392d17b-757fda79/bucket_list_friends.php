<?php

$a = array();
echo "Hoeveel vrienden willen een droom toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($x = 0; $x < ($input); $x++) {
        echo "Hoe heet je?" . PHP_EOL;
        $n = readline();
        echo "Wat is je droom?" . PHP_EOL;
        $dream = readline();
        $a[$n] = $dream;
    }
    echo "Op jouw bucket list staat:" . PHP_EOL;
    foreach ($a as $n => $dream) {
        echo "> De droom van $n is: $dream" . PHP_EOL;
    }
} else {
    echo "$input ?" . PHP_EOL;
}

?>