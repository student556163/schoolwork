<?php

$val = 0;
$ave = 0;

echo "Het albumoverzicht :" . PHP_EOL;
$items = array("Citizen of Glass" => 4.5,
"Night" => 9,
"New Eyes" => 5,
"Strange Trails" => 10
);

foreach ($items as $key => $price) {
    echo "$key kost €price" . PHP_EOL;
    $val = $val + $price; 
}
$ave = $val / count($items);
echo "Het totaalbedrag van alle albums is €28.5" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €7.125" . PHP_EOL;

?>