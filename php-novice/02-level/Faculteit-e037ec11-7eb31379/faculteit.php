<?php

$int = readline("Van welk getal wil je de faculteit weten? ");
$ant = 1;

for ($x = $int; $x >= 1; $x--) {
    $ant = $ant * $x;
}
    echo "Faculteit van $int is $ant" . PHP_EOL;

?>