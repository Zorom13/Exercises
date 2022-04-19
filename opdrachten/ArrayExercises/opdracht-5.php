<?php

$weeklyTemps = [
    "Maandag" => [
        "Groningen" => 25,
        "Assen" => 12,
        "Emmen" => 19
    ],
    "Dinsdag" => [
        "Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
    "Woensdag" => [
        "Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];

foreach ($weeklyTemps as $day => $city) {

    asort($city);
    $hoogste = array_slice($city, -1);
    foreach ($city as $cityName => $temp) {
    }
    echo "De hoogste temperatuur op " . $day . " was " . $temp . " graden in " . $cityName;
    echo "<br>";
}