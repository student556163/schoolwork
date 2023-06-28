<?php

if (empty($argv[1])) {
    echo "Geen wisselgeld";
    exit;
}
$result = $argv[1];

if (intval($result)) {
    if ($result > 0) {
        echo "$result x 1 euro";
    } else {
        echo "geen wisselgeld boom";
    }
} else {
    echo "Geen wisselgeld";
}

?>