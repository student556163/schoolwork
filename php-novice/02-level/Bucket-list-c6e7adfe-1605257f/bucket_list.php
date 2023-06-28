<?php

echo "hoeveel activiteiten wil je toevoegen?" . PHP_EOL;

$userInput = readline();

$array = [];
for ($counter = 0; $counter < $userInput; $counter++) {
    echo "wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
    $activiteit = readline();
    $array[] = $activiteit;
} 


var_dump($array);



?>