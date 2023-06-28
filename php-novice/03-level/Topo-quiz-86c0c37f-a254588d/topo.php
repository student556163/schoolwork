<?php

$x = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "London"
];
$z = 0;
foreach ($x as $land => $city) {
    echo "Welke hoofdstad heeft $land?" . PHP_EOL;
    $y = readline();
    if ($y == $city) {
        echo "Correct!";
        $z++;
    } else {
        echo "Helaas, $y is niet de hoofdstad van $land." . PHP_EOL;
        echo "Het correcte antwoord is: $city";
    }
}
echo "$z van de 10 goed";
