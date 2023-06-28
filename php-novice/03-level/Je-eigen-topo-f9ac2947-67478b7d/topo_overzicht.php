<?php

$input = readline("Hoeveel landen ga je toevoegen?");
$landen = [];

for ($x = 0; $x < $input; $x++) {
    $land = readline("welke land wil je toevoegen?");
    $stad = readline("wat is de hoofstad van $land");

    $landen[$land] = $stad;
}
foreach ($landen as $land => $stad) {
    echo "De volgende landen en steden zitten in de database: $land $stad";
}


?>